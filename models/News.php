<?php
ini_set('display_errors','On');
error_reporting('E_DEPRECATED');

require '/../components/db_params.php';

class News{
    public static function sqlSelect($query)
    {
        $result = mysql_query($query);
        while(false !== ($row = mysql_fetch_array($result))){
            $arr[] = $row;
        }

        return $arr;

    }

    public static function sqlSelectById($id)
    {
        $result = mysql_query('SELECT * FROM news WHERE id='.$id);
        while(false !== ($row = mysql_fetch_array($result))){
            $arr[] = $row;
        }

        return $arr;
    }

    public static function sqlInsert($title, $content, $date)
    {

    }
}