<?php
ini_set('display_errors','On');
error_reporting('E_DEPRECATED');

abstract class Article{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');

        mysql_select_db('testing');

        mysql_set_charset( 'utf8' );
    }



}
class News extends Article{

    public function __construct()
    {
        parent::__construct();
    }
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

    public static function sqlInsert($title, $content)
    {
        mysql_query('INSERT INTO news (title, content) VALUES (\''.$title.'\', \''.$content.'\')');
        var_dump('INSERT INTO news (title, content) VALUES ('.$title.', '.$content.')');
    }
}