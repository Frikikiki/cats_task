<?php

require ('connectToDB.php');


$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];


$sql_update = "UPDATE cat SET name='{$name}', age={$age} WHERE id_cat={$id};";
$update_result = mysqli_query($link, $sql_update);
?>