@extends('layouts.default')
@section('content') 

    <div class="container-fluid d-flex justify-content-center" style="padding-top: 85px; text-align:center;">
        <div class="blur__bg">
            <div class="img-box">
                <img src="/artist_pic/atom.jpg">
            </div>
        </div>
        <div class="col-12 col-xl-10" style="padding-top:2em">
            <h2>ศิลปินแนะนำ</h2> 
            <div class="row" style="padding-top : 2em">
                
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
            <div class="col-12" id="all_song" style="text-align : center;">
                <div id="slide-title" style="text-align :left; padding-left : 0;">
                    <h3>เพลงทั้งหมด
                        <div style="text-align : right;">
                            <button class="select-btn"> <img src="/icon/icon-addlist.png" height="25px" style="margin-bottom:2px"> เลือกเพลงทั้งหมด</button>
                        </div>
                        </h3>  
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5">
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente sit adipisci nisi maxime est maiores!</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>quos sequi accusamus quaerat libero aliquam expedita delectus nostrum cumque ratione eligendi esse!</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>   
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_slide">
                                <img src="artist_pic/ded.jpg">
                                <h5>ชื่อเพลงๆๆๆๆๆ</h5>
                            </div>
                        </div>
                    </div>
                
            </div>
            {{-- <div class="col-12" id="all_song" style="text-align : left;">
                <div id="slide-title">
                    <h3>เพลงทั้งหมด
                        <div style="text-align : right;">
                            <button class="select-btn"> <img src="/icon/icon-addlist.png" height="25px" style="margin-bottom:2px"> เลือกเพลงทั้งหมด</button>
                        </div>
                        </h3>  
                    </div>
                
                <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true , "prevNextButtons": false, "pageDots": false}'>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/ded.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอะไรสักอย่าง</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/labanoon.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอีกเพลงนึง</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/rach.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพิ่งออก</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/palmy.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเก่าแล้ว</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/vitas.JPG">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพลงหนึ่ง</h5>
                    </div>
                </div>
                <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true , "prevNextButtons": false, "pageDots": false}'>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/ded.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอะไรสักอย่าง</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/labanoon.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงอีกเพลงนึง</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/rach.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพิ่งออก</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/palmy.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเก่าแล้ว</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/vitas.JPG">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเพลงหนึ่ง</h5>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/ded.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ทิ้งไว้ต้นทาง</h5>
                        <h6>Carrot</h6>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/oat.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>ชื่อเพลง</h5>
                        <h6>Oat Pramote</h6>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/tu.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>พูดทำไม</h5>
                        <h6>Tu Phobthorn</h6>
                    </div>
                    <div class="col-lg col-md-4 allsong_slide">
                        <img src="artist_pic/atom.jpg">
                        
                            <a href="#" class="icon"><img src="/icon/icon-play.png"></a>
                        </div>
                        <h5>เพลงเบา ฟังชิล</h5>
                        <h6>Atom</h6>
                    </div>
                </div>
            </div>
        </div></div> --}}

    </div>      
    </div>
@endsection