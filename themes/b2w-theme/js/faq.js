

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

  });
})(jQuery);