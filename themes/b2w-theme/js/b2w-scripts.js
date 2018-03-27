jQuery(document).ready(function ($) {

  /* Hamburger Menu Functionality JS */
                        
    /* Function triggers on menu sizing*/
      var resizeTimer;
      $(window).on('resize', function(e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          if (document.body.clientWidth < 800) {
            $('.nav-menu').removeClass('menu-expanded');
            $('#menu-toggle').removeClass('is-active');
          }
        }, 250);
      });
  /* Triggers the burger transformation and menu display*/
    $('#menu-toggle').on('click', function () {
      $(this).toggleClass('is-active');
      $('.nav-menu').toggleClass('menu-expanded');
    });


  /* Mobile Menu Header*/
    $('.menu').prepend('<p class="menu-header">' + 'Menu' + '</p>');

  /* Number Scroll */

    // $('.home').on('load', function () {
      $(window).scroll(function () {
        var top = window.pageYOffset || document.documentElement.scrollTop;
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
          } else {
            console.error(demo.error);
          }
        }
      });
    // })


  /* About us Employee Text */
    $('.emp-button-0').on('click', function () {
      $('.photo-0').css('filter', 'grayscale(0)')
      $('.photo-1').css('filter', 'grayscale(100)')
      $('.photo-2').css('filter', 'grayscale(100)')
      $('.text-name-0').css('display', 'flex');
      $('.text-name-1').css('display', 'none');
      $('.text-name-2').css('display', 'none');
      $('.site-footer').css('margin-top', '400px');
    })

    $('.emp-button-1').on('click', function () {
      $('.photo-0').css('filter', 'grayscale(100)')
      $('.photo-1').css('filter', 'grayscale(0)')
      $('.photo-2').css('filter', 'grayscale(100)')
      $('.text-name-0').css('display', 'none');
      $('.text-name-1').css('display', 'flex');
      $('.text-name-2').css('display', 'none');
      $('.site-footer').css('margin-top', '400px');
    })

    $('.emp-button-2').on('click', function () {
      $('.photo-0').css('filter', 'grayscale(100)')
      $('.photo-1').css('filter', 'grayscale(100)')
      $('.photo-2').css('filter', 'grayscale(0)')
      $('.text-name-0').css('display', 'none');
      $('.text-name-1').css('display', 'none');
      $('.text-name-2').css('display', 'flex');
      $('.site-footer').css('margin-top', '400px');
    })

  /* Employee Text X button */
    $('.text-wrap').append('<button class="close-button">X</button>')

    $('.close-button').on('click', function () {
      $('.photo-0').css('filter', 'grayscale(100)');
      $('.photo-1').css('filter', 'grayscale(100)');
      $('.photo-2').css('filter', 'grayscale(100)');
      $('.text-name-0').css('display', 'none');
      $('.text-name-1').css('display', 'none');
      $('.text-name-2').css('display', 'none');
      $('.site-footer').css('margin-top', '50px');
    })

});