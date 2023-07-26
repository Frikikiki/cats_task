$('#add_cat_form').on('submit', function(e){
  
  e.preventDefault();

  var name = $('#name_add').val();
  var age = $('#age_add').val();
  
  $('#add_cat_form input[type="text"]').val('');
    
  var filter_mode = getCurrentFilterMode();

  $.ajax({
    url:"php/addCat.php",
    method:"post",
    data:{name:name,age:age},
    dataType:"text",
    success:function(data)
    {
      updateTableAjax(filter_mode);
    }
  })
})