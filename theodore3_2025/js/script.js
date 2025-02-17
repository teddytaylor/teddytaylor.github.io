jQuery(document).ready(function () {

  jQuery('.c-header__toggle').click(function () {
    jQuery('.c-navigation').fadeToggle();
  });
  jQuery('.c-navigation__toggle').click(function () {
    jQuery('.c-navigation').fadeToggle();
  });

  jQuery('.c-navigation__close').click(function () {
    jQuery('.c-navigation__mobile').fadeToggle();
  });

  //LOADING 
  jQuery(window).load(function () {
    jQuery('.m-loading__mask').fadeOut();
    jQuery('.m-loading__icon').fadeOut();
  });

  // CONTACT FORM 
  jQuery('.c-navigation__social--email_').click(function () {
    jQuery('.c-contact__wrap').fadeToggle();
    jQuery(this).addClass('active');
    jQuery(this).preventDefault(); 
  });

  jQuery('.c-contact__close').click(function () {
    jQuery('.c-contact__wrap').fadeToggle();
    jQuery('.c-contact__link a').removeClass('active');

  });

  // MAGNIFIC

  jQuery('.m-gallery__item.image').each(function () {

    jQuery(this).magnificPopup({
      delegate: '.m-gallery__link',
      type: 'image',
      mainClass: 'mfp-fade',
      gallery: {
        enabled: true
      }
    });
  });

  jQuery('.m-gallery.single').each(function () {

    jQuery(this).magnificPopup({
      delegate: '.m-gallery__link',
      type: 'image',
      mainClass: 'mfp-fade',
      gallery: {
        enabled: true
      }
    });
  });

  jQuery('.m-gallery__link.video').each(function () {

    jQuery(this).magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      gallery: {
        enabled: false,
        autoplay: 1,
      }
    });
  });


});
