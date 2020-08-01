<?php

echo "Welcome " . Session::get("name") . '<hr>';
$model = new User_Model();
$rec = $model->test();
if (count($rec) > 0) {
    foreach ($rec as $row) {
        echo "Title: " . $row['title'] . "<Br>";
    }
}