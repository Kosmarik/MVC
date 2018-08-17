<?php
require_once  '/var/www/html/MVC/model/CommentModel.php';

class Comments{

  public function insert(){
      $data = array();
      $data['name'] = $_POST['usrname'];
      $data['id'] = $_POST['id'];
      $data['comment'] = $_POST['comment'];

      $model = new CommentModel();
      $model->insertNewComment($data);
  }
}


//$new = new Comments();
//echo $new->getUserName();
