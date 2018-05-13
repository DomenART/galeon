import $ from 'jquery'
window.$ = $
window.jQuery = $
import validate from 'jquery-validation'

import UIkit from 'uikit'
window.UIkit = UIkit
UIkit.use(require('uikit/dist/js/uikit-icons'))

/** Лайтбокс **/
/*$(".js-lightbox").fancybox({
  tpl: {
    closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;">&times;</a>',
    next     : '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;">Следующее фото <i class="uk-icon-angle-right"></i></a>',
    prev     : '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><i class="uk-icon-angle-left"></i> Предыдущее фото</a>'
  },
  helpers: {
    title: null
  },
  afterLoad: function() {
    this.outer.before('<div class="fancybox-title fancybox-title-before">' + this.title + '</div>');
  }
});*/

/** Валидация и отправка форм **/
$('.js-validate').each(function(){
    $(this).validate({
      errorClass: 'uk-form-danger',
      validClass: 'uk-form-success'
    });
});

var $slider = $('.js-slider'),
    $slides = $('.slider-item', $slider),
    slideMaxHeight = 0;
$slides.each(function() {
    var height = $(this).height();

    if(height > slideMaxHeight) {
        slideMaxHeight = height;
    }
});
$slides.height(slideMaxHeight);
$slider.on('show.uk.slideset', function(e, s) {
  var image = $(s).data('image');

  if(image) {
    $('.js-home-intro').css('background-image', 'url(' + image + ')');
  }
});

$('.js-services-circle a').hover(
  function() {
    $(this).parent().addClass('active');
  },
  function() {
    $(this).parent().removeClass('active');
  }
);

$('.header-menu>li.menu-item-has-children').hover(
    function() {
        let padding = ($(window).width() - 1200) / 2 - 15;
        let top = $(this).position().top + $(this).height();
        $(this).find('ul').css({
            top: top,
            paddingLeft: padding,
            paddingRight: padding
        });

        $(this).addClass('hovered');
    },
    function() {
        $(this).removeClass('hovered');
    }
);

$(window).scroll(function(){
    var scrollTop = $(this).scrollTop();

    if (scrollTop > 500) {
        $('.js-scrollup').fadeIn();
    } else {
        $('.js-scrollup').fadeOut();
    }
});


$('.js-projects-main').click(function() {
    $($(this).data('target')).click();

    return false;
});