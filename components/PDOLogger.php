<?php

class PDOLogger extends ErrorException
{
    public function saveError($e, $h)
    {
        file_put_contents('log.txt', date("d.m.y [h:i:s]") . ' -> ' . $h . ' ' . $e->getMessage() . ' ' . $e->getFile() . "\n", FILE_APPEND);
    }
}