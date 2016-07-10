<?php


class NewsController{

    public function actionAll()
    {
        $news = News::findAll();
        $view = new View();
        $view->arr = $news;
        $view->display('index.php');

    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $news = News::findById($id);

        $view = new View();
        $view->arr = $news;
        $view->display('new.php');
    }

}