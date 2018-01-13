<?php
  require('signup_controller.php');

  ?>


<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <title>Tasty Recipes</title>
    
    <link   href="reset.css"
            rel="stylesheet"
            type="text/css">
    
    <link   href="main.css"
            rel="stylesheet"
            type="text/css">
     
    
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="background-image: url(a.jpg)">

<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="recept.html">Recipes</a></li>
  <li><a href="calender.html">Calender</a></li>
  <li><a href="login.php">Log in / Log off</a></li>
</ul>
   
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
        
      
      </form>


    
</body>

</html>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>