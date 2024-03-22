<?php 
    if (is_array($_SESSION['login'])) {
        extract ($_SESSION['login']);
    }
?>
<?php 
    if (isset($_SESSION['login'])) {
        ?>
<main class="container update-user">
    <h2>ĐỔI MẬT KHẨU</h2>
    <div class="update-user-wp">
        <?php include 'box-left-setInfo.php' ?>
        <div class="update-user-right">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-grid-pass-info">
                    <label for="">Mật khẩu cũ</label> <span style="color:#DB0000; font-size:15px; font-style:italic;"><?= $error_PassMain; ?></span><br>
                    <input type="password" name="passMain" placeholder="Vui lòng nhập mật khẩu cũ" id=""><br><br>
                    <label for="">Mật khẩu mới</label> <span style="color:#DB0000; font-size:15px; font-style:italic;"><?= $error_PassNew; ?></span><br>
                    <input type="password" name="passNew" placeholder="Vui lòng nhập mật khẩu mới" id=""><br><br>
                    <label for="">Nhập lại mật khẩu mới</label> <span style="color:#DB0000; font-size:15px;font-style:italic;"><?= $error_PassEnter; ?></span><br>
                    <input type="password" name="passEnter" placeholder="Vui lòng nhập lại mật khẩu mới" id=""><br>
                    <br><br>
                    <input type="submit" name="changePass" value="UPDATE">
                </div>
            </form>
        </div>        
    </div>

</main>

<?php
}else {
    echo'<div style="width:100%; text-align:center; padding-top:75px">
        <img src="./assets/img/404.svg" width="50%" alt="">
    </div>
    ';
}
?>