<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/mock.css') }}">
    <title>Mockup Oke</title>
</head>
<body>
    <div class="topnav">
                <img id="logo_img"src="/imgs/t_logo.png">
                <div style="text-align:center;">
                    <form class="form__search" action="">
                        <input type="text" id="form__search" placeholder="ค้นหาเพลง ศิลปิน อัลบัม และเพลย์ลิสต์">
                    </form>
                </div>
            <div id="button">
                <button class="login-bt">เข้าสู่ระบบ</button>
                <button class="regis-bt">สมัครสมาชิก</button>
            </div>
    </div>
    <div id="mySidenav" class="sidenav" style="width: 0px;">
        <div class="icon__bar--btn">
            <span style="font-size:30px;cursor:pointer ;" onclick="navbutton()">&#9776;</span>
        </div>
        <div class="icon__bar" id="icon__bar" style="visibility: hidden;">  
            <img id="logo_img--mobile"src="/imgs/t_logo.png">
            <a href="#"><img src="/icon/icon-home.png"><p>หน้าแรก</p><span></span></a>
            <a href="#"><img src="/icon/icon-mice.png"><p>คาราโอเกะ</p><span></span></a> 
            <a href="#"><img src="/icon/icon-m_his.png"><p>เพลงที่ร้องล่าสุด</p><span></span></a>
            <a href="#" style="padding-bottom : 0.5em"><img src="/icon/icon-pro.png"><p>โปรไฟล์</p><span></span></a>
            <div class="sm-scn-login">
                <a href="#"><img src="/icon/icon-login.png" id="sm-scn-login" style="height: 50px; padding-left :16px"><p>เข้าสู่ระบบ</p><span></span></a>
                <a href="#"><img src="/icon/icon-regis.png" id="sm-scn-login" style="height: 55px;"><p>สมัครสมาชิก</p><span></span></a>
            </div>

        </div>
    </div>
<div id="navspace" style="padding-left: 0px;">
<div class="nonbts__container" id="corousal__top">

    <div class="owl-carousel owl-theme">
        <div class="item" id="img__box">
            <img  src="/playli/6.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/1.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/2.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/3.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/4.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/5.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/6.jpg">
        </div>
        <div class="item" id="img__box">
            <img src="/playli/7.jpg">
        </div>
    </div>
</div>
<div class="nonbts__container" style="padding-top: 2vh;">
    <h3 id="slide-title">
        ศิลปินแนะนำ
        <a href="#">
        <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;">
        </a>
    </h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="art__slide" id="first-slide">
            <a href="/pro"><img class="img__circle" src="artist_pic/atom.jpg"></a>
            <h5>อะตอม ชนกันต์</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide" id="first-slide">
            <img class="img__circle" src="artist_pic/oat.jpg">
            <h5>โอ๊ต ปราโมทย์</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/palmy.jpg">
            <h5>ปาล์มมี่</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide" >
            <img class="img__circle" src="/artist_pic/da-n.jpg">
            <h5>ดา เอ็นโดฟิน</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/palmy.jpg">
            <h5>ปาล์มมี่</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/ded.jpg">
            <h5>โปเตโต</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/labanoon.jpg"> 
            <h5>ลาบานูน</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/rach.jpg">
            <h5>รัชโย</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/tu.jpg">
            <h5>ตู่ ภพธร</h5>
            <h6>20 Song</h6>
        </div>
        <div class="art__slide">
            <img class="img__circle" src="/artist_pic/vitas.JPG">
            <h5>วิ ตาส์</h5>
            <h6>20 Song</h6>
        </div>
    </div>    
</div>

<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 id="slide-title">
        เพลงมาใหม่ 
        <a href="#">
            <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;">
        </a>
    </h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="newsong_slide" id="first-slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอะไรสักอย่าง</h5>
            <h6>Potato</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/labanoon.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอีกเพลงนึง</h5>
            <h6>Labanoon</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/rach.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพิ่งออก</h5>
            <h6>Rachayo</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/palmy.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเก่าแล้ว</h5>
            <h6>Palmy</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/vitas.JPG">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพลงหนึ่ง</h5>
            <h6>Vitas</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ทิ้งไว้ต้นทาง</h5>
            <h6>Carrot</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/oat.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ชื่อเพลง</h5>
            <h6>Oat Pramote</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/tu.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>พูดทำไม</h5>
            <h6>Tu Phobthorn</h6>
        </div>
        <div class="newsong_slide">
            <img src="artist_pic/atom.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
            <h6>Atom</h6>
        </div>
    </div>
</div>

<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 id="slide-title">
        เพลย์ลิสต์
        <a href="#">
            <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;">
        </a>  
    </h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="playli_slide" id="first-slide">
            <img src="playli/1.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/2.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/3.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/4.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/5.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/6.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/7.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/8.JPG">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/9.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/10.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/11.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
        <div class="playli_slide">
            <img src="playli/12.jpg">
             <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
        </div>
    </div>
</div>
<div class="nonbts__container" style="padding-top: 5vh;">
    <h3 id="slide-title">
        เพลงเหงาๆ วันฝนตก
        <a href="#">
            <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;">
        </a>  
    </h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="recom_slide" id="first-slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอะไรสักอย่าง</h5>
            <h6>Potato</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/labanoon.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอีกเพลงนึง</h5>
            <h6>Labanoon</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/rach.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพิ่งออก</h5>
            <h6>Rachayo</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/palmy.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเก่าแล้ว</h5>
            <h6>Palmy</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/vitas.JPG">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพลงหนึ่ง</h5>
            <h6>Vitas</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ทิ้งไว้ต้นทาง</h5>
            <h6>Carrot</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/oat.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ชื่อเพลง</h5>
            <h6>Oat Pramote</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/tu.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>พูดทำไม</h5>
            <h6>Tu Phobthorn</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/atom.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
            <h6>Atom</h6>
        </div>
    </div>
</div>
<div class="nonbts__container" style="padding-top: 3vh;">
    <h3 id="slide-title">
        วันหยุด สุดชิล 
        <a href="#">
            <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;; padding-bottom:5px;">
        </a>
        </h3>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true , "prevNextButtons": false, "pageDots": false}'>
        <div class="recom_slide" id="first-slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอะไรสักอย่าง</h5>
            <h6>Potato</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/labanoon.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงอีกเพลงนึง</h5>
            <h6>Labanoon</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/rach.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพิ่งออก</h5>
            <h6>Rachayo</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/vitas.JPG">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเพลงหนึ่ง</h5>
            <h6>Vitas</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/ded.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ทิ้งไว้ต้นทาง</h5>
            <h6>Carrot</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/oat.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>ชื่อเพลง</h5>
            <h6>Oat Pramote</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/tu.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>พูดทำไม</h5>
            <h6>Tu Phobthorn</h6>
        </div>
        <div class="recom_slide">
            <img src="artist_pic/atom.jpg">
            <div class="overlay">
                <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
            </div>
            <h5>เพลงเบา ฟังชิล</h5>
            <h6>Atom</h6>
        </div>
    </div>
</div>

<div class="footer">
    <div class="col-12">
    <div class="nonbts__container">
        <div class="row">
            <div class="col-6">
                <img src="imgs/b_logo.png" alt="">
                <h3>ดาวน์โหลดแอปพลิเคชั่น</h3>
                <a href="#"><img id="dl_pic" src="/imgs/dl-ios.png" width="140px"></a>
                <a href="#"><img id="dl_pic" src="/imgs/dl-an.png" width="140px"></a>
            </div>
            <div class="col-6" style="padding-right:0;">
                    <div class="contact">
                        <ul>
                            <li><a href="#">เกี่ยวกับเรา</a></li> 
                            <li><a href="#">ติดต่อเรา</a></li> 
                            <li><a href="#">ข้อกำหนดและเงื่อนใข</a></li>
                        </ul>
                        {{-- <h4>Follow Us On Social Media</h4>
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a> --}}
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="footer__copyright">
    <p>Copyright &copy;	OKE.com All right reserve. หมายเลขทะเบียนการค้าอีเล็กทรอนิกส์ : 0127114707040</p>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script>
function navbutton () {
    var nav = document.getElementById("icon__bar");
    var scw = window.screen.width ;
    if (nav.style.visibility == 'hidden') {
        if (scw <576) {
            document.getElementById("mySidenav").style.width = "70%";
            document.getElementById("navspace").style.paddingLeft = "20px";
        } 
        else {
            document.getElementById("mySidenav").style.width = "70px";
            document.getElementById("navspace").style.paddingLeft = "70px";
        }
        document.getElementById("icon__bar").style.opacity = "1";
        document.getElementById("icon__bar").style.visibility = "visible";
        document.getElementById("icon__bar").style.transition = "1.2s";
    }
    else {
        document.getElementById("icon__bar").style.visibility = "hidden";
        document.getElementById("icon__bar").style.opacity = "0";
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("navspace").style.paddingLeft= "0";
        document.getElementById("icon__bar").style.transition = "0.1s";
    }
}


</script>
</body>
</html>