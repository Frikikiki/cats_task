$(document).ready(function(){
    $('#button_filter_asc').click(function(){
        $('.selected_button').toggleClass('selected_button');
        $('#button_filter_asc').toggleClass('selected_button');
      
        updateTableAjax(FILTER_MODE_ASC);
    })
})