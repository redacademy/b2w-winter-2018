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

    /* About us Employee Text */
      $('.emp-button-0').on('click', function (){
        $('.photo-0').css('filter', 'grayscale(0)')
        $('.photo-1').css('filter', 'grayscale(100)')
        $('.photo-2').css('filter', 'grayscale(100)')
        $('.employee-1').css('display','block');
        $('.employee-2').css('display', 'none');
        $('.employee-3').css('display', 'none');
      })

      $('.emp-button-1').on('click', function (){
        $('.photo-0').css('filter', 'grayscale(100)')
        $('.photo-1').css('filter', 'grayscale(0)') 
        $('.photo-2').css('filter', 'grayscale(100)')
        $('.employee-1').css('display','none');
        $('.employee-2').css('display','block');
        $('.employee-3').css('display','none');
      })

      $('.emp-button-2').on('click', function (){
        $('.photo-0').css('filter', 'grayscale(100)')
        $('.photo-1').css('filter', 'grayscale(100)')    
        $('.photo-2').css('filter', 'grayscale(0)')
        $('.employee-1').css('display','none');
        $('.employee-2').css('display','none');
        $('.employee-3').css('display','block');
      })

    /* Employee Text X button */

      $('.employee-1').prepend('<div><button id="close-button">' + 'X' + '</button></div>' );
      $('.employee-2').prepend('<div><button id="close-button">' + 'X' + '</button></div>' );
      $('.employee-3').prepend('<div><button id="close-button">' + 'X' + '</button></div>' );

      $('#close-button').on('click', function () {
        console.log('Clicked the X');
        $('.photo-0').css('filter', 'grayscale(100)');
        $('.photo-1').css('filter', 'grayscale(100)');
        $('.photo-2').css('filter', 'grayscale(100)');
        $('.employee-1').css('display','none');
        $('.employee-2').css('display','none');
        $('.employee-3').css('display','none');
      })

  });
})(jQuery);