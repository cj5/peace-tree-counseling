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
    // $('#mobile-nav').css('display', 'block');
    $('body').css('right', 300);
  });
  $('html').click(function() {
    if ($('#mobile-nav').css('right') === '0px') {      
      $('#mobile-nav').css('right', -300);
      // $('#mobile-nav').css('display', 'none');
      $('body').css('right', 0);
    }
  });

  // let maxHeight = 0;
  // $('.provider-image').each(function(){
  //    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  // });
  // $('.provider-image').height(maxHeight);

  const updateContainer = () => {
    let heroHt = $('.hero-img img').height();
    $('.hero-img-overlay').css('height', heroHt);
    $('.hero-img').css('height', heroHt + 5);

    // $('.provider-image').css('height', 'initial');
    // let maxHeight = 0;
    // $('.provider-image').each(function(){
    //    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    // });
    // $('.provider-image').height(maxHeight);
  }

  $(window).resize(function() {
    updateContainer();
  });

});