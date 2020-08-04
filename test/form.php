<?php

require "../config/params.php";
require "../libs/Model.php";
require "../libs/RequestHelper.php";
require "../models/Article_Model.php";

$model = new Article_Model();
for ($i = 0; $i < 10; $i++) {
    

    $content = file_get_contents('https://loripsum.net/api/10/short/headers');
    $title = substr(strip_tags($content), 0, 150);
    $desc = substr(strip_tags($content), 0, 250);
    $url = RequestHelper::purify(strtolower(str_replace(" ", "-", substr(strip_tags($content), 0, 50))), ['.','?','&','^']);


    $model->insert("article", [
        'title' => $title,
        'description' => $desc,
        'url' => $url,
        'content' => $content,
        'category_id' => 2,
        'keywords' => $title,
    ]);
    
}