<?php
$front_page_id = get_option('page_on_front');
$banner_hidden = get_field('banner_hidden', $front_page_id);
$banner_title = get_field('banner_title', $front_page_id);
$banner_text = get_field('banner_text', $front_page_id);

$header_logo = get_field('header_logo', 'option');
$whatsapp = get_field('whatsapp', 'option');
$vk = get_field('vk', 'option');
$link_url = is_array($vk['link']) && isset($vk['link']['url']) ? $vk['link']['url'] : '#';
$icon_url = isset($vk['icon']['url']) ? $vk['icon']['url'] : '';
$phone = get_field('phone', 'option');

?>


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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
          rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/main.css">
    <title>Гарант</title>
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
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo $header_logo['url'] ?>" alt="">
                </a>

                <nav>
                    <a href="#objects" class="nav_item">объекты</a>
                    <a href="#about_us" class="nav_item">Информация</a>
                    <a href="#contact" class="nav_item">Контакты</a>
                </nav>

                <div class="contact_info_row">
                    <div class="phone">
                        <img src="<?php echo get_template_directory_uri() ?>assets/images/phone_icon.svg" alt="" class="phone_icon">
                        <a href="tel:<?= $phone['phone'] ?>" class="phone_text"><?= $phone['title'] ?></a>
                    </div>

                    <div class="socials">
                        <a href="<?php echo $whatsapp['link']['url'] ?>" target="_blank">
                            <img src="<?php echo $whatsapp['icon']['url'] ?>" alt="">
                        </a>
                        <?php if ($icon_url): ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="_blank">
                            <img src="<?php echo esc_url($icon_url); ?>" alt="">
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>


            <?php if ($banner_hidden !== "Да"): ?>
                <!-- header_hero -->
                <div class="hero">
                    <div class="info">
                        <div class="title"><?= $banner_title ?></div>
                        <div class="sub_title">
                            <?= $banner_text ?>
                        </div>
                    </div>
                    <div class="button_container">
                        <a href="<?php echo $whatsapp['link']['url'] ?>" target="_blank" class="button">
                            <img src="<?php echo $whatsapp['icon']['url'] ?>" alt="">
                            <span><?= $whatsapp['title'] ?></span>
                        </a>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </header>
