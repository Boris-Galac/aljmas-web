<html lang="en" <?php language_attributes();  ?>>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="/wp-content/themes/aljmas/src/assets/icons/logo-aljmas.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="logo">
            <a href="<?php echo site_url() ?>"><img src="/wp-content/themes/aljmas/src/assets/icons/logo-aljmas.svg"
                    alt="logo aljmas" /></a>
        </div>
        <nav class="nav" data-visible="false" id="primary-navigation">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo site_url() ?>" class="nav__link">
                        <img src="/wp-content/themes/aljmas/src/assets/icons/home-icon.svg" aria-hidden="true" />
                        Naslovna
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('mise-i-hodocasca') ?>" class="nav__link">Mise i hodočašća</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('povijest-svetista') ?>" class="nav__link">Povijest svetišta</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('prigodno') ?>" class="nav__link">Prigodno</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('memorijalni-centar') ?>" class="nav__link">Memorijalni centar</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('gospa-pod-lipom') ?>" class="nav__link">Gospa pod Lipom</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('kalvarija') ?>" class="nav__link">Kalvarija</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('kafeterija') ?>" class="nav__link">Kafeterija</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('suvenirnica') ?>" class="nav__link">Suvenirnica</a>
                </li>
            </ul>
        </nav>
        <div class="header__right-col">
            <button class="search-btn">
                <img src="/wp-content/themes/aljmas/src/assets/icons/search-icon.svg" alt="search icon" />
            </button>
            <button class="ham-btn" aria-label="ham navigation button" aria-expanded="false"
                aria-controls="primary-navigation">
                <div class="ham-line"></div>
                <div class="ham-line"></div>
                <div class="ham-line"></div>
            </button>
        </div>
    </header>