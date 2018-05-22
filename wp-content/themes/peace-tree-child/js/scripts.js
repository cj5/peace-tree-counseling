jQuery(document).ready(function($) {
  
  let heroHt = $('.hero-img img').height();
  $('.hero-img-overlay').css('height', heroHt);
  $('.hero-img').css('height', heroHt + 5);
  setTimeout(function(){
    let heroHt = $('.hero-img img').height();
    $('.hero-img-overlay').css('height', heroHt);
    $('.hero-img').css('height', heroHt + 5);
  }, 100);
  setTimeout(function(){
    let heroHt = $('.hero-img img').height();
    $('.hero-img-overlay').css('height', heroHt);
    $('.hero-img').css('height', heroHt + 5);
  }, 1000);
  setTimeout(function(){
    let heroHt = $('.hero-img img').height();
    $('.hero-img-overlay').css('height', heroHt);
    $('.hero-img').css('height', heroHt + 5);
  }, 2000);

  $('p').each(function(){
    if($.trim($(this).text()) == '' && $(this).children().length == 0) {
      $(this).hide();
    }
  });

  $('#navicon').click(function() {
    $('#mobile-nav').css('right', 0);
    $('body').css('right', 349);
  });
  $('html').click(function() {
    if ($('#mobile-nav').css('right') === '0px') {      
      $('#mobile-nav').css('right', -450);
      $('body').css('right', 0);
      // $('#header').css('left', 0);
      // $('#hero img').css('left', 0);
    }
  });

  const updateContainer = () => {
    let heroHt = $('.hero-img img').height();
    $('.hero-img-overlay').css('height', heroHt);
    $('.hero-img').css('height', heroHt + 5);
  }

  $(window).resize(function() {
    updateContainer();
  });

});