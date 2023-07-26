$(document).ready(function(){
    $('#button_filter_desc').click(function(){
        $('.selected_button').toggleClass('selected_button');
        $('#button_filter_desc').toggleClass('selected_button');
      
        updateTableAjax(FILTER_MODE_DESC);
    })
})