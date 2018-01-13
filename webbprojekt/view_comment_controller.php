<?php

require('config.php');

$recept = "";

if (isset($_POST['recept'])){

	$recept = $_POST['recept']; 
} else {
	$recept = $_SERVER['REQUEST_URI']; 
}


$query = "SELECT User, Comment, Created_at FROM Comments WHERE Recept = '$recept'";
$result = mysqli_query($link, $query);

if($result){
	
	while($row = mysqli_fetch_assoc($result)){

		//$row = mysqli_fetch_assoc($row);
		$Username = $row['User'];
		$Comment = $row['Comment'];
		$Created = $row['Created_at'];

		printf ("<div><p id='comment'>%s</p>
				<p id='user'>%s</p>
				<p id='date'>%s</p>
				<button id='delete_button' class ='delete_button'>Delete</button></div>", $Comment, $Username, $Created);
	}
} 

?>


