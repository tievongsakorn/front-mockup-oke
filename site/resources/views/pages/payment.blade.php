@extends('layouts.default')
@section('content') 
<div class="container" style="padding-top: 100px">
    <div class="row user" align="center">
        <div class="col-2" style="text-align:right">
            <div>
                <a href=""><img class="member--pic" src="/artist_pic/vitas.JPG"></a>
            </div>
        </div>
        <div class="col-6 align-self-center" style="text-align : left ">
            <div class="member--detail">
                <h1>Vongsakorn Ketsuriyong</h1>
                <h2>สถานะ VIP : หมดอายุ </h2>
            </div>
        </div>
    </div>
    <hr>
        <div class="row package">
            <div class="col-12" style="padding-bottom : 2em ; padding-top:2em ;">
                <h2 style="text-align : center;">แพ็กเกจสมาชิกแบบรายเดือน</h2>
            </div>
            <div class="col-12" align="center">
                <div class="box__package">
                    <div class="row">
                        <div class="col-9 package--detail">
                            <h1> Oke แบบรายเดือน (ราคาพิเศษ)</h1>
                            <h5> เพียง ฿39,780/เดือน ยกเลิกได้ทุกเมื่อ</h5>
                        </div>
                        <div class="col-3 package--price">
                            <h1> ฿39,780</h1>
                            <a href="#" class="box__package--btn">เลือกเพ็กเกจนี้</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
      
    
</div>
@endsection