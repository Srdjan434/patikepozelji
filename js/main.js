//console.log("test");
function showMenu(){
    //console.log("kliknuto");
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
  autoplaySpeed: 2000,
  arrows: false
});

var content = 'Dobro dosli na nas sajt! Prikazujemo Vam najbolje materijale i najbolju opremu koja pretvara mastu u stvarnost.<br/> Vase je da nadjete dizajn, nase je da to pretvorimo u delo.';

var ele = '<span>' + content.split('').join('</span><span>') + '</span>';


$(ele).hide().appendTo('p').each(function (i) {
    $(this).delay(100 * i).css({
        display: 'inline',
        opacity: 0
    }).animate({
        opacity: 1
    }, 100);
});

console.log("proba");