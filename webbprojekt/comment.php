<? php

require('view_comment.php');
require('comment_controller.php');
require('comment_model.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo "hej";
 // kollar om det finns en inskriven kommentar
	  if (isset($_POST['comment'])){
	  	//kollar om personen som skrivit kommentaren är inloggad 
	  	echo "hej";
	 		if (isset($_SESSION['u_id']) && isset($_SESSION['u_uid'])) {

	 			$controller->create_comment();
	 			$model->post_comment();

	}
	$view->output();
}