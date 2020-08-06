<?php
require "../config/params.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/facebook-plugin/style.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/tether/tether.min.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/socicon/css/styles.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/dropdown/css/style.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/theme/css/style.css">
        <link rel="preload" as="style" href="<?= SITE_URL . 'public/' ?>assets/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>assets/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="<?= SITE_URL . 'public/' ?>css/style.css" type="text/css">
</head>
<body>
    <div class="container mt-5">        
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1><?=SITE_NAME?></h1>
                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quin etiam ferae, inquit Pacuvius, quíbus abest, ad praécavendum intéllegendi astútia, iniecto terrore mortis horrescunt. Minime id quidem, inquam, alienum, multumque ad ea, quae quaerimus, explicatio tua ista profecerit. Crassus fuit, qui tamen solebat uti suo bono, ut hodie est noster Pompeius, cui recte facienti gratia est habenda; Vos autem cum perspicuis dubia debeatis illustrare, dubiis perspicua conamini tollere. <a href='http://loripsum.net/' target='_blank'>Nulla erit controversia.</a> Duo Reges: constructio interrete. Itaque et manendi in vita et migrandi ratio omnis iis rebus, quas supra dixi, metienda. Ut enim consuetudo loquitur, id solum dicitur honestum, quod est populari fama gloriosum. </p>
                    <footer class="blockquote-footer">
                        Regards<br>
                        <strong>Team <?=SITE_NAME?></strong>
                    </footer>
                </div>
                <div class="card-footer">&nbsp;</div>
                    

            </div>
        </div>
    </div>
</body>
</html>
<?php
/*
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
    
}*/