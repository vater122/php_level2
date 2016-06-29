<?php


class NewsController{

    public function actionAll()
    {
        $obj = new News();
        $arr = News::sqlSelectAll();
        include __DIR__ . "/../views/index.php";

    }

    public function actionOne()
    {
        $obj = new News();
        $id = $_GET['id'];
        $arr = News::sqlSelectById($id);
        include __DIR__ . "/../views/new.php";
    }

}