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
            <h1 style="text-align : center;">modal test</h1>
        </div>
        <div class="col-12" align="center">
            <div class="box__package--option">
                <div class="col-12" style="flex-grow: 0;">
                    <button data-toggle="modal" data-target="#LogginModal" class="btn btn-success">เข้าสู่ระบบ</button>
                    <button data-toggle="modal" data-target="#Expire_alert" class="btn btn-success">หมดอายุ</button>
                    <button data-toggle="modal" data-target="#login_alert" class="btn btn-success">กรุณาเข้า</button>
                    <button data-toggle="modal" data-target="#OnlyTBB_alert" class="btn btn-success">สิทธิ์พิเศษ</button>
                </div>
            </div>
        </div>
        <div class="col-12" align="center">
            <div class="box__package--option">
                <div class="col-12" style="flex-grow: 0;">
                    <div class="col-7 package--detail">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" align="center">
            <div class="box__package--option">
                <div class="col-12" style="flex-grow: 0;">
                </div>
            </div>
        </div>
        <div class="col-12" align="center">
            <div class="box__package--option">
                <div class="col-12" style="flex-grow: 0;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection