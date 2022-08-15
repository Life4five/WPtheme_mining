<?php get_header() ?>

    <div id="intro" class="intro">
        <div class="wrapper">
            <div class="intro__text1">
                <?php the_field('intro-text1') ?>
            </div>
            <div class="intro__text2">
                <?php the_field('intro-text2') ?>
            </div>
            <div class="intro__btn btn">
                <a href="#">Заказать  звонок</a>
            </div>
            <div class="intro__contacts">
                <div class="intro__network">
                    <div class="intro__tg">
                            <a href="<?php the_field('contact-tg') ?>"><img src="<?php echo get_template_directory_uri();?>/img/contacts-tg.svg" alt=""></a>
                    </div>
                    <div class="intro__vk">
                        <a href="<?php the_field('contact-vk') ?>"><img src="<?php echo get_template_directory_uri();?>/img/contacts-vk.svg" alt=""></a>
                    </div>
                </div>
                <div class="intro__contact">
                    <div class="intro__email">
                        <a href="mailto:<?php the_field('contact-email') ?>"><?php the_field('contact-email') ?></a>
                    </div>
                    <div class="intro__phone">
                        <a href="tel:<?php the_field('contact-phone-link') ?>"><?php the_field('contact-phone') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best" id="best">
        <div class="wrapper">
            <div class="best__title">
                <? the_field('best-title') ?>
            </div>
            <div class="best__container">
                <div class="best__container__cards">
                    <?php
                    while (have_rows('best-cards')) { the_row();

                        $match = get_sub_field('card-img');
                        $status = get_sub_field('card-status'); ?>

                         <div class="best__card">
                             <div class="best__card__img">
                                 <img src="<? echo $match['sizes']['medium']; ?>" alt="">
                             </div>
                             <div class="best__card__info">
                                 <div class="card__title"><?echo get_sub_field('best-card-title')?></div>
                                 <div class="card__stat">
                                     <span>Хешрейт</span><span><?php echo get_sub_field('card-hash') ?></span>
                                 </div>
                                 <div class="card__stat">
                                     <span>Мощность</span><span><?php echo get_sub_field('card-power') ?></span>
                                 </div>
                                 <div class="card__stat">
                                     <span>Состояние</span><span><?php echo get_sub_field('card-condition') ?></span>
                                 </div>
                             </div>
                             <div class="card__footer">
                                 <div class="card__footer__price"><?php echo get_sub_field('card-price'),' &#8381;/шт' ?></div>
                                 <div class="card__footer__offer">
                                     <div class="card__footer__btn btn">
                                         <a href="#">Купить</a>
                                     </div>
                                     <div class="card__footer__availability">
                                         <div class="card__number">Артикул 253894</div>
                                         <div class="card__status" data-status="<?echo $status['value']?>"><?echo $status['label']?></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    <?}?>
                </div>
                <div class="best__btn btn"><a href="#">Посмотреть другие</a></div>
            </div>
        </div>
    </div>

    <div class="process">
        <div class="wrapper">
            <div class="process__title"><?php the_field('process-title'); ?></div>
            <div class="process__blocks">

            <?php
                while (have_rows('process-blocks')) { the_row();?>
                
                <div class="process__item">
                    <div class="process__item__img"><img src="<?php echo get_sub_field('process-img'); ?>" alt=""></div>
                    <div class="process__item__text"><?php echo get_sub_field('process-text'); ?></div>
                </div>
            <?}?>

            </div>
        </div>
    </div>

    <div class="asic">
        <div class="wrapper">
            <div class="asic__title">
                <? the_field('asic-title') ?>
            </div>
            <div class="asic__container">
                <div class="asic__text">
                    <? the_field('asic-text') ?>
                </div>
                <div class="asic__img">
                    <img src="<?php the_field('asic-img') ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="wrapper">
            <div class="catalog__title">
                <?php the_field('catalog-title') ?>
            </div>
            <div class="catalog__container">
                <div class="catalog__container__cards">
                    <?php
                    while (have_rows('catalog-cards')) { the_row();

                        $match = get_sub_field('card-img');
                        $status = get_sub_field('card-status'); ?>

                         <div class="catalog__card">
                             <div class="catalog__card__img">
                                 <img src="<?echo get_sub_field('card-img')?>" alt="">
                             </div>
                             <div class="catalog__card__info">
                                 <div class="card__title"><?echo get_sub_field('card-title')?></div>
                                 <div class="card__stat">
                                     <span>Хешрейт</span><span><?php echo get_sub_field('card-hash') ?></span>
                                 </div>
                                 <div class="card__stat">
                                     <span>Мощность</span><span><?php echo get_sub_field('card-power') ?></span>
                                 </div>
                                 <div class="card__stat">
                                     <span>Состояние</span><span><?php echo get_sub_field('card-condition') ?></span>
                                 </div>
                             </div>
                             <div class="card__footer">
                                 <div class="card__footer__price"><?php echo get_sub_field('card-price'),' &#8381;/шт' ?></div>
                                 <div class="card__footer__offer">
                                     <div class="card__footer__btn btn">
                                         <a href="#">Купить</a>
                                     </div>
                                     <div class="card__footer__availability">
                                         <div class="card__number">Артикул 253894</div>
                                         <div class="card__status" data-status="<?echo $status['value']?>"><?echo $status['label']?></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    <?}?>
                </div>
                <div class="best__btn btn"><a href="#">Перейти в каталог</a></div>
            </div>
        </div>
    </div>

    <div class="form">
        
        <div class="form__title">Оставить заявку</div>
        <div class="form__text"><?php the_field('form-text'); ?></div>
        <?php echo do_shortcode('[contact-form-7 id="112" title="Форма на главной"]'); ?>

    </div>

<?php get_footer() ?>