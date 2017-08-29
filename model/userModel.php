<?php

include "model/db_object.php";

class userModel extends db_object{

    public $id;
    public $name;
    public $user_name;
    public $password;
    public $status;

    public function create(){

        $query = "INSERT INTO users (name,user_name,password) VALUES ('{$this->name}','{$this->user_name}','{$this->password}')";

        mysqli_query($this->connection,$query);

        if(mysqli_affected_rows($this->connection) == 1){
            return true;
        } else {
            return false;
        }
    }

    public function verifyUser(){

        $query = "SELECT id,status FROM users WHERE user_name = '{$this->user_name}' AND password = '{$this->password}'";

        $result = mysqli_query($this->connection,$query);

        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_assoc($result);
            $this->id = $row['id'];
            $this->status = $row['status'];
            return true;
        } else {
            return false;
        }
    }

    public function getUserById($id){

        $query = "SELECT * FROM users WHERE id = {$id}";

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
        $query = "UPDATE users SET name = '{$this->name}',user_name = '{$this->user_name}',password = '{$this->password}' WHERE id = {$this->id}";

        mysqli_query($this->connection,$query);

        if(mysqli_affected_rows($this->connection) == 1){
            return true;
        } else {
            return false;
        }
    }
}