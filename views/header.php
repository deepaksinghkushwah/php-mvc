<!Doctype Html>
<html>
    <head>
        <title><?=$this->title?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=SITE_URL?>public/css/style.css">
    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?=SITE_URL?>index">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=SITE_URL?>index">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=SITE_URL?>user/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=SITE_URL?>user/signup">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=SITE_URL?>help/index">Help</a>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <div id="content" class="container">
