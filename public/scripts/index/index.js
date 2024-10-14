$(function(){
    combo_select_2('#id_khach_hang', 'https://vetabyte.com/demo/mdc/api/khachhang/getKhachHang', 0, '');
});

function set_thiet_bi(idh){
    combo_select_2('#id_thiet_bi', 'https://vetabyte.com/demo/mdc/api/thietbi/getThietBi?khach_hang='+idh, 0, '');
}

function set_ho_so(idh){
    combo_select_2('#id_ho_so', 'https://vetabyte.com/demo/mdc/api/hoso/getHoSo?thiet_bi='+idh, 0, '');
}

function save(){
    var required = $('#fm input, #fm textarea, #fm select').filter('[required]:visible');
    var allRequired = true;
    required.each(function(){
        if($(this).val() == ''){
            allRequired = false;
        }
    });
    if(allRequired){
        save_form_reset('#fm', baseUrl + '/index/add'); 
    }else{
        show_message("error", "Chưa điền đủ thông tin");
    }
}