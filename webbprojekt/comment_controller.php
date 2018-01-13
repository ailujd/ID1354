<? php

class View{

private $model;

public function__construct($model){
$this->model = $model;
$this->model->$recept = $_SERVER['REQUEST_URI'];
}

public funtion create_comment(){
$this->model->username = $_SESSION['u_uid'];
$this->model->$comment = mysqli_real_escape_string($link, $_POST['comment']);

if (isset($_POST['recept'])){
	$this->model->$recept = $_POST['recept'];
}else{
	$this->model->$recept = $_SERVER['REQUEST_URI'];
}

}

}