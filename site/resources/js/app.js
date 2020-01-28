require('./bootstrap');
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
// $(".owl-carousel").owlCarousel();

$('.owl-carousel').owlCarousel({
    stagePadding: 100,
    autoplay: true,
    autoplayTimeout: 3500,
    dots: true,
    loop:true,
    margin:10,
    nav:false,
    items: 3,
    center: true,
    responsive:{
        0:{
            items:1,
            stagePadding: 0,
            margin:0
        },
        600 :{
            items:2 ,
            stagePadding: 30 ,
            margin:0
        },
        1200:{
            items:3 ,
            margin:0
        }
    }
})