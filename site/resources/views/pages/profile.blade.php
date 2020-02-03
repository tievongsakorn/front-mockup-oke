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
            <div class="row" style="padding-top : 3em">
                <div class="col-12 col-xl-4">
                    <div class="pro__pic__box">
                        <img src="/artist_pic/atom.jpg">
                    </div>
                </div>
                <div class="col-12 col-xl-7" style="text-align:left ;">
                    <div class="art__detail">
                        <h1>อะตอม ชนกันต์</h1> 
                        <p> ชนกันต์ รัตนอุดม ชื่อเล่น อะตอม  เกิดเมื่อวันที่ 15 ธันวาคม พ.ศ. 2534 
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
                            <a href="#" class="select-btn"> <img src="/icon/icon-addlist.png" height="25px" style="margin-bottom:2px"> เลือกเพลงทั้งหมด</a>
                        </div>
                        </h3>  
                </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 allsong__grid" style="margin-top : 2em">
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="artist_pic/atom.jpg">
                                    <a href="#"> <img src="/icon/icon-play.png"> </a>
                                </div>
                                <h5>Good Morning Teacher</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/donttell.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>อย่าบอก</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/please.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>Please</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/scar.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>แผลเป็น (Scar)</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/dust.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>ทางของฝุ่น (Dust)</h5>
                            </div>
                        </div>   
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/aww.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>อ้าว</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="song/karma.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>ช่วงนี้</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="artist_pic/atom.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>รถคันเก่า</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="artist_pic/atom.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>พอ</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="allsong_col">
                                <div>
                                    <img src="artist_pic/atom.jpg">
                                    <a href="#"><img src="/icon/icon-play.png"></a>
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed exercitationem earum, animi ea iste perferendis.</h5>
                            </div>
                        </div>
                    </div>
            </div>
    </div>      
</div>
@endsection