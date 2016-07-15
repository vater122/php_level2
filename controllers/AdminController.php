<?php

class AdminController
{
    public function actionAdd()
    {
        if(isset($_POST['title']) && isset($_POST['content'])){
            $article = new News();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->insert();
        }
        header("Location: /php_level2/index.php");
    }

    public function actionDelete()
    {
        $article = new News();
        $article->delete($_GET['id']);
        header("Location: /php_level2/index.php");
    }

    public function actionUpdate()
    {
        if(isset($_POST['title']) && isset($_POST['content'])){
        $article = new News();
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->update($_GET['id']);
        }
        header("Location: /php_level2/index.php");
    }

    public function actionViewLog()
    {
        $data = [];
        $view = new View();
        if(file_exists('log.txt')) {
            // Открыть текстовый файл
            $f = fopen("log.txt", "r");

            // Читать построчно до конца файла
            while (!feof($f)) {
                $data[] = fgets($f);
            }

            // Закрыть текстовый файл
            fclose($f);
        }else{
            $data[]='Log file is empty!';
        }


        $view->arr = $data;
        $view->display('errlog.php');
    }
}