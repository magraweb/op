<?php

include "model/articleModel.php";

class articleController {

    public function index()
    {
        $articles = new articleModel();
        $articles = $articles->getAllArticle();

        if($articles) {
            include "view/article_index.php";
        } else {
            echo "there is no articles";
        }
    }

    public function make()
    {

        if(!isset($_SESSION['user_login'])){
            header("Location: ../index/index");
        }

        include "view/article_make.php";
    }

    public function edit()
    {
        if(!isset($_SESSION['user_login'])){
            header("Location: ../index/index");
        }
        $article = new articleModel();
        $article = $article->getArticleById($_POST['article_id']);
        include "view/article_edit.php";
    }

    public function create()
    {
        $article = new articleModel();
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];

        if($article->create()){
            header("Location: ../article/index");
        }else {
            echo "there was an error occur";
        }
    }

    public function update()
    {

        $article = new articleModel();
        $article->id = $_POST['article_id'];
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];

        if($article->update()){
            header("Location: ../article/index");
        } else {
            echo "there was an error occur";
        }
    }

    public function delete()
    {

        $article = new articleModel();
        $article->id = $_POST['article_id'];

        if($article->delete()){
            header("Location: ../article/index");
        } else {
            echo "there was an error occur";
        }
    }
}