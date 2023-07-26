function clickToOpenPopupWindow (button_class, popup_window_id) {
  $(button_class).click(function() {
    $('body').css('overflowY', 'hidden');
    $(popup_window_id).css('display', 'block');
  })
}



function clickObjectToClosePopupWindow(window_id, window_object_id) {  
  $(window_object_id).click(function() {
    $('body').css('overflowY', 'auto');
    $(window_id).css('display', 'none');
  })
}



function clickOutOfFormToClosePopupWindow(window_id) {
  $(document).mouseup(function (e) {
    var container = $(window_id);
    if (container.has(e.target).length === 0){
        container.hide();
        $('body').css('overflowY', 'auto');
    }
  })
}



function updateTable(selector, data) {
  $(selector).empty();
  $(selector).html(data);
  
  $('.edit_button').click(function() {
    $('body').css('overflowY', 'hidden');
    
    $('#popup_window_edit').attr('data-cat-id', $(this).closest('tr').attr('data-cat-id'));
    
    $('#name_edit').val($(this).closest('tr').attr('data-cat-name'));
    $('#age_edit').val($(this).closest('tr').attr('data-cat-age'));
    
    $('#popup_window_edit').css('display', 'block');
  })
  
  var url = 'php/removeCat.php';
  $('.remove_button').click(function(){
    var id_object = $(this).closest('tr').attr('data-cat-id');
    $(this).closest('tr').remove();
    $.ajax({
      url:url,
      method:"post",
      data:{id_object:id_object},
      dataType:"text",
      success:function()
      { 
      }
    })
  })
}



function updateTableAjax(filter_mode) {
  $.ajax({
    url:"php/updateTable.php",
    method:"post",
    data:{filter:filter_mode},
    dataType:"text",
    success:function(data)
    {
      updateTable('#table tbody', data);
    }
  })
}



function getCurrentFilterMode() {
  if ($('#button_filter_asc').hasClass('selected_button')) {
    return FILTER_MODE_ASC;
  } else if ($('#button_filter_desc').hasClass('selected_button')) {
    return FILTER_MODE_DESC;
  } else {
    return FILTER_MODE_DEFAULT;
  }
}