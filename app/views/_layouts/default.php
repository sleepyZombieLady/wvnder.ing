<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WVNDER | FFXIV FREE COMPANY (LAMIA)</title>

    <link rel="icon" type="image/x-icon" href="/public/img/icon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="/public/css/style.css?<?=uniqid()?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-wvndr">
        <!-- <a class="navbar-brand" href="/">WVNDR</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wvnder-main-menu" aria-controls="wvnder-main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> M E N U
        </button>

        <div class="collapse navbar-collapse" id="wvnder-main-menu">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item<?=$viewOpts['page']['section'] == 'home' ? ' active' : ''?>">
                    <a class="nav-link" href="/">H O M E</a>
                </li>
                <li class="nav-item<?=$viewOpts['page']['section'] == 'about' ? ' active' : ''?>">
                    <a class="nav-link" href="/about">A B O U T</a>
                </li>
                <li class="nav-item<?=$viewOpts['page']['section'] == 'menu' ? ' active' : ''?>">
                    <a class="nav-link" href="/menu">M E N U</a>
                </li>
                <li class="nav-item<?=$viewOpts['page']['section'] == 'gallery' ? ' active' : ''?>">
                    <a class="nav-link" href="/gallery">G A L L E R Y</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="flex-shrink-0">
        <?php
        include(views . '/content/' . $viewOpts['page']['content'] . '.php');
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
