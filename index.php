<?php

require '/models/News.php';

$arr = News::sqlSelect('SELECT * FROM news');

include '/views/index.php';

