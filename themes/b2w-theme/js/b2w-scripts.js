(function ($) {
  $(document).ready(function () {

    /* Hamburger Menu Functionality JS */
      $(window).on('resize', function () { /* Function triggers on menu sizing*/
        if (document.body.clientWidth < 800) {
          $('.nav-menu').removeClass('menu-expanded');
          $('#menu-toggle').removeClass('is-active');
        }
      })

    /* Triggers the burger transformation and menu display*/
      $('#menu-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('.nav-menu').toggleClass('menu-expanded');
      });


    /* Mobile Menu Header*/

     $('.menu').prepend('<p class="menu-header">' + 'Menu' + '</p>');

    /* Number Scroll */
    
      $(window).scroll(function () {
        var top  = window.pageYOffset || document.documentElement.scrollTop;
        if (top > 450 && top < 475) {
          var options = {
            useEasing: true,
            useGrouping: true,
            separator: ',',
            decimal: '.',
          };
            var demo = new CountUp('value', 0, 32000, 0, 2.5, options);
            if (!demo.error) {
              demo.start();
            } else  {
            console.error(demo.error);
            }
        }
      });
  });
})(jQuery);