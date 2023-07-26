<?php

require ('connectToDB.php');

$filter = $_POST['filter'];

$output = '';
$sql_select = '';

if ($filter == 'DEFAULT'):
    $sql_select = 'SELECT * FROM cat ORDER BY name;';
elseif ($filter == 'ASC'):
    $sql_select = 'SELECT * FROM cat ORDER BY age ASC;';
elseif ($filter == 'DESC'):
    $sql_select = 'SELECT * FROM cat ORDER BY age DESC;';
endif;

$select_result = mysqli_query($link, $sql_select);

while($row = mysqli_fetch_array($select_result))
{
  $output .= '
    <tr data-cat-id="'.$row["id_cat"].'" data-cat-name="'.$row["name"].'" data-cat-age="'.$row["age"].'">
      <th scope="row">'.$row["name"].'</th>
	  <th scope="row">'.$row["age"].'</th>
      <td><button type="submit" class="edit_button" title="Click to edit the cat">✎</button></td>
      <td><button type="submit" class="remove_button" title="Click to remove the cat">&times;</button></td>
    </tr>';
}

echo $output;

?>