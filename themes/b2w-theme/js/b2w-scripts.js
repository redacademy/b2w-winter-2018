(function ($) {
  $(document).ready(function () {

    /* Hamburger Menu Functionality JS */
    $(window).on('resize', function () { /* Function triggers on menu sizing*/
      if (document.body.clientWidth < 800) {
        $('.menu-menu-1-container').css('display', 'block');
        $('.menu-menu-1-container').removeClass('menu-expanded');
        $('#menu-toggle').removeClass('is-active');
      }
    })

    /* Triggers the burger transformation and menu display*/
    $('#menu-toggle').on('click', function () {
      console.log('hei');
      $(this).toggleClass('is-active');
      $('.menu-navigation-bar-container').toggleClass('menu-expanded');
    })


    /* Mobile Menu Header*/

    $('.menu').prepend('<p class="menu-header">' + 'Menu' +  '</p>' );
  });
})(jQuery);