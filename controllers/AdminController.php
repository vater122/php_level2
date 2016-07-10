<?php

class AdminController
{
    public function actionAdd()
    {
        $obj = new News();
        if(isset($_POST['title']) && isset($_POST['content'])){
            $article = new News();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->insert();
        }
        header("Location: /php_level2/index.php");
    }
}