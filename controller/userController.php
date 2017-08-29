<?php

include "model/userModel.php";

class userController {

    public function register()
    {
        include "view/user_register.php";
    }

    public function login()
    {
        include "view/user_login.php";
    }

    public function profile()
    {
        if(!isset($_SESSION['user_login'])){
            header("Location: ../index/index");
        }
        $user = new userModel();
        $user = $user->getUserById($_SESSION['user_id']);
        include "view/user_profile.php";
    }

    public function create()
    {
        $user = new userModel();
        $user->name = $_POST['name'];
        $user->password = sha1($_POST['password']);
        $user->user_name = $_POST['user_name'];

        if($user->create()){
            header("Location: ../user/login");
        }else {
            echo "there was an error occur";
        }
    }

    public function verifyLogin()
    {
        $user = new userModel();
        $user->user_name = $_POST['user_name'];
        $user->password = sha1($_POST['password']);

        if($user->verifyUser()){
            $_SESSION['user_login'] = $user->status;
            $_SESSION['user_id'] = $user->id;

            header("Location: ../index/index");
        } else {
            header("Location: ../user/login");
        }
    }

    public function logout(){
        unset($_SESSION['user_login']);
        unset($_SESSION['user_id']);

        session_destroy();

        header("Location: ../index/index");
    }

    public function update()
    {

        $user = new userModel();
        $user->id = $_SESSION['user_id'];
        $user->name = $_POST['name'];
        $user->user_name = $_POST['user_name'];
        $user->password = sha1($_POST['password']);

        if($user->update()){
            header("Location: ../index/index");
        } else {
            echo "there was an error occur";
        }
    }
}