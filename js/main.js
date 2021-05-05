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

//var products;
//window.onload = function (){
//$.ajax({
//    url: "data/products.json",
//    method : "get",
//    dataType : "json",
//    success : function(result){
//        products = result;
//        printProducts(result);
//        console.log(result);
//    },
//    error: function(xhr){
//        console.log(xhr)
//    }
//});
//}

//function printProducts(data){
//    let print = "";
//    for (let element of data){
//        ispis =`<div class="block">
//                    <img src="${element.img.src}" alt="${element.img.alt}"/>
//                    <p class="description">${element.name}</p>
//                    <s>$${element.price.old}</s>
//                    <p class="price">$${element.price.new}</p>
//                    <p> ${printStars(element.stars)}</p>
//                </div>`
//    }
//    $("#products").html(print);
//}
