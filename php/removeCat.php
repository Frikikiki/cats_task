<?php

require ('connectToDB.php');


$id_cat = $_POST['id_object'];


$sql_remove_cat = "DELETE FROM cat WHERE id_cat = {$id_cat};";
$remove_cat_result = mysqli_query($link, $sql_remove_cat);

?>