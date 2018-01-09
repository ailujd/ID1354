<?php

require('config.php');

$recept = $_SERVER['REQUEST_URI'];
$query = "SELECT User, Comment, Created_at FROM Comments WHERE Recept = '$recept'";
$result = mysqli_query($link, $query);

if($result){
	
	while($row = mysqli_fetch_assoc($result)){

		//$row = mysqli_fetch_assoc($row);
		$Username = $row['User'];
		$Comment = $row['Comment'];
		$Created = $row['Created_at'];

		printf ("<form action='delete_comment_controller.php' metod='POST'>User: <input type='text' name='user'  value='%s' readonly><br>%s<br>Comment <input type='text' name='Comment' value='%s' readonly><br><input type='submit' value='Delete'></form>", $Username, $Created, $Comment);
	}
} 

?>

