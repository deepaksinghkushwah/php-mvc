<h1>Welcome <?=Session::get("name")?></h1>
<hr>
<?php
$model = new User_Model();
$rec = $model->test();
if (count($rec) > 0) {
    foreach ($rec as $row) {
        echo "Title: " . $row['title'] . "<Br>";
    }
}