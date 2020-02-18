@extends('layouts.default')
@section('content') 
<div class="container" style="padding-top:80px;">
    <div class="col-12 title__payment">
        <h1 style="text-align :center;">การชำระเงิน</h1>
    </div>
    <div class="row box__payment">
        <div class="col-12 title__payment">
            <h3 style="text-align :center;">แพ็กเกจของคุณ</h3>
        </div>
        <div class="col-12" align="center">
            <div class="box__payment--package">
                <div class="row">
                    <div class="col-8 col-md-7 package--detail">
                        <h1> Oke แบบรายเดือน</h1>
                        <h5> เพียง ฿99/เดือน ยกเลิกได้ทุกเมื่อ</h5>
                        </div>
                        <div class="col-4 col-md-5 package--price">
                            <h1>THB 99</h1>
                    </div>
                </div>  
            </div>
        </div>
        <div class="col-12" style="padding-top : 2em;">
            <div class="form__card--box">
                <h4>ชำระด้วยบัตรเครดิตหรือบัตรเดบิต</h4>
                <div class="pay__logo">
                    <img src="/icon/visa.png">
                    <img src="/icon/master.png">
                    <img src="/icon/jcb.png">
                </div>
                <form action="{{action('UserpackController@store')}}" id="form_card" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="card_number"><h5>เลขบัตร</h5></label>
                            <input type="text" class="form-control" name="card_number" id="card_number"  placeholder="XXXX XXXX XXXX XXXX" minlength="12"required>
                        </div>
                        <div class="form-group col-12">
                            <label for="card_name"><h5>ชื่อ</h5></label>
                            <input type="text" class="form-control" name="card_name" id="card_name" placeholder="ชื่อที่แสดงบนบัตร"required>
                        </div>
                        <div class="form-group col-6 col-md-4">
                            <label for="card_month"><h5>เดือน</h5></label>
                            <select name="card_month" id="card_month" class="form-control" required>
                                <option>-</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-6 col-md-4">
                            <label for="card_year"><h5>ปี</h5></label>
                            <select name="card_year" id="card_year" class="form-control" required>
                                <option>-</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                            </select>
                        </div>
                        <div class="form-group col-6 col-md-4 cvv">
                            <label for="card_cvv"><h5>รหัสความปลอดภัย <img src="/icon/cvv_detail.png" id="cvv__icon" class="cvv__icon"></h5></label>
                            <div id="cvv__detail" class="cvv__detail">
                                <span><p>รหัสความปลอดภัยหรือ CVV หมายถึงตัวเลขพิเศษ 3 หรือ 4 ตัวที่อยู่ด้านหน้า หรือหลังของบัตร</p></span>
                            </div>
                            <input type="text" class="form-control" name="card_cvv" id="card_cvv" placeholder="CVV" maxlength="4" required>
                        </div>
                        <div class="col-12 card__waring">
                            <p> 
                                แพ็กเกจสามารถยกเลิกการเป็นสมาชิกได้ทุกเมื่อ Oke จะต่ออายุการเป็นสมาชิกให้โดยอัตโนมัติ 
                                ระบบจะต่ออายุอัตโนมัติภายใน 24 ชั่วโมงก่อนอายุสมาชิกจะหมดลง และค่าบริการจะถูกหักจากช่องทางการชำระเงินที่บันทึกไว้
                            </p>
                        </div>
                    </div>
            </div>
                    <button type="submit" class="btn btn-primary btn-block">ยืนยันการชำระเงิน</button>
                </form>
        </div>                                 
    </div>
</div>

@endsection