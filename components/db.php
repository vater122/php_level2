<?php

class Db
{

    private $dbh;
    private $className = 'stdClass';

    public function __construct()
    {
            $this->dbh = new PDO('mysql:dbname=testing;host=localhost', 'root', '');
            $this->dbh->exec('SET NAMES utf8');
            $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

    public function query($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

}