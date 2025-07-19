<?php
get_header();
?>


<?php
$objects_hidden = get_field('objects_hidden');
$objects_title = get_field('objects_title');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
);
$query = new WP_Query($args);
?>

<?php if ($objects_hidden !== "Да"): ?>
    <!-- objects -->
    <section class="objects" id="objects">
        <div class="container">
            <div class="section_title"><?= $objects_title ?></div>
            <?php if ($query->have_posts()): ?>
                <div class="objects_row">
                    <?php while ($query->have_posts()):
                        $query->the_post();
                        $cost = get_field('cost');
                        ?>

                        <!-- object item -->
                        <div class="object_item">
                            <div class="top">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </div>

                            <div class="bottom">
                                <div class="title"><?php the_title(); ?></div>
                                <div class="description">
                                    <?php the_content(); ?>
                                </div>

                                <div class="price">
                                    <?= $cost ?> руб./мес. за м²
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata(); ?>

                </div>
            <?php endif; ?>

            <div id="show_more" class="button_container">
                <a class="button">
                    <span>Показать больше</span>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow.svg" alt="">
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$about_title = get_field('about_title');
$about_text = get_field('about_text');
$about_hidden = get_field('about_hidden');
$whatsapp = get_field('whatsapp', 'option');
?>


<?php if ($about_hidden !== "Да"): ?>
    <!-- about us -->
    <section class="about_us" id="about_us">
        <div class="container">
            <!-- header_hero -->
            <div class="about_us_block">
                <div class="info">
                    <div class="title"><?= $about_title ?></div>
                    <div class="sub_title">
                        <?= $about_text ?>
                    </div>
                </div>
                <div class="button_container">
                    <a href="<?php echo $whatsapp['link']['url'] ?>" target="_blank" class="button">
                        <img src="<?php echo $whatsapp['icon']['url'] ?>" alt="">
                        <span><?= $whatsapp['title'] ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
$adv_text = get_field('adv_text');
$adv_image = get_field('adv_image');
$adv_hidden = get_field('adv_hidden');
?>
<?php if ($adv_hidden !== "Да"): ?>
    <!-- application -->
    <section class="application">
        <div class="container">
            <div class="application_row">
                <div class="title">
                    <?= $adv_text ?>
                </div>

                <form action="">
                    <div class="input_row">
                        <div class="input_container">
                            <input  type="tel" id="phone" class="form-input" name="tel" placeholder="+7 (___) ___-__-__">
                        </div>
                        <button type="submit">
                            <img src="assets/images/button_percent_icon.svg" alt="">
                            <span>Получить скидку</span>
                        </button>
                    </div>
                    <div class="confirm">
                        <label class="custom-checkbox">
                            <input type="checkbox" id="confirm">
                            <span class="checkmark"></span>
                        </label>
                        <label for="confirm" class="text">Отправляя форму, вы соглашаетесь с  <a target="_blank" href="https://vk.link/skladybazy?act=terms"> политикой конфиденциальности</a></label>
                    </div>
                </form>

            </div>
        </div>
    </section>
<?php endif; ?>


<?php
$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');
$contact_hidden = get_field('contact_hidden');
$vk = get_field('vk', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
?>
<?php if ($adv_hidden !== "Да"): ?>
    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact_row">
                <div class="left">
                    <div class="section_title">
                        <?= $contact_title ?>
                    </div>
                    <div class="sub_title">
                        <?= $contact_text ?>
                    </div>

                    <div class="contact_item_row">
                        <!-- contact item -->
                        <div class="contact_item">
                            <div class="top">
                                <img src="<?php echo $whatsapp['icon']['url'] ?>" alt="">
                            </div>

                            <div class="info">
                                <a href="tel:<?= $whatsapp['phone'] ?>" class="link"><?= $whatsapp['phone'] ?></a>
                                <div class="label"><?= $whatsapp['text'] ?></div>
                            </div>
                        </div>

                        <!-- contact item -->
                        <div class="contact_item">
                            <div class="top">
                                <img src="<?php echo $vk['icon']['url'] ?>" alt="">
                            </div>

                            <div class="info">
                                <a href="https://vk.com/" target="_blank" class="link"><?= $vk['title'] ?></a>
                                <div class="label"><?= $vk['text'] ?></div>
                            </div>
                        </div>

                        <!-- contact item -->
                        <div class="contact_item">
                            <div class="top">
                                <img src="<?php echo $address['icon']['url'] ?>" alt="">
                            </div>

                            <div class="info">
                                <p class="text"><?= $address['address'] ?></p>
                                <div class="label"><?= $address['text'] ?></div>
                            </div>
                        </div>

                        <!-- contact item -->
                        <div class="contact_item">
                            <div class="top">
                                <img src="<?php echo $phone['icon']['url'] ?>" alt="">
                            </div>

                            <div class="info">
                                <a href="tel:<?= $phone['phone'] ?>" class="link"><?= $phone['title'] ?></a>
                                <div class="label"><?= $phone['text'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
get_footer();
