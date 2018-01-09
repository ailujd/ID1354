<?php

require('create_comment_controller.php');

?>

<html>
<body>
<div class="container">
  <?php
    require('view_comment_controller.php');
  ?>
      <form method="POST">
        <h2>Comment</h2>
         <div>
        <input type="text" name="comment" placeholder=" - - - " required>
  </div>

        <button type="submit">Post</button>
      
      </form>
</div>
</body>
</html>

<?php if($_SESSION['u_id']){ ?><div class="alert alert-success" role="alert"> <?php echo $_SESSION['u_id']; ?> </div><?php } ?>
<?php if($_SESSION['u_uid']){ ?><div class="alert alert-danger" role="alert"> <?php echo $_SESSION['u_uid']; ?> </div><?php } ?>