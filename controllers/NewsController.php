<?php


class NewsController
{

    public function actionAll()
    {
            $news = News::findAll();
        if(!empty($news)) {
            $view = new View();
            $view->arr = $news;
            $view->display('index.php');
        }else {
            throw new PDOException;
        }
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $news = News::findById($id);

        if (!empty($news)) {
            $view = new View();
            $view->arr = $news;
            $view->display('new.php');
        }else {
            throw new E404Ecxeption;
        }
    }

}