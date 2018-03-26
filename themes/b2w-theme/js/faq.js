

(function ($) {
  $(document).ready(function () {

    function closeAccordionSection() {
      $('.faq .faq-question').removeClass('active');
      $('.faq .faq-answer').slideUp(300).removeClass('open');
      $('.faq-plus').show();
    }
    
    $('.faq-question').on('click', function(e){
      // Grab current anchor value
      var currentAttrValue = $(this).attr('href');
      if ($(e.target).is('.active')) {
        closeAccordionSection();
      } else {
        closeAccordionSection();
        // Add active class to section title
        $(this).addClass('active');
        // Open up the hidden content panel
        $('.faq ' + currentAttrValue).slideDown(300).addClass('open');
        $(this).find('span').hide();
      }
      e.preventDefault();
    });

    $('.faq-minus').on('click', closeAccordionSection);

  //Contact Form Thank You Pop Up
    $('.wpcf7-submit').on('click', function(){
      setTimeout(function(){
        if($('.wpcf7-mail-sent-ok').is(':visible')){
          $('.wpcf7-mail-sent-ok').empty().append('<div class="thank-you-container"><p>We appreciate your time. We will get back to you as soon as possible.</p><a href="" id="thank-you-close-btn" class="btn-plain thank-you-btn">Okay</a></div>');
        }
      }, 500);
    });



    
  });
})(jQuery);