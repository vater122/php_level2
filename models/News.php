<?php
ini_set('display_errors', 'On');
//error_reporting('E_DEPRECATED');


abstract class AbstractModel
{

    static protected $table;

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public static function findAll()
    {
            $class = get_called_class();
            $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC';
            $db = new Db();
            $db->setClassName($class);
            return $db->query($sql);
    }

    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new Db();
        return $db->query($sql, [':id' => $id]);
    }

    public function insert()
    {
        $columns = array_keys($this->data);
        $data = [];
        foreach ($columns as $col) {
            $data[':' . $col] = $this->data[$col];
        }
        $sql = 'INSERT INTO ' . static::$table . '
          (' . implode(', ', $columns) . ')
          VALUES
          (' . implode(', ', array_keys($data)) . ')
          ';
        $db = new Db();
        $db->execute($sql, $data);
    }

    public static function findByColumn($column, $value)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
        $db = new Db();
        return $db->query($sql, [':value' => $value]);
    }

    public function update($id)
    {
        $sql = 'UPDATE news SET title=:title,content=:content WHERE id=:id';
        $db = new Db();
        $db->execute($sql, [':id' => $id , ':title' => $_POST['title'], ':content' => $_POST['content']]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = new Db();
        $db->execute($sql, [':id' => $id]);
    }


}

/**
 * Class News
 * @property $id
 * @property $title
 * @property $content
 * @property $author
 * @property $date
 */
class News extends AbstractModel
{
    protected static $table = 'news';

}