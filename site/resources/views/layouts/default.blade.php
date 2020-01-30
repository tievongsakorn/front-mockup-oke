<!doctype html>
<html>
<head>

   @include('includes.head')
</head>
<body>
       @include('includes.nav')

       <div id="navspace">     

       @yield('content')

       @include('includes.footer')
       </div>
       
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>       
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
    <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
{{-- <script>
    $(document).ready(function () {
        var scw = window.screen.width ;
        var welcomePage = "https://mockupoka.test/";  
      if (window.location.href == welcomePage) {
        if (scw <1100) {
            //EmtyeMomentWhenScreenWidth>1100
        }
        else {
            navbutton();
        }
      }
    });
function navbutton () {
    var nav = document.getElementById("icon__bar");
    var scw = window.screen.width ;
    if (nav.style.visibility == 'hidden') {
        if (scw <576) {
            document.getElementById("mySidenav").style.width = "70%";
            // document.getElementById("navspace").style.transform = "translateX(0)";
        } 
        else {
            document.getElementById("mySidenav").style.width = "70px";
            document.getElementById("navspace").style.transition = "0.7s";
            // document.getElementById("").style.paddingLeft = "70px";
        }
        document.getElementById("navspace").style.transform = "translateX(70px)";
        document.getElementById("icon__bar").style.opacity = "1";
        document.getElementById("icon__bar").style.visibility = "visible";
        document.getElementById("icon__bar").style.transition = "1.2s";
    }
    else {
        document.getElementById("icon__bar").style.visibility = "hidden";
        document.getElementById("icon__bar").style.opacity = "0";
        document.getElementById("mySidenav").style.width = "0";
        // document.getElementById("navspace").style.paddingLeft= "0";
        document.getElementById("navspace").style.transition = "0.5s";
        document.getElementById("navspace").style.transform = "translateX(0)";
        document.getElementById("icon__bar").style.transition = "0.1s";
    }
}
</script> --}}
</body>
</html>