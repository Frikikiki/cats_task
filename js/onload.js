window.onload = function() {
 updateTableAjax(FILTER_MODE_DEFAULT);
}

$(document).ready(function(){
  clickToOpenPopupWindow('.add_button', '#popup_window_add');
  clickObjectToClosePopupWindow('#popup_window_add', '#window_add_close');
  clickObjectToClosePopupWindow('#popup_window_add', '#add_age_submit');
  clickOutOfFormToClosePopupWindow('#popup_window_add');
  clickObjectToClosePopupWindow('#popup_window_edit', '#window_edit_close');
  clickObjectToClosePopupWindow('#popup_window_edit', '#edit_age_submit');
  clickOutOfFormToClosePopupWindow('#popup_window_edit');
})