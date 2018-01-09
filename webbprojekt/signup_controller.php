
<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
        $query = "INSERT INTO users (user_uid, user_pwd) VALUES ('$username', '$password')";
        $result = mysqli_query($link, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>

