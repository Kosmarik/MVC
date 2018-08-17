<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 15/08/2018
 * Time: 17:57
 */

require_once '/var/www/html/MVC/libs/dbConnect.php';
require_once '/var/www/html/MVC/controller/Comments.php';
class CommentModel extends dbConnect
{
    public function insertNewComment($array){
        $id = $array['id'];
        $userName = $array['name'];
        $comment = $array['comment'];
        $sql = "INSERT INTO comments (`product_id`, `username`, `comment`) VALUES ('$id', '$userName', '$comment')";
        if(!$this->conn->query($sql)){
            die($this->conn->error);
        }
    }
}
