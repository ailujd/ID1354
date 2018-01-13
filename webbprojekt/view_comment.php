<? php

class View{

private $model;
private $controller;

public function__construct($controller, $model){
$this->controller = $controller; 
$this->model = $model;
}

public function output(){

	$result = $model->$comments;
	
	while($row = mysqli_fetch_assoc($result)){

		//$row = mysqli_fetch_assoc($row);
		$Username = $row['User'];
		$Comment = $row['Comment'];
		$Created = $row['Created_at'];

		printf ("<div><p id='comment'>%s</p>
				<p id='user'>%s</p>
				<p id='date'>%s</p>
				<button id='delete_button' class ='delete_button'>Delete</button></div>", $Comment, $Username, $Created);
		}
	}



}