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
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; else: ?>
                        <div class="page-content">
                            <p>Извините, ничего не найдено.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>