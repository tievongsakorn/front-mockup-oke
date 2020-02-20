@extends('layouts.default')
@section('content') 
{{-- ****************************************************************************************************** --}}
{{-- ---------------------------------หน้านี้ยังไม่ได้ใช่เนื่องจากยังมีแค่แพ็กเกจเดียว------------------------------------ --}}
{{-- ---------------------------------ยังไม่ได้ปรับการแสดงผลแบบ Responsive------------------------------------- --}}
{{-- ****************************************************************************************************** --}}

<div class="container" style="padding-top: 100px;">
    <div class="row user" align="center">
        <div class="col-12 col-md-2">
            <div>
                <a href=""><img class="member--pic" src="/artist_pic/vitas.JPG"></a>
            </div>
        </div>
        <div class="col-12 col-md-6 align-self-center">
            <div class="member--detail">
                <h1>Vongsakorn Ketsuriyong</h1>
                <h2>สถานะ VIP : หมดอายุ </h2>
            </div>
        </div>
    </div>
    <hr>
        <div class="row box__package">
            <div class="col-12 title__package" style="padding-bottom : 2em ; padding-top:2em ;">
                <h1 style="text-align : center;">แพ็กเกจสมาชิกแบบรายเดือน</h1>
            </div>
                {{-- <div class="col-12" align="center">
                    <div class="box__package--option">
                        <div class="row">
                            <div class="col-7 package--detail">
                                <h1> Oke แบบรายเดือน</h1>
                                <h5> เพียง ฿99/เดือน ยกเลิกได้ทุกเมื่อ</h5>
                            </div>
                            <div class="col-5 package--price">
                                <h1> THB 99</h1>

                                <a href="/pay" class="box__package--btn" style="text-decoration: none;"><h5>เลือกเพ็กเกจนี้</h5></a>
                            </div>
                            
                        </div>  
                    </div>
                </div>
                <div class="col-12" align="center">
                    <div class="box__package--option">
                        <div class="row">
                            <div class="col-7 package--detail">
                                <h1> Oke ต่ออายุอัตโนมัติแบบราย 3 เดือน</h1>
                                <h5> เพียง ฿249/3เดือน ยกเลิกได้ทุกเมื่อ</h5>
                            </div>
                            <div class="col-5 package--price">
                                <h1> THB 249</h1>
                                <form action="{{action('UserpackController@store')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="package" value="2">
                                    <button type="submit" class="box__package--btn"><h5>เลือกเพ็กเกจนี้</h5></button>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="col-12" align="center">
                    <div class="box__package--option">
                        <div class="row">
                            <div class="col-7 package--detail">
                                <h1> Oke ต่ออายุอัตโนมัติแบบรายปี</h1>
                                <h5> เพียง ฿799/ปี ยกเลิกได้ทุกเมื่อ</h5>
                            </div>
                            <div class="col-5 package--price">
                                <h1> THB 799</h1>
                                <form action="{{action('UserpackController@store')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="package" value="3">
                                    <button type="submit" class="box__package--btn"><h5>เลือกเพ็กเกจนี้</h5></button>
                                
                                </form>
                            </div>
                        </div>  
                    </div>
                </div> --}}
                {{-- ------------------ยืมใช้พื้นที่ในการใส่ปุ่มเพื่อการเปิด Modal----------------------- --}}
                <div class="col-12" align="center">
                    <div class="box__package--option">
                    <div class="col " style="flex-grow: 0;">
                        <button data-toggle="modal" data-target="#LogginModal" class="btn btn-success">เข้าสู่ระบบ</button>
                        <button data-toggle="modal" data-target="#Expire_alert" class="btn btn-success">หมดอายุ</button>
                        <button data-toggle="modal" data-target="#login_alert" class="btn btn-success">กรุณาเข้า</button>
                        <button data-toggle="modal" data-target="#OnlyTBB_alert" class="btn btn-success">สิทธิ์พิเศษ</button>
                    </div>
                    </div>
                </div>
            </div>
</div>
@endsection