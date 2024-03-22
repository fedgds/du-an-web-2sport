<main class="container update-user">
    <h2>THIẾT LẬP MẬT KHẨU MỚI</h2>
    <div class="reset-pass">
        <form action="" method="post" style="margin:50px 0px;">
            <div class="form-grid-pass-info">
                <label for="">Mật khẩu mới</label> <span style="color:#DB0000; font-size:15px; font-style:italic;"><?= $error_PassNew; ?></span><br>
                <input type="password"  name="pass" placeholder="Vui lòng nhập mật khẩu mới" id=""><br><br>
                <label for="">Nhập lại mật khẩu mới</label> <span style="color:#DB0000; font-size:15px;font-style:italic;"><?= $error_PassEnter; ?></span><br>
                <input type="password"  name="passW" placeholder="Vui lòng nhập lại mật khẩu mới" id=""><br>
                <br><br>
                <input style="background-color: #bd0000; font-size:17px; border:none;outline:none; padding:15px 25px; border-radius:10px; color:#fff; cursor: pointer;" type="submit" name="pass_reset" value="Change">
            </div>
        </form>
        <div class="img-pass-reset">
            <img src="./assets/img/resetPass.svg" width="100%" alt="">
        </div>  
    </div>
</main>