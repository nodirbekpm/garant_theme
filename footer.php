<?php wp_footer(); ?>
<!-- footer -->
<footer>
    <div class="container">
        <div class="footer_row">
            <div class="top">
                <a href="index.html" class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/footer_logo.svg" alt="">
                </a>
                <nav>
                    <a href="#objects" class="nav_item">объекты</a>
                    <a href="#about_us" class="nav_item">Информация</a>
                    <a href="#contact" class="nav_item">Контакты</a>
                </nav>

                <div class="button_container">
                    <a href="https://vk.com/" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/wk_icon.svg" alt="">
                    </a>
                    <a href="http://whatsapp.com/" target="_blank" class="button">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp_icon.svg" alt="">
                        <span>Написать нам whatsАpp</span>
                    </a>
                </div>
            </div>

            <div class="bottom">
                <p class="text">© 2025 Гарант развития</p>
                <a href="https://vk.link/skladybazy?act=terms" target="_blank" class="text">Политика обработки персональных данных</a>
                <p class="text">Вся представленная на сайте информация, носит информационный характер и не является публичной офертой</p>
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