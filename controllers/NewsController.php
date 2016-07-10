<?php


class NewsController{

    public function actionAll()
    {
        $obj = new News();
        $news = News::sqlSelectAll();
        
        $view = new View();
        $view->arr = $news;
        $view->display('index.php');

    }

    public function actionOne()
    {
        $obj = new News();
        $id = $_GET['id'];
        $news = News::sqlSelectById($id);

        $view = new View();
        $view->arr = $news;
        $view->display('new.php');
    }

}