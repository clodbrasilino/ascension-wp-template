<?php $url = site_url(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="<?php bloginfo('author')?>">

    <title><?php bloginfo('name')?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/ascension/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
        <div class="social-bar">
            <a href="#" class="">
                <img class="social-icon" src="/wp-content/themes/ascension/images/youtube.png">
            </a>
            <a href="#" class="">
                <img class="social-icon" src="/wp-content/themes/ascension/images/facebook.png">
            </a>
            <a href="#" class="">
                <img class="social-icon" src="/wp-content/themes/ascension/images/instagram.png">
            </a>
            <a href="#" class="">
                <img class="social-icon" src="/wp-content/themes/ascension/images/discord.png">
            </a>
            <a href="#" class="last-social">
                <img class="social-icon" src="/wp-content/themes/ascension/images/twitch.png">
            </a>
        </div>
        <div class="main-menu">
            <div class="menu-block menu-1">
                <a class="menu-button" href="#">ASC Membros</a>
            </div>
            <div class="menu-block menu-2">
                <!--<ul class="menu-bar">
                    <li class="menu-item">ITEM 1</li>
                    <li class="menu-item">ITEM 2</li>
                    <li class="menu-item">ITEM 3</li>
                </ul>-->
                <?php wp_nav_menu( array( 'theme_location' => 'menu-esq' ) ); ?>
            </div>
            <div class="menu-block menu-3">
                <img class="brand" src="/wp-content/themes/ascension/images/logo.png">
            </div>
            <div class="menu-block menu-4">
                <!--<ul class="menu-bar">
                    <li class="menu-item">ITEM 4</li>
                    <li class="menu-item">ITEM 5</li>
                    <li class="menu-item">ITEM 6</li>
                </ul>-->
                <?php wp_nav_menu( array( 'theme_location' => 'menu-dir' ) ); ?>
            </div>
            <div class="menu-block menu-5">
                <a href="#" class="search-button">
                    <img class="menu-button" src="/wp-content/themes/ascension/images/busca.png">
                </a>
            </div>
        </div>
    </header>
    <div class="main-banner">
    </div>
