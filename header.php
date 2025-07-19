<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font family geologica -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">
    <!-- font family open sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- font-family montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- font-family inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/main.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
    <!-- header -->
    <header>
        <div class="container">
            <!-- header row -->
            <div class="header_row">
                <a href="index.html" class="logo">
                    <img src="assets/images/header_logo.svg" alt="">
                </a>

                <nav>
                    <a href="#objects" class="nav_item">объекты</a>
                    <a href="#about_us" class="nav_item">Информация</a>
                    <a href="#contact" class="nav_item">Контакты</a>
                </nav>

                <div class="contact_info_row">
                    <div class="phone">
                        <img src="assets/images/phone_icon.svg" alt="" class="phone_icon">
                        <a href="tel:79309465784" class="phone_text">+7 (930) 946-57-84</a>
                    </div>

                    <div class="socials">
                        <a href="http://whatsapp.com/" target="_blank">
                            <img src="assets/images/whatsapp_icon.svg" alt="">
                        </a>

                        <a href="https://vk.com/" target="_blank">
                            <img src="assets/images/wk_icon.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>

            <!-- header_hero -->
            <div class="hero">
                <div class="info">
                    <div class="title">Гарант развития</div>
                    <div class="sub_title">Аренда, продажа коммерческой недвижимости своей и партнеров, строительство индустриальных объектов, консультации по рынкам CRE</div>
                </div>
                <div class="button_container">
                    <a href="http://whatsapp.com/" target="_blank" class="button">
                        <img src="assets/images/whatsapp_icon.svg" alt="">
                        <span>Написать нам whatsАpp</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
