<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img//favicon.png" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>

<body class="modal-active">
    <div class="preloader">
        <svg class="preloader-logo" width="188" height="204" viewBox="0 0 188 204" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <g id="preloader-logo">
                <circle id="preloader-logo-border" opacity="0.3" cx="93.9291" cy="103.166" r="93.9291"
                        fill="#6766E2"></circle>
                <circle id="preloader-logo-circle" cx="93.9279" cy="103.165" r="81.7594" fill="#6766E2"></circle>
                <path id="preloader-logo-letter"
                      d="M46.6596 101.725C46.6596 92.2314 48.5583 83.7776 52.3557 76.3636C56.2435 68.9497 61.7588 63.2084 68.9015 59.1397C76.0442 54.9807 84.4528 52.9011 94.1271 52.9011C102.445 52.9011 109.859 54.4834 116.369 57.6479C122.969 60.722 128.304 65.1071 132.372 70.8032C136.531 76.4993 139.289 83.1447 140.645 90.7395H108.91C107.463 87.575 105.384 85.1338 102.671 83.416C100.049 81.6077 97.0204 80.7035 93.5846 80.7035C88.5214 80.7035 84.498 82.6022 81.5143 86.3996C78.621 90.197 77.1744 95.3054 77.1744 101.725C77.1744 108.144 78.621 113.253 81.5143 117.05C84.498 120.847 88.5214 122.746 93.5846 122.746C97.0204 122.746 100.049 121.887 102.671 120.169C105.384 118.361 107.463 115.875 108.91 112.71H140.645C139.289 120.305 136.531 126.95 132.372 132.647C128.304 138.343 122.969 142.773 116.369 145.937C109.859 149.012 102.445 150.549 94.1271 150.549C84.4528 150.549 76.0442 148.514 68.9015 144.446C61.7588 140.287 56.2435 134.5 52.3557 127.086C48.5583 119.672 46.6596 111.218 46.6596 101.725Z"
                      fill="white" fill-opacity="0.85"></path>
            </g>
        </svg>
    </div>
    <div id="<?= is_front_page() ? 'mainPage' : '' ?><?= is_page('top') ? 'topPage' : '' ?>" class="wrapper">
        <header class="header container middle">
            <a class="header-logo" href="<?= home_url() ?>">
                <img class="header-logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.png" alt="СoinResident Logo">
            </a>
        <nav class="header-nav">
            <a class="header-nav-link" href="<?= home_url() ?>/country">Countries</a>
            <a class="header-nav-link" href="<?= home_url() ?>/exchange">Exchanges</a>
        </nav>
    </header>
