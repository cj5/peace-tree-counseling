jQuery(document).ready(function($) {
  let heroHt = $('.hero-img img').height();
  $('.hero-img-overlay').css('height', heroHt);
  $('.hero-img').css('height', heroHt + 5);

  $('p').each(function(){
    if($.trim($(this).text()) == '' && $(this).children().length == 0) {
      $(this).hide();
    }
  });
});