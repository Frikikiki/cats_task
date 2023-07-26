<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Котики</title>
        <link rel="icon" type="image/png" href="images/favicon.png">
		<link rel="stylesheet" href="css/cats.css">
        <link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class="all_content">
			<div class="filters" id="filters_buttons">
			<button class="unselected_button selected_button button filter_button" id="button_filter_default"><span>Default</span></button>
			<button class="unselected_button button filter_button" id="button_filter_asc"><span>Asc</span></button>
			<button class="unselected_button button filter_button" id="button_filter_desc"><span>Desc</span></button>
			</div>

			<table class="table" id="table">
			<tbody>          
			</tbody>
			</table>

			<button class="add_button button" id="add_cat_button"><span>Add</span></button>

			<div class="popup_window" id="popup_window_add">            
			<div class="popup_window_container">
				<img src="images/close.png" alt="" class="popup_window_close" id="window_add_close">
				<form name="add_form" class="add_form" id="add_cat_form">
					<label for="name_add" class="label_text field_title">Name</label><br>
					<input type="text" id="name_add" name="name_add" class="active_field input_text input_text_popup field_text" required/><br>
					<label for="age_add" class="label_text field_title">Age</label><br>
					<input type="text" id="age_add" name="age_add" class="active_field input_text input_text_popup field_text" required/><br>
					<input type="submit" value="Add" class="submit button cursor_pointer" id="add_age_submit">
				</form>
			</div>
			</div>

			<div class="popup_window" id="popup_window_edit" data-cat-id="">            
				<div class="popup_window_container">
					<img src="images/close.png" alt="" class="popup_window_close" id="window_edit_close">
					<form name="edit_form" class="edit_form" id="edit_cat_form">
						<label for="name_edit" class="label_text field_title">Name</label><br>
						<input type="text" id="name_edit" name="name_edit" class="active_field input_text input_text_popup field_text" required/><br>
						<label for="age_edit" class="label_text field_title">Age</label><br>
						<input type="text" id="age_edit" name="age_edit" class="active_field input_text input_text_popup field_text" required/><br>
						<input type="submit" value="OK" class="submit button cursor_pointer" id="edit_age_submit">
					</form>
				</div>
			</div>  
        </div>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/consts.js"></script>
		<script src="js/common.js"></script>
        <script src="js/onload.js"></script>
		<script src="js/add_cat_form.js"></script>
        <script src="js/edit_cat_form.js"></script>
        <script src="js/default_filter.js"></script>
        <script src="js/asc_filter.js"></script>
        <script src="js/desc_filter.js"></script>
	</body>
</html>