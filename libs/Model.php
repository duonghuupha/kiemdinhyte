<?php
class Model {
    function __construct() {
		$this->db = new Database();
	}

    // them moi du lieu
    function insert($table, $array){
        $cols = array();
        $bind = array();
        foreach($array as $key => $value){
            $cols[] = $key;
            $bind[] = "'".$value."'";
        }
        $query = $this->db->query("INSERT INTO ".$table." (".implode(",", $cols).") VALUES (".implode(",", $bind).")");
        return $query;
    }

    // cap nhat du lieu
    function update($table, $array, $where){
        $set = array();
        foreach($array as $key => $value){
            $set[] = $key." = '".$value."'";
        }
        $query = $this->db->query("UPDATE ".$table." SET ".implode(",", $set)." WHERE ".$where);
        return $query;
    }

    // xoa du lieu
    function delete($table, $where = ''){
        if($where == ''){
            $query = $this->db->query("DELETE FROM ".$table);
        }else{
        $query = $this->db->query("DELETE FROM ".$table." WHERE ".$where);
        }
        return $query;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Kiem tra quyen truy cap du lieu
     */
    function check_role($userid, $role){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_users WHERE id = $userid
                                    AND FIND_IN_SET('$role', roles) AND active = 1");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    /**
     * Hien thi ket qua thu thuat khi sua benh an bang so phieu benh an
     */
    function get_result_clinic($id, $code){
        $query = $this->db->query("SELECT result FROM tbl_test_exam WHERE clinic_id = $id AND code = '$code'");
        $row = $query->fetchAll();
        return $row[0]['result'];
    }

    /**
     * Hien thi ket qua thu thuat khi cap nhat du lieu ket qua test bang id benh an
     */
    function get_result_clinic_pass_id($id_test, $id){
        $query = $this->db->query("SELECT result FROM tbl_test_exam WHERE clinic_id = $id_test AND code = (SELECT tbl_clinic.code
                                    FROM tbl_clinic WHERE tbl_clinic.id = $id)");
        $row = $query->fetchAll();
        return $row[0]['result'];
    }
///////////////////////////////// Begin report//////////////////////////////////////////////////////
    function get_all_product_seller_day($date_seller){
        $query = $this->db->query("SELECT qty, (SELECT imp_price FROM tbl_sanpham WHERE tbl_sanpham.id = id_product)
                                    AS imp_price FROM tbl_sellers_detail WHERE code IN (SELECT tbl_sellers.code
                                    FROM tbl_sellers WHERE DATE_FORMAT(date_seller, '%d-%m-%Y') = '$date_seller')");
        return $query->fetchAll();
    }

    function get_all_product_seller_month($month_seller){
        $query = $this->db->query("SELECT qty, (SELECT imp_price FROM tbl_sanpham WHERE tbl_sanpham.id = id_product)
                                    AS imp_price FROM tbl_sellers_detail WHERE code IN (SELECT tbl_sellers.code
                                    FROM tbl_sellers WHERE DATE_FORMAT(date_seller, '%m-%Y') = '$month_seller')");
        return $query->fetchAll();
    }

    function get_all_product_seller_year($year_seller){
        $query = $this->db->query("SELECT qty, (SELECT imp_price FROM tbl_sanpham WHERE tbl_sanpham.id = id_product)
                                    AS imp_price FROM tbl_sellers_detail WHERE code IN (SELECT tbl_sellers.code
                                    FROM tbl_sellers WHERE DATE_FORMAT(date_seller, '%Y') = '$year_seller')");
        return $query->fetchAll();
    }
    /***************************************************************************************/
}

?>
