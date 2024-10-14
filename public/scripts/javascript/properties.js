$(function(){
    $('.select2').select2(); // Select box
    $('.date-picker').datepicker({autoclose: true,todayHighlight: true}); // Datebox
    //Filebox
    $('.file_attach').ace_file_input({
        no_file:'Không có file ...',btn_choose:'Lựa chọn',
        btn_change:'Thay đổi',droppable:false,
        onchange:null,thumbnail:true
    });
    $('.overlay').hide(); // loading
    $("input[data-type='currency']").on({ // Format currency onkeypress input
        keyup: function() {formatCurrency($(this));}
    });
    $("input[data_type='currency']").on({ // Format currency onkeypress input
        keyup: function() {formatCurrency($(this));}
    });
    $('[data-rel=tooltip]').tooltip({container:'body'});
    $('[data-rel=popover]').popover({container:'body'});
});

/**
 * Display notifycation
 * @param {*} icon 
 * @param {*} msg 
 */
function show_message(icon, msg){
    $.toast({
        heading: 'Thông báo',
        text: msg,
        showHideTransition: 'fade',
        icon: icon,
        position: 'top-right'
    })
}

/**
 * Format number
 * @param {*} n 
 * @returns 
 */
function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function formatCurrency(input, blur) {
    var input_val = input.val();
    if (input_val === "") { return; }
    var original_len = input_val.length;
    var caret_pos = input.prop("selectionStart");
    if (input_val.indexOf(".") >= 0) {
        var decimal_pos = input_val.indexOf(".");
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);
        left_side = formatNumber(left_side);
        right_side = formatNumber(right_side);
        if (blur === "blur") {
            right_side += "00";
        }
        right_side = right_side.substring(0, 2);
        input_val = left_side + "." + right_side;
    } else {
        input_val = formatNumber(input_val);
        input_val = input_val;
        if (blur === "blur") {
            input_val += ".00";
        }
    }
    input.val(input_val);
    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}

function validate(evt) {
    var theEvent = evt || window.event;
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

function CurrencyFormatted(amount){
	return amount.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function updatePagerIcons(table) {
    var replacement = 
    {
        'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
        'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
        'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
        'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
    };
    $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
        var icon = $(this);
        var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
        
        if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
    })
}

function combo_select_2(id, url_data, selected, title_selected){
    $(id).select2({
        ajax: {
            url: url_data,
            dataType: 'json',
            type: 'GET',
            headers: {"token": localStorage.getItem('token')},
            data: function (params) {
                var queryParameters = {
                    q: params.term
                }
                return queryParameters;
            },
            processResults: function (data) {
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.title,
                            id: item.id,
                            disabled: item.disabled
                        }
                    })
                };
            }
        }
    });
    if(selected != 0){
        var $option = $('<option selected>'+title_selected+'</option>').val(selected);
        $(id).append($option).trigger('change');
    }
}