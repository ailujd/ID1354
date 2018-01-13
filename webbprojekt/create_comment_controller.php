<?php
	require('config.php');
    
    session_start();

	   // kollar om det finns en inskriven kommentar
	  if (isset($_POST['comment'])){

	   //kollar om personen som skrivit kommentaren är inloggad 
	 		if (isset($_SESSION['u_id']) && isset($_SESSION['u_uid'])) {
	        
	        $username = $_SESSION['u_uid'];
	        $comment = mysqli_real_escape_string($link, $_POST['comment']);
	 		

	 		if (isset($_POST['recept'])){

			$recept = $_POST['recept']; 
				} else {
			$recept = $_SERVER['REQUEST_URI']; 
				}

	        $query = "INSERT INTO Comments (User, Comment, Recept) VALUES ('$username', '$comment', '$recept')";
	        

	        $result = mysqli_query($link, $query);
	        if($result){
	            $smsg = "User Created Successfully.";
	        }else{
	            $fmsg ="User Registration Failed";
	        }
	    }
	}
?>
