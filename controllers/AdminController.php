<?php

class AdminController
{
    public function actionAdd()
    {
        $obj = new News();
        if(isset($_POST['title']) && isset($_POST['content'])){
            News::sqlInsert($_POST['title'], $_POST['content']);
        }
        header("Location: /php_level2/index.php");
    }
}