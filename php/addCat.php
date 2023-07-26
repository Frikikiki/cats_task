<?php

require ('connectToDB.php');


$name = $_POST['name'];
$age = $_POST['age'];


$sql_insert = "INSERT INTO cat(name, age) VALUES ('{$name}', $age);";
$insert_result = mysqli_query($link, $sql_insert);
?>