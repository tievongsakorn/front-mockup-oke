@extends('layouts.default')
@section('content') 

    <div class="container-fluid d-flex justify-content-center" style="padding-top: 85px; text-align:center;">
        <div class="blur__bg">
            <div class="img-box">
                <img src="/artist_pic/atom.jpg">
            </div>
        </div>
        <div class="col-10" style="padding-top:2em">
            <h2>ศิลปินแนะนำ</h2>
            <div class="row" style="padding-top : 3em">
                
                <div class="col-12 col-xl-4">
                    <div class="pro__pic__box">
                        <img src="/artist_pic/atom.jpg">
                    </div>
                </div>
                <div class="col-12 col-xl-8" style="text-align:left ;">
                    <div class="art__detail">
                        <h1>อะตอม ชนกันต์</h1>
                        <p>
                            ชนกันต์ รัตนอุดม ชื่อเล่น อะตอม  เกิดเมื่อวันที่ 15 ธันวาคม พ.ศ. 2534 
                            เป็นศิลปินในสังกัดไวท์มิวสิก เริ่มทำเพลงตอนชั้นประถมศึกษาปีที่ 6 ก่อนจะเริ่มจริงจังตอนมัธยมศึกษาตอนปลายที่กรุงเทพคริสเตียนวิทยาลัย 
                            และปล่อยซิงเกิลเปิดตัว ในช่วงต้นปี พ.ศ.2558 ในเพลง พลีส (Please)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12" id="all_song" style="text-align : left;">
                <h3 id="slide-title">
                    เพลงทั้งหมด
                    <a href="#">
                        <img src="icon/viewmore.png" width="34px" style="padding-left:15px; padding-bottom:5px;">
                    </a>
                </h3>
                <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true , "prevNextButtons": false, "pageDots": false}'>
                    <div class="art__song">
                        <img src="artist_pic/ded.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอะไรสักอย่าง</h5>
                        <h6>Potato</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/labanoon.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอีกเพลงนึง</h5>
                        <h6>Labanoon</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/rach.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพิ่งออก</h5>
                        <h6>Rachayo</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/palmy.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเก่าแล้ว</h5>
                        <h6>Palmy</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/vitas.JPG">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพลงหนึ่ง</h5>
                        <h6>Vitas</h6>
                    </div>
                    {{-- <div class="art__song">
                        <img src="artist_pic/ded.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ทิ้งไว้ต้นทาง</h5>
                        <h6>Carrot</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/oat.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ชื่อเพลง</h5>
                        <h6>Oat Pramote</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/tu.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>พูดทำไม</h5>
                        <h6>Tu Phobthorn</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/atom.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเบา ฟังชิล</h5>
                        <h6>Atom</h6>
                    </div> --}}
                </div>
                <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true , "prevNextButtons": false, "pageDots": false}'>
                    <div class="art__song">
                        <img src="artist_pic/ded.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอะไรสักอย่าง</h5>
                        <h6>Potato</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/labanoon.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอีกเพลงนึง</h5>
                        <h6>Labanoon</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/rach.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพิ่งออก</h5>
                        <h6>Rachayo</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/palmy.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเก่าแล้ว</h5>
                        <h6>Palmy</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/vitas.JPG">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพลงหนึ่ง</h5>
                        <h6>Vitas</h6>
                    </div>
                    {{-- <div class="art__song">
                        <img src="artist_pic/ded.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ทิ้งไว้ต้นทาง</h5>
                        <h6>Carrot</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/oat.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ชื่อเพลง</h5>
                        <h6>Oat Pramote</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/tu.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>พูดทำไม</h5>
                        <h6>Tu Phobthorn</h6>
                    </div>
                    <div class="art__song">
                        <img src="artist_pic/atom.jpg">
                        <div class="overlay">
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเบา ฟังชิล</h5>
                        <h6>Atom</h6>
                    </div> --}}
                </div>
            </div>
        </div>

        
    </div>
@endsection