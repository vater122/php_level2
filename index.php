<?php

require '/models/News.php';

$neww = new News();

$arr = News::sqlSelect('SELECT * FROM news');

include '/views/index.php';

