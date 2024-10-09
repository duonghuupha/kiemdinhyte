<?php
class Convert{
     /**
     * Convert dinh danh ngay thang
     **/
    function convertDate($text) {
		if ($text != '') {
			list ( $date, $month, $year ) = explode ( "-", $text );
			$text = $year . '-' . $month . '-' . $date;
		}
		return $text;
	}

    function generateBarcode($data) {
        $PNG_TEMP_DIR = DIR_UPLOAD.'/barcode/';
        $PNG_WEB_DIR = DIR_UPLOAD.'/barcode/';
        $SKU = $data["sku"];
        $filename = $PNG_TEMP_DIR.$SKU.'.png';
        if(file_exists($filename)){
            return $filename;
        }else{
            $productData = $SKU;
            $barcode = new \Com\Tecnick\Barcode\Barcode();
            $bobj = $barcode->getBarcodeObj('C128B', "{$productData}", 450, 70, 'black', array(0, 0, 0, 0));
            $imageData = $bobj->getPngData();
            file_put_contents($filename, $imageData);
            return $filename;
        }
    }

    function return_role(){
        $array_role = array(
            array("id" => "category", "title" => "Danh mục", "icon" => "list"),
            array("id" => "product", "title" => "Sản phẩm", "icon" => "cubes"),
            array("id" => "customer", "title" => "Khách hàng", "icon" => "user"),
            array("id" => "import", "title" => "Nhập kho", "icon" => "cloud-download"),
            array("id" => "seller", "title" => "Bán hàng", "icon" => "cart-plus"),
            array("id" => "exam", "title" => "Khám chữa bệnh", "icon" => "heartbeat"),
            array("id" => "revexp", "title" => "Thu", "icon" => "exchange"),
            array("id" => "report", "title" => "Báo cáo thống kê", "icon" => "bar-chart"),
            array("id" => "users", "title" => "Quản lý người dùng", "icon" => "users")
        );
        return $array_role;
    }
}
?>
