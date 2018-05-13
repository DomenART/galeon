<div class="header">
    <div class="uk-container">
        <div class="header__logo">
            <a href="/"><img src="http://via.placeholder.com/382x75" alt="{'site_name' | config}"></a>
        </div>

        <div class="header__phone"><?php the_field('phone', 'option') ?></div>

        <div class="header__btns uk-flex">
            <a href="#feedback" uk-toggle><span uk-icon="icon: mail; ratio: .8"></span></a>
            <!-- <a href="{43 | url}"><span uk-icon="icon: search; ratio: .8"></span></a> -->
        </div>

        <?php wp_nav_menu( array(
            'theme_location'  => 'header_menu',
            'menu_class'      => 'header-menu',
        ) ); ?>
    </div>

    <!-- <div class="header__directions">
        <div class="uk-container">
            <ul>
                <li><a href="{27 | url}">Проектирование</a></li>
                <li><a href="{44 | url}">Поставка</a></li>
                <li><a href="{45 | url}">Монтаж</a></li>
            </ul>
        </div>
    </div> -->
</div>