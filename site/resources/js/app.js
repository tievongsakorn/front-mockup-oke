require('./bootstrap');
const Handler = require('./handler')
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
            stagePadding: 25,
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
$(document).ready(function() {
    $("#cvv__detail").hide();
    $( "#cvv__icon" ).mouseover(function(){
        $("#cvv__detail").show();
    });
    $( "#cvv__icon" ).mouseout(function(){
        $("#cvv__detail").hide();
    });
    
});
$('#toggleNav').on('click', (e) => {
    // console.log('click')
    let nav = $('#icon__bar')
    let scw = window.screen.width ;
    let mySidenav = $('#mySidenav')
    let navSpace = $('#navspace')
    if (nav.css('visibility') == 'hidden') {
        if (scw < 576) {
            mySidenav.css('width', '70%')
            navSpace.css('transform', 'translateX(10%)')
        } else {
            mySidenav.css('width', '70px')
            navSpace.css('transition', '0.7s')
            navSpace.css('transform', 'translateX(70px)')
        }
        nav.css({
            'opacity': '1',
            'visibility': 'visible',
            'transition': '1.2s'
        })
    } else {
        nav.css({
            'visibility': 'hidden', 
            'opacity': '0',
            'transition': '0.1s'
        })
        mySidenav.css('width', '0')
        navSpace.css({
            'transition': '0.5s',
            'transform': 'translateX(0)'
        })
    }
})



