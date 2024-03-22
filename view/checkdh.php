<main class="container">
    <div class="check-cart-wp">
        <div class="check-cart-ins">
            <h3><i class="fa-solid fa-receipt"></i> CHECK ĐƠN HÀNG</h3>
            <form class="form-check-cart" action="" method="post">
                <input class="in-phone" type="tel" name="phoneUser" placeholder="Vui lòng nhập số điện thoại" id=""><br>
                <span style="color:#DB0000; font-size:13px; font-style:italic; padding-top:10px; display:inline-block;"><?= $error_EnterPhone; ?></span>
                <div class="captcha-wp">
                    <span>NHẬP CAPTCHA</span>
                    <div class="in-captcha">
                        <input class="check-captcha" type="text" name="enterCaptcha" placeholder="Vui lòng nhập CAPTCHA" id="">
                        <button class="code-captcha">
                            <?php 
                                $captcha = generateCaptcha();
                                $_SESSION['captcha'] = $captcha;
                                echo $captcha;
                            ?>
                        </button>
                    </div>
                    <span style="color:#DB0000; font-size:13px; font-style:italic; padding-top:10px; display:inline-block;"><?= $error_captcha; ?></span>
                </div>
                <button  style="padding: 15px 25px; background-color:#bd0000; color: #fff; border:none; outline:none; border-radius:10px; cursor: pointer;" type="submit" name="checkOrder">TRA CỨU <i class="fa-solid fa-arrow-right"></i></button>
                <!-- <a href="#" class="btn-checkdh">TRA CỨU <i class="fa-solid fa-arrow-right"></i></a> -->
            </form>
        </div>
        <img src="assets/img/anhcheckdh.svg" alt="">
    </div>
</main>