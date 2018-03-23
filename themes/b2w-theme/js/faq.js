

(function ($) {
  $(document).ready(function () {

   
  $('.faq-question').on('click', function(){
    $('.faq-answer').toggle();
    $('.faq-plus').toggle();
    $('.faq-minus').toggle();
  })

  $('.faq-minus').on('click', function(){
    $('.faq-answer').hide();
  })

  });
})(jQuery);