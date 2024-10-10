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