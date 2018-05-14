<?php
/*
Template Name: Услуги
*/

$query = new WP_Query;
$services = $query->query(array(
    'post_parent' => $post->ID,
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'posts_per_page' => -1,
    'post_type' => 'page'
));
the_post();
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
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
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

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>