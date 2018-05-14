<?php
/*
Template Name: Главная
*/

$slideshow = get_field( "slideshow" );
$query = new WP_Query;
$services = $query->query(array(
    'post_parent' => 9,
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'posts_per_page' => -1,
    'post_type' => 'page'
));

?>
<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part( 'partials/head' ) ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="home-intro js-home-intro">
                <div class="header-absolute" uk-sticky="offset: -300; animation: uk-animation-slide-top; cls-active: header-small">
                    <?php get_template_part( 'partials/header' ) ?>
                </div>

                <div class="slideshow" uk-slideshow="animation: fade; ratio: false">
                    <ul class="uk-slideshow-items">
                        <?php foreach($slideshow as $item) : ?>
                            <li class="slideshow-item">
                                <div class="uk-position-cover uk-animation-kenburns uk-transform-origin-center-left">
                                    <img class="slideshow-item__image" src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['title'] ?>" uk-cover>
                                </div>
                                <div class="slideshow-item__info">
                                    <?php if ($item['link']) : ?>
                                        <a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a>
                                    <?php else: ?>
                                        <div class="slideshow-item__title"><?php echo $item['title'] ?></div>
                                    <?php endif; ?>
                                    <div class="slideshow-item__desc"><?php echo $item['description'] ?></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="slideshow__prev" uk-slideshow-item="previous"></button>
                    <button class="slideshow__next" uk-slideshow-item="next"></button>
                    <ul class="slideshow__nav uk-slideshow-nav uk-flex uk-flex-center"></ul>
                    <a href="#home-services" class="slideshow__angle" uk-scroll="offset: 90"></a>
                </div>
            </div>

            <div class="home-services" id="home-services">
                <div class="uk-container">
                    <div class="home-title home-services__title"><span>Наши услуги</span></div>

                    <div class="services-tiles uk-grid" uk-grid>
                        <?php foreach($services as $service) : ?>
                            <div class="uk-width-1-2@s uk-width-1-3@m">
                                <a href="<?php echo get_permalink($service->ID) ?>" class="services-tile">
                                    <?php echo get_the_post_thumbnail($service->ID, 'thumbnail', array(
                                        'class' => "services-tile__image",
                                    )) ?>
                                    <span class="services-tile__title uk-flex uk-flex-middle">
                                        <span><?php echo $service->post_title ?></span>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- <div class="home-our" id="home-projects">
                <div class="uk-container">
                    <div class="home-title"><span>Наши проекты</span></div>
                    Проекты
                </div>

                <div class="uk-container">
                    <div class="home-title"><span>Наши партнеры</span></div>
                    Партнеры
                </div>
            </div> -->

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>