<?php

include "model/db_object.php";

class articleModel extends db_object{

    public $id;
    public $title;
    public $content;

    public function create(){

        $query = "INSERT INTO article (title, content) VALUES ('{$this->title}','{$this->content}')";

        mysqli_query($this->connection,$query);

        if(mysqli_affected_rows($this->connection) == 1){
            return true;
        } else {
            return false;
        }
    }

    public function getAllArticle(){

        $query = "SELECT * FROM article";

        $result = mysqli_query($this->connection,$query);

        if(mysqli_num_rows($result) >= 1){

            return $result;
        } else {
            return false;
        }
    }

    public function getArticleById($id){

        $query = "SELECT * FROM article WHERE id = {$id}";

        $result = mysqli_query($this->connection,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            return $row;
        } else {
            return false;
        }
    }

    public function update()
    {
        $query = "UPDATE article SET title = '{$this->title}',content = '{$this->content}' WHERE id = {$this->id}";

        mysqli_query($this->connection,$query);

        if(mysqli_affected_rows($this->connection) == 1){
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM article WHERE id = {$this->id}";

        mysqli_query($this->connection,$query);

        if(mysqli_affected_rows($this->connection) == 1){
            return true;
        } else {
            return false;
        }
    }
}