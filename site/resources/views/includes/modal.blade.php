<div class="modal fade login" id="LogginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="head__box">
                    <div class="item1">
                        <img src="/imgs/b_logo.png">
                    </div>
                    <div class="item2">
                        <h1 class="modal-title" id="LogginModalTitle">Login</h1>
                        <h4>เข้าสู่ระบบ</h4>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form__login">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" placeholder="enter_email@example.com">
                    </div>
                    {{-- <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control password__input" placeholder="********">
                        <span></span>
                    </div> --}}
                    <label>Password</label>
                    <div class="input-group">
                    <input type="password" class="form-control " id="password" placeholder="********">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <img id="view_pass_btn" src="/icon/icon-view-pass.png">
                        </span>
                    </div>
                    </div>
                    <p>ใช้ Username / Password เดียวกับ 3BB Member</p>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <div class="pass__forget col-12">
                        <a href="#">Forget Password?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>Don't have an account? <a href="#">Sing up</a></p>
            </div>
      </div>
    </div>
</div>

<div class="modal fade expire" id="Expire_alert" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="expire__content modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="expire__body modal-body">
                <img src="/icon/icon-information.png">
                <h2>สิทธิ์ของคุณหมดอายุ</h2>
                <h3>กรุณาติดต่อ Call center 3BB <br>โทร 1530</h3>
                <button class="btn btn-primary btn-block" data-dismiss="modal">ตกลง</button>
            </div>
      </div>
    </div>
</div>

<div class="modal fade OnlyTBB" id="OnlyTBB_alert" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="OnlyTBB__content modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/icon/icon-information.png">
                <h2>สิทธิพิเศษสำหรับลูกค้า 3BB เท่านั้น</h2>
                <h4 class="OnlyTBB__askmore">สอบถามรายละเอียดเพิ่มเติมที่</h4>
                <h4 class="Tbb__callcenter" >Call center 3BB โทร 1530</h4>
                <button class="btn btn-primary btn-block" data-dismiss="modal">ตกลง</button>
            </div>
      </div>
    </div>
</div>

<div class="modal fade login_alert" id="login_alert" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="login__content modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/icon/icon-information.png">
                <h2>กรุณาเข้าสู่ระบบก่อนทำรายการค่ะ</h2>
                <button class="btn btn-primary btn-block" data-dismiss="modal">ตกลง</button>
                <button class="login__close--btn" data-dismiss="modal">ปิด</button>
            </div>
      </div>
    </div>
</div>