<? php

require_once('config.php');

class Model{

public $username;
public $comment; 
public $recept;
public $comments;

public function__construct(){


}

public function post_comment(){
$query = "INSERT INTO Comments (User, Comment, Recept) VALUES ('$username', '$comment', '$recept')";
mysqli_query($link, $query);
}

public function get_comment(){
$query = "SELECT User, Comment, Created_at FROM Comments WHERE Recept = '$recept'";
$this->$comments = mysqli_query($link, $query);

}


}