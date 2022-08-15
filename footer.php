<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mining2022
 */

?>

<footer>
    <div class="wrapper">
        <div class="footer__logo">Mining Org <br> Team</div>
        <div class="footer__container">
            <div class="footer__list">
                <ul style="list-style-type: none">
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                </ul>
            </div>
            <div class="footer__contacts">
                <div class="footer__contact">
                    <div class="footer__phone">
                        <a href="tel:<?php echo get_tel_link(get_field('contact-phone')); ?>"><?php the_field('contact-phone') ?></a>
                    </div>
                    <div class="footer__email">
                        <a href="mailto:<?php the_field('contact-email') ?>"><?php the_field('contact-email') ?></a>
                    </div>
                </div>
                <div class="footer__network">
                    <div class="footer__tg">
                        <a href="<?php the_field('contact-tg') ?>"><img src="<?php echo get_template_directory_uri();?>/img/contacts-tg.svg" alt=""></a>
                    </div>
                    <div class="footer__vk">
                        <a href="<?php the_field('contact-vk') ?>"><img src="<?php echo get_template_directory_uri();?>/img/contacts-vk.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-blackout"></div>
            <div class="popup-offer">
                
                <div class="form__title">Оставить заявку</div>
                <div class="form__text"><?php the_field('form-text'); ?></div>

                <?php echo do_shortcode('[contact-form-7 id="104" title="Popup форма"]') ?>

                <div class="popup-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.57604 1.20134L12 9.62534L20.3894 1.236C20.5364 1.07951 20.7135 0.954328 20.9101 0.867952C21.1067 0.781576 21.3187 0.735789 21.5334 0.733337C21.9931 0.733337 22.434 0.915956 22.759 1.24102C23.0841 1.56608 23.2667 2.00696 23.2667 2.46667C23.2708 2.67918 23.2313 2.89028 23.1508 3.087C23.0704 3.28372 22.9505 3.46193 22.7987 3.61067L14.3227 12L22.7987 20.476C23.0844 20.7555 23.2519 21.134 23.2667 21.5333C23.2667 21.993 23.0841 22.4339 22.759 22.759C22.434 23.0841 21.9931 23.2667 21.5334 23.2667C21.3125 23.2758 21.0921 23.239 20.8862 23.1584C20.6803 23.0778 20.4934 22.9553 20.3374 22.7987L12 14.3747L3.59338 22.7813C3.44692 22.9326 3.27195 23.0534 3.07858 23.1367C2.8852 23.22 2.67725 23.2642 2.46671 23.2667C2.007 23.2667 1.56612 23.0841 1.24106 22.759C0.915994 22.4339 0.733375 21.993 0.733375 21.5333C0.729334 21.3208 0.768762 21.1097 0.84924 20.913C0.929718 20.7163 1.04955 20.5381 1.20138 20.3893L9.67737 12L1.20138 3.524C0.915696 3.24452 0.748177 2.86605 0.733375 2.46667C0.733375 2.00696 0.915994 1.56608 1.24106 1.24102C1.56612 0.915956 2.007 0.733337 2.46671 0.733337C2.88271 0.738537 3.28138 0.906671 3.57604 1.20134Z" fill="black"/>
                    </svg>
                </div>
            </div>
</footer>

<!--JavaScript-->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/js/script.js?v=<?=filemtime(get_template_directory() . '/js/script.js')?>"></script>

</body>

<?php wp_footer(); ?>
</html>
