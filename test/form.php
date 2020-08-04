<?php
require "../config/params.php";
require "../libs/Model.php";
require "../models/Article_Model.php";


for ($i = 10; $i < 100; $i++) {
    $model = new Article_Model();
    $content = file_get_contents('https://loripsum.net/api/10/short/headers');
    $model->insert("article", [
        'title' => "My article " . $i,
        'description' => "My article " . $i,
        'url' => "My article " . $i,
        'content' => $content,
        'category_id' => 2
    ]);
}