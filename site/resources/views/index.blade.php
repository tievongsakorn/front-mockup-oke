<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                <a href="#" style="text-decoration: none;"><span style="font-size:30px;cursor:pointer ;" onclick="openNav()">&#9776;</span></a>
                <a href="#"><i class="fa fa-home"></i></a>
                <a href="#"><i class="fa fa-microphone"></i></a> 
                <a href="#"><i class="fa fa-music"></i>
                <a href="#"><i class="fa fa-user-circle"></i></a>
            </div>
        </div>
    </div>
    <div class="nonbts__container" style="padding-top:7vh">
        <div id="carousel3d">
            <carousel-3d :perspective="0" :space="730" width="600em" :display="5" :controls-visible="false" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
                <slide :index="0">
                        <img src="/playli/6.jpg">
                </slide>
                <slide :index="1">
                        <img src="/playli/1.jpg">
                </slide>
                <slide :index="2">
                        <img src="/playli/2.jpg">
                </slide>
                <slide :index="3">
                        <img src="/playli/3.jpg">
                </slide>
                <slide :index="4">
                        <img src="/playli/4.jpg">
                </slide>
                <slide :index="5">
                        <img src="/playli/5.jpg">
                </slide>
                <slide :index="6">
                        <img src="/playli/6.jpg">
                </slide>
                <slide :index="7">
                        <img src="/playli/7.jpg">
                </slide>
            </carousel-3d>
        </div>
</div>
<div class="nonbts__container" style="padding-top: 2vh;">
    <h3 style="padding-left: 1em">ศิลปินแนะนำ <i class="fa fa-chevron-circle-right" style="padding-left:5px"></i></h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="art__slide" style="padding-left: 3em ;">
            <img src="artist_pic/oat.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/palmy.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide" >
            <img src="/artist_pic/da-n.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/palmy.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/ded.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/labanoon.jpg"> 
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/rach.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/palmy.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/tu.jpg">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img src="/artist_pic/vitas.JPG">
            <h5>ชื่อศิลปิน Blah blah</h5>
            <h6>20 Song</h6>
        </div>
    </div>    
</div>

<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 style="padding-left: 1em">เพลงมาใหม่ <i class="fa fa-chevron-circle-right" style="padding-left:5px"></i></h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="newsong_slide" style="padding-left: 3em ;">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงอะไรสักอย่าง</h5>
            <h6>Potato</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/labanoon.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงอีกเพลงนึง</h5>
            <h6>Labanoon</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/rach.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเพิ่งออก</h5>
            <h6>Rachayo</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/palmy.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเก่าแล้ว</h5>
            <h6>Palmy</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/vitas.JPG">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเพลงหนึ่ง</h5>
            <h6>Vitas</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>ทิ้งไว้ต้นทาง</h5>
            <h6>Carrot</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/oat.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>ชื่อเพลง</h5>
            <h6>Oat Pramote</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/tu.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>พูดทำไม</h5>
            <h6>Tu Phobthorn</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/atom.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
            <h6>Atom</h6>
        </div>
    
    </div>
</div>

<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 style="padding-left: 1em">เพลย์ลิสต์ <i class="fa fa-chevron-circle-right" style="padding-left:5px"></i></h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="playli_slide" style="padding-left: 3em ;">
            <img src="playli/1.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/2.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/3.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/4.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/5.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/6.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/7.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/8.JPG">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/9.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/10.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/11.jpg">
            <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/12.jpg">
             <div class="overlay">
                <a href="#" class="icon"><i class="fa fa-play-circle"></i></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
    </div>
</div>
<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 style="padding-left: 1em">เพลงเหงาๆ วันฝนตก <i class="fa fa-chevron-circle-right" style="padding-left:5px"></i></h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>

    </div>
</div>

<div class="footer">

</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script >
new Vue({
  el: '#carousel3d',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
</script>
</body>
</html>