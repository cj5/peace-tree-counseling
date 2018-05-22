jQuery(document).ready(function($) {
  var heroHt = $('.hero-img img').height();
  $('.hero-img-overlay').css('height', heroHt);
  $('.hero-img').css('height', heroHt + 5);
  // setTimeout(function(){
  //   let heroHt = $('.hero-img img').height();
  //   $('.hero-img-overlay').css('height', heroHt);
  //   $('.hero-img').css('height', heroHt + 5);
  // }, 2000);

  $('p').each(function(){
    if($.trim($(this).text()) == '' && $(this).children().length == 0) {
      $(this).hide();
    }
  });
});