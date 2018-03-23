(function ($) {
  $(document).ready(function () {

    /* Hamburger Menu Functionality JS */
    // $(window).on('resize', function () { /* Function triggers on menu sizing*/
    //   if (document.body.clientWidth < 800) {
    //     $('.menu-navigation-bar-container').css('display', 'block');
    //     $('.menu-navigation-bar-container').removeClass('menu-expanded');
    //     $('#menu-toggle').removeClass('is-active');
    //   }
    // })

    /* Triggers the burger transformation and menu display*/
    $('#menu-toggle').on('click', function () {
      console.log('hei');
      $(this).toggleClass('is-active');
      $('.nav-menu').toggleClass('menu-expanded');
    });


    /* Mobile Menu Header*/

    $('.menu').prepend('<p class="menu-header">' + 'Menu' +  '</p>' );
  });

  /* Number Scroll */


//   function animateValue(id, start, end, duration) {
//     var range = end - start;
//     var current = start;
//     // var increment = end > start? 1 : -1;
//     var stepTime = Math.abs(Math.floor(duration / range));
//     var obj = document.getElementById(id);
//     var timer = setInterval(function() {
//         // current += increment;
//         current += 100;
//         obj.innerHTML = current;
//         if (current >= end) {
//             clearInterval(timer);

//             obj.innerHTML = end;
//         }
//     }, stepTime);
// }
// animateValue("value", 1, 32000, 100);

function doSetTimeout(i) {
  setTimeout(function () {
    $('#value').text(i)
  }, 100);
}

for (var i = 1; i < 32001; i++)
  doSetTimeout(i);

})(jQuery);