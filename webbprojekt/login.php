<?php
  require('login_controller.php');
?>

<html>
<body>
<div class="container">
      <form method="POST">
        <h2>Login</h2>
         <div>
        <span id="basic-addon1">Username</span>
        <input type="text" name="username" placeholder="Username" required>
  </div>

        
        <label for="inputPassword">Password</label>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
        <button type="submit">Login</button>
      
      </form>
</div>
</body>
</html>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>


<?php if($_SESSION['u_id']){ ?><div class="alert alert-success" role="alert"> <?php echo $_SESSION['u_id']; ?> </div><?php } ?>
<?php if($_SESSION['u_uid']){ ?><div class="alert alert-danger" role="alert"> <?php echo $_SESSION['u_uid']; ?> </div><?php } ?>

