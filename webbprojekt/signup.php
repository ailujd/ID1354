<?php
  require('signup_controller.php');

  ?>

<html>
<body>
<div class="container">
      <form method="POST">
        <h2>Please Register</h2>
       	 <div>
	  		<span id="basic-addon1">Username</span>
	  		<input type="text" name="username" placeholder="Username" required>
	</div>

        
        <label for="inputPassword">Password</label>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
        <button type="submit">Register</button>
        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
      
      </form>
</div>
</body>
</html>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

