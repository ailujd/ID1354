<?php
  require_once('config.php');
  session_start();

  if (isset($_POST['username']) && isset($_POST['password'])) {
    
     
    $uid = mysqli_real_escape_string($link, $_POST['username']);
    $pwd = mysqli_real_escape_string($link, $_POST['password']);

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
      $fmsg ="Failed";
    } else {
      $sql = "SELECT * FROM users WHERE user_uid='$uid'";
      $result = mysqli_query($link, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        $fmsg ="Failed";
      } 
      else {
        if ($row = mysqli_fetch_assoc($result)) {
          //De-hashing the password
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if ($hashedPwdCheck == false) {
            $fmsg ="Failed";
          } 
          else if ($hashedPwdCheck == true) {
            //Log in the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_uid'] = $row['user_uid'];
            $smsg ="Logged In";      
          }
        }
      }
    }
  }
?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>



