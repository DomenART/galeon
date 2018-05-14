<?php
/*
Template Name: Контакты
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part( 'partials/head' ) ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="header-small" uk-sticky="offset: -300; animation: uk-animation-slide-top">
                <?php get_template_part( 'partials/header' ) ?>
            </div>

            <div class="page-internal">
                <div class="uk-container">
                    <div class="breadcrumb">
                        <?php bcn_display() ?>
                    </div>
                    <h1><?php the_title(); ?></h1>

                    <div class="contacts">
                        <div class="uk-grid" uk-grid>
                            <div class="uk-width-2-5@m">
                                <div class="contacts__map">
                                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0Eo6p_0XeLU-xuyaZ8ceD0Ux1VjfBDkf&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>
                                </div>
                            </div>
                            <div class="uk-width-3-5@m">
                                <div class="uk-grid" uk-grid>
                                    <div class="uk-width-2-3@l">
                                        <div class="contacts-label">Адрес:</div>
                                        <div class="contacts-text"><?php the_field('address', 'option') ?></div>
                                    </div>

                                    <div class="uk-width-1-3@l">
                                        <div class="contacts-label">Телефон/факс:</div>
                                        <div class="contacts-text"><?php the_field('phone', 'option') ?></div>
                                    </div>
                                </div>

                                <div class="uk-grid" uk-grid>
                                    <div class="uk-width-2-3@l">
                                        <div class="contacts-label">График работы:</div>
                                        <div class="contacts-text">
                                            <?php the_field('schedule', 'option') ?>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-3@l">
                                        <div class="contacts-label">Еmail:</div>
                                        <div class="contacts-text">
                                            <a href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin-large">
                                    <button uk-toggle="target: #feedback" class="uk-button uk-button-danger">Написать сообщение</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>