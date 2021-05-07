function showMenu(){
    $("#menu").toggle();
}
window.onresize = function(event) {
    console.log("event",event.target.innerWidth);
    var currentWidth = event.target.innerWidth;
    if(currentWidth > 1000){
        $("#menu").show();
    }
};

//Slider

$('#slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 500,
  arrows: false
});
