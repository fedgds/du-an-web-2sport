<div class="container register-wp">
    <div class="form-signup">
        <h1>ĐĂNG KÝ</h1>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Vui lòng nhập username">
            <span style="color: orangered; font-size: small;"><?php if(isset($userError)) echo $userError;?></span><br>
            <input type="email" name="mail" placeholder="Vui lòng nhập email">
            <span style="color: orangered; font-size: small;"><?php if(isset($emailError)) echo $emailError;?></span><br>
            <input type="password" name="pass" placeholder="Vui lòng nhập mật khẩu">
            <span style="color: orangered; font-size: small;"><?php if(isset($passError)) echo $passError;?></span><br>
            <input type="password" name="passcheck" placeholder="Vui lòng nhập lại mật khẩu">
            <span style="color: orangered; font-size: small;"><?php if(isset($passCheckError)) echo $passCheckError;?></span>
            <div class="accept">
                <input type="checkbox" required>
                <span> Tôi đồng ý với các điều khoản bảo mật cá nhân</span>
            </div>
            <input type="submit" name="register" value="Đăng ký">
            <p>Bạn đã có tài khoản?<a class="signin-now" href="index.php?act=dangnhap"> Đăng nhập ngay</a></p>
        </form>
    </div>
    <div class="img-signup">
        <img src="assets/img/img-signup.svg" alt="anhsignup">
    </div>  
</div>