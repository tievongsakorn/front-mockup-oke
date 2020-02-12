@extends('layouts.default')
@section('content') 
<div class="container" style="padding-top:80px;">
    <div class="col-12 title__payment" style="padding-bottom : 2em ; padding-top:2em ;">
        <h1 style="text-align :center;">การชำระเงิน</h1>
    </div>
    <div class="row box__payment">
        <div class="col-12 title__payment" style="padding-bottom : 2em ; padding-top:2em ;">
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
            <div class="form__card">
                <h4>ชำระด้วยบัตรเครดิตหรือบัตรเดบิต</h4>
                <div class="pay__logo">
                    <img src="/icon/visa.png">
                    <img src="/icon/master.png">
                    <img src="/icon/jcb.png">
                </div>
                <form action="">
                    <div class="form-row">
                    <div class="form-group col-12">
                        <label for="card_number"><h5>เลขบัตร</h5></label>
                        <input type="text" class="form-control" id="card_number" pattern="[0-9]*" placeholder="XXXX XXXX XXXX XXXX" maxlength="16" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="card_name"><h5>ชื่อ</h5></label>
                        <input type="text" class="form-control" id="card_name" placeholder="ชื่อที่แสดงบนบัตร"required>
                    </div>
                    
                    <div class="form-group col-6 col-md-4">
                        <label for="card_month"><h5>เดือน</h5></label>
                        <select id="card_month" class="form-control" required>
                          <option>-</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>

                        </select>
                      </div>
                        <div class="form-group col-6 col-md-4">
                            <label for="card_year"><h5>ปี</h5></label>
                            <select id="card_year" class="form-control" required>
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
                        <div class="form-group col-6 col-md-4">
                            <label for="card_cvv"><h5>รหัสความปลอดภัย</h5></label>
                            <input type="text" class="form-control" id="card_cvv" placeholder="CVV" maxlength="3" required>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">ยืนยันการชำระเงิน</button>
        </form>
    </div>                                 
        </div>
    </div>


@endsection