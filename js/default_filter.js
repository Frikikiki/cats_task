$(document).ready(function(){    
    $('#button_filter_default').click(function(){
        
        $('.selected_button').toggleClass('selected_button');
        $('#button_filter_default').toggleClass('selected_button');
        
        updateTableAjax(FILTER_MODE_DEFAULT);
    })
})