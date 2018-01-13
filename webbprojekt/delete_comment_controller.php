<?php

require_once('config.php');

$Username = $_POST['User'];
$Comment = $_POST['Comment'];

if (isset($_POST['recept'])){
	$recept = $_POST['recept']; 
} else {
	$recept = $_SERVER['REQUEST_URI']; 
}

$query = "DELETE FROM Comments (User, Comment, Recept) WHERE User = '$Username' AND Recept = '$Recept' AND Comment = '$Comment' ";

$result = mysqli_query($link, $query);

if($result){
	$smsg = "FAN VAAA BRA";
} else {
	$fmsg =" FAN FAN FAN ";
}

?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
