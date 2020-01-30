@extends('layouts.default')
@section('content')
    <div class="nonebts__container" id="corousal__top">
    
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
    <div class="nonebts__container" style="padding-top: 2vh;">
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
            <div class="art__slide">
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
                <img class="img__circle" src="/artist_pic/palmy.jpg">
                <h5>ปาล์มมี่</h5>
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
    
    <div class="nonebts__container" style="padding-top: 5vh;">
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
    
    <div class="nonebts__container" style="padding-top: 5vh;">
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
    <div class="nonebts__container" style="padding-top: 5vh;">
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
    <div class="nonebts__container" style="padding-top: 3vh;">
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
@endsection