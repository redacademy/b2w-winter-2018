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

      function animateValue(id, start, end, duration) {
        var range = end - start;
        var current = start;
        var stepTime = Math.abs(Math.floor(duration / range));
        var obj = document.getElementById(id);
        var timer = setInterval(function() {
            current += 100;
            obj.innerHTML = current;
            if (current >= end) {
                clearInterval(timer);
                obj.innerHTML = end;
            }
        }, stepTime);
    }

    
      $(window).scroll(function () {
        var top  = window.pageYOffset || document.documentElement.scrollTop;
        if (top > 450 && top < 455) {
          animateValue('value', 1, 32000, 100);
        }
      });

      function decimalCreator(num){
        return num.toLocaleString('arab');
      }

  });
})(jQuery);