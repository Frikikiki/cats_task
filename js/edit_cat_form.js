$('#edit_cat_form').on('submit', function(e){
  
  e.preventDefault();

  var id = $('#popup_window_edit').attr('data-cat-id');
  var name = $('#name_edit').val();
  var age = $('#age_edit').val();
  
  $('#edit_cat_form input[type="text"]').val('');
    
  var filter_mode = getCurrentFilterMode();
  
  $.ajax({
    url:"php/editCat.php",
    method:"post",
    data:{id:id,name:name,age:age},
    dataType:"text",
    success:function(data1)
    {
      updateTableAjax(filter_mode);
    }
  })
})  