<?php wp_footer(); ?>

<?php
$footer_logo = get_field('footer_logo', 'option');
$copyright = get_field('copyright', 'option');
$footer_text = get_field('footer_text', 'option');
$whatsapp = get_field('whatsapp', 'option');
$vk = get_field('vk', 'option');
$link_url = is_array($vk['link']) && isset($vk['link']['url']) ? $vk['link']['url'] : '#';
$icon_url = isset($vk['icon']['url']) ? $vk['icon']['url'] : '';
?>

<!-- footer -->
<footer>
    <div class="container">
        <div class="footer_row">
            <div class="top">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo $footer_logo['url'] ?>" alt="">
                </a>
                <nav>
                    <a href="#objects" class="nav_item">объекты</a>
                    <a href="#about_us" class="nav_item">Информация</a>
                    <a href="#contact" class="nav_item">Контакты</a>
                </nav>

                <div class="button_container">
                    <a href="<?php echo $link_url ?>" target="_blank">
                        <img src="<?php echo $icon_url ?>" alt="">
                    </a>
                    <a href="<?php echo $whatsapp['link']['url'] ?>" target="_blank" class="button">
                        <img src="<?php echo $whatsapp['icon']['url'] ?>" alt="">
                        <span><?= $whatsapp['title'] ?></span>
                    </a>
                </div>
            </div>

            <div class="bottom">
                <p class="text"><?= $copyright ?></p>
                <a href="https://vk.link/skladybazy?act=terms" target="_blank" class="text">Политика обработки персональных данных</a>
                <p class="text"><?= $footer_text ?></p>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- javascript -->
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- yandex map -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<!-- Load Inputmask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>
<!-- main js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
</body>
</html>