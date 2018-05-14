<div class="footer">
  <div class="uk-container">
    <div class="uk-grid" uk-grid>
      <div class="uk-width-1-3@m">
        <div class="footer__logo">
          <a href="/"><img src="http://via.placeholder.com/382x75" alt=""></a>
        </div>
      </div>
      <div class="uk-width-1-2@s uk-width-1-3@m">
        <div class="footer__contacts">
          <p>
            <span><?php the_field('phone', 'option') ?></span><br>
            <?php the_field('address', 'option') ?>
          </p>
          <p>
            График работы:<br>
            <?php the_field('schedule', 'option') ?>
          </p>
        </div>
        <div></div>
      </div>
      <div class="uk-width-1-2@s uk-width-1-3@m">
        <div class="footer__likes">
          <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
          <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
          <div class="ya-share2" data-services="vkontakte,facebook,twitter,odnoklassniki,gplus,linkedin"></div>
        </div>
        <div class="footer__email">
          <a href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</div>
<div class="footer__info">
  <div class="uk-container">
    <div class="uk-grid uk-flex-middle uk-grid-small" uk-grid>
      <div class="uk-width-1-3@m">
        <div class="footer__copyright">
        <?php the_field('copyright', 'option') ?>
        </div>
      </div>
      <div class="uk-width-1-3@m uk-flex uk-flex-middle uk-flex-center">
        <div class="footer__counters">
          <?php the_field('counters', 'option') ?>
        </div>
        <a href="#" class="footer__sitemap">Карта сайта</a>
      </div>
      <div class="uk-width-1-3@m">
        <a href="http://domenart-studio.ru/" class="footer__creator" target="_blank">
          Разработка сайта
        </a>
      </div>
    </div>
  </div>
</div>

<button class="scrollup js-scrollup" uk-scroll>
  <span uk-icon="chevron-up"></span>
  <span class="scrollup__label">Наверх</span>
</button>

<div id="feedback" uk-modal>
    <div class="uk-modal-dialog uk-modal-body modal-dialog--small">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
          <div class="modal-title">Есть вопросы?<br>Напишите нам.</div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="96" title="Контактная форма"]'); ?>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/dist/main.js"></script>
<?php wp_footer() ?>