$(document).ready(function(){
    $('.carousel').slick({
      // zIndex:100,
      dots: false,
      arrows:false,
      infinite: true,
      autoplay:true,
      speed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      autoplaySpeed: 12000,
      pauseOnHover:false,
    });

    var ms = new Date().getTime() + 86400000;
    var dayup = new Date(ms);
    $('#from_date').attr("min", dayup.toISOString().slice(0,10));
    
});