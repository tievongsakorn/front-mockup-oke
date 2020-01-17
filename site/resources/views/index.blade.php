<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mock.css">
    <title>New</title>
</head>
<body>
    <div class="topnav">
        <div style="text-align:center;">
            <form class="form__search" action="">
                <input type="text" id="form__search" placeholder="ค้นหาเพลง ศิลปิน อัลบัม และเพลย์ลิสต์">
            </form>

        </div>
        <div id="mySidenav" class="sidenav">
            <div class="icon-bar">
                <a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
                <a href="#"><i class="fa fa-home"></i></a> 
                <a href="#"><i class="fa fa-microphone"></i></a> 
                <a href="#"><i class="fa fa-music"></i></a> 
                <a href="#"><i class="fa fa-user-circle"></i></a>
            </div>
        </div>
    </div>
    <div class="nonbts__container">
        <div id="carousel3d">
            <carousel-3d :perspective="10" :space="650" width="600em" :display="5" :controls-visible="false" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
                <slide :index="0">
                        <img src="/imgs/6.jpg" style="border-radius:20px">
                </slide>
                <slide :index="1">
                        <img src="/imgs/1.jpg">
                </slide>
                <slide :index="2">
                        <img src="/imgs/2.jpg">
                </slide>
                <slide :index="3">
                        <img src="/imgs/3.jpg">
                </slide>
                <slide :index="4">
                        <img src="/imgs/4.jpg">
                </slide>
                <slide :index="5">
                        <img src="/imgs/5.jpg">
                </slide>
                <slide :index="6">
                        <img src="/imgs/6.jpg">
                </slide>
                <slide :index="7">
                        <img src="/imgs/7.jpg">
                </slide>
            </carousel-3d>
        </div>
</div>
<div class="nonbts__container" style="padding-top: 2vh;">
    <h4>ศิลปินแนะนำ</h4>
    <div class="row">
        <div class="col">
            <img src="/imgs/1.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/2.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/3.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/4.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/5.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/6.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/7.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>
        <div class="col">
            <img src="/imgs/8.jpg" height="200px" width="200px" style="border-radius:50%;">
        </div>

    </div>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script >new Vue({
  el: '#carousel3d',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
//# sourceURL=pen.js
</script>
</body>
</html>