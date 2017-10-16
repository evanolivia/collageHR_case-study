$(function(){

  //Slick slider settings
	if ($('.slides').length !== 0) {
    console.log("working!");
    $('.slides').slick({
      arrows: false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 3,
      centerMode: true,
      centerPadding: '50px',
      variableWidth: true,
      responsive: [{
        breakpoint: 680,
        settings: {
          variableWidth: false,
          centerMode: false
        }
      }]
    });
  }

  //Smooth scroll
  $('.btn-primary').smoothScroll({
    speed: 700
  })

});
