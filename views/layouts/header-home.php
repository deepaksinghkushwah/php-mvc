<!DOCTYPE html>
<html  >
    <head>
        <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="<?= SITE_URL . 'public/' ?>assets/images/logo2.png" type="image/x-icon">
        <meta name="description" content="<?= !empty($this->description) ? $this->description : $this->title; ?>">
        <meta name="keywords" content="<?= !empty($this->keywords) ? $this->keywords : $this->title; ?>">


        <title><?= $this->title ?></title>
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
        <?php
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                ?>
                <link rel="stylesheet" href="<?= $css ?>">
                <?php
            }
        }

        if (isset($this->js)) {
            foreach ($this->js as $js) {
                if ($js['pos'] == 'head') {
                    ?>
                    <script src="<?= $js['src'] ?>"></script>
                    <?php
                }
            }
        }
        ?>


    </head>
    <body>
        <section class="menu cid-s6zQp2Vkg2" once="menu" id="menu1-4">
            <?php require 'nav.php'; ?>
        </section>


        <?php Session::showFlashMessages(); ?>    
