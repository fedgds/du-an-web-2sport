<ul class="list-menu">
    <li><a href="index.php?act=checkdh"><i class="fa-solid fa-receipt"></i> Check đơn hàng</a></li>
    <li><a href="index.php?act=cart"><i class="fa-solid fa-bag-shopping"></i> Giỏ hàng</a></li>
    <li class="fa-bag"><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
    <li class="circle-user">
        <?php 
            if (isset($_SESSION['login'])) {
                extract($_SESSION['login']);
                echo '
                    <a><img src="assets/img/'.$_SESSION['login']['img'].'" alt="">'.$_SESSION['login']['username'].'</a>
                    <ul class="reg-log">
                        <li><a href="index.php?act=dangky"><i class="fa-solid fa-user-pen"></i> Đăng kí</a></li>
                        <li><a href="index.php?act=dangnhap"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a></li>
                        <li>
                            <form action="index.php?act=logout" method="post">
                                <button type="submit" class="btn btn-danger" name="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng Xuất</button>
                            </form>
                        </li>
                    </ul>
                ';
            }else {
                echo'
                    <a><i class="fa-solid fa-circle-user"></i>Tài khoản</a>
                    <ul class="reg-log">
                        <li><a href="index.php?act=dangky"><i class="fa-solid fa-user-pen"></i> Đăng kí</a></li>
                        <li><a href="index.php?act=dangnhap"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a></li>
                    </ul
                ';
            }
        ?>
    </li>
</ul>