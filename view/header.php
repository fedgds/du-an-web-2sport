<?php
// $showcart_count = isset($_GET['showcart_count']) ? $_GET['showcart_count'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 SPORT</title>
    <link rel="stylesheet" href="assets/style/style-user.css">
    <link rel="stylesheet" href="assets/style/responsive-user.css">
    <link rel="icon" type="image/png" href="assets/img/brand.png">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <nav class="navigation container">
                <a href="index.php"><img class="logo-web" src="assets/img/logo-web.svg" alt="logo-web"></a>
                <a href=""><img class="logo-web-mobile" src="assets/img/logo-mobile.svg" alt="logo-web-mobile"></a>
                <div class="nav-left">
                    <form class="form-search" action="index.php?act=timkiem" method="POST">
                        <div class="search-wp">
                            <input class="input-search" type="search" name="keyw" placeholder="Bạn cần tìm gì..." required>
                            <button type="submit" name="search" class="btn-search"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="search-res">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <!-- <div class="chinhanh">
                            <i class="fa-solid fa-location-dot"></i>
                            <select class="select-cn" id="">
                                <option value="">-- Chọn chi nhánh --</option>
                                <option value="0">Hà Nội</option>
                                <option value="1">Đà Nẵng</option>
                                <option value="1">Hồ Chí Minh</option>
                            </select>
                        </div> -->
                    </form>
                    <ul class="list-menu">
                        <li><a href="index.php?act=checkdh"><i class="fa-solid fa-receipt" style="color:#BD0000"></i> Check đơn hàng</a></li>
                        <li><a href="index.php?act=showcart"><i class="fa-solid fa-bag-shopping" style="color:#BD0000"></i> Giỏ hàng<span style="color: #BD0000; font-style:italic; font-size:13px;">(<?php if(isset($_SESSION['login'])) echo $cartCount; ?>)</span></a></li>
                        <li class="fa-bag"><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                        <?php 
                            if (isset($_SESSION['login'])) {
                                extract($_SESSION['login']);
                                if ($_SESSION['login']['role']=='1' || $_SESSION['login']['role']=='2') {
                                    echo '
                                    <li class="circle-user">
                                        <a><img src="assets/img/'.$_SESSION['login']['img'].'" alt="">'.$_SESSION['login']['username'].'</a>
                                        <ul class="reg-log">
                                            <li>
                                                <a href="admin/index.php"><i class="fa-solid fa-screwdriver-wrench"></i> Trang quản trị</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=history-order"><i class="fa-solid fa-clock-rotate-left"></i> Lịch sử mua hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=setInfoUser"><i class="fa-solid fa-pen-to-square"></i> Thiết lập tài khoản</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </li>
                                    ';                                    
                                }else {
                                    echo '
                                    <li class="circle-user">
                                        <a><img src="assets/img/'.$_SESSION['login']['img'].'" alt="">'.$_SESSION['login']['username'].'</a>
                                        <ul class="reg-log">
                                            <li>
                                                <a href="index.php?act=history-order"><i class="fa-solid fa-clock-rotate-left"></i> Lịch sử mua hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=setInfoUser"><i class="fa-solid fa-pen-to-square"></i> Thiết lập tài khoản</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </li>
                                    ';  
                                }
    
                            }else {
                                echo'
                                    <li class="circle-user">
                                        <a><i class="fa-solid fa-circle-user"></i>Tài khoản</a>
                                        <ul class="reg-log">
                                            <li><a href="index.php?act=dangky"><i class="fa-solid fa-user-pen"></i> Đăng ký</a></li>
                                            <li><a href="index.php?act=dangnhap"><i class="fa-solid fa-arrow-right-to-bracket"></i> Đăng nhập</a></li>
                                        </ul
                                    </li>
                                ';
                            }
                        ?>
                    </ul>
                    <div class="btn-bars">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                </div>
                <div class="category">
                    <div class="btn-home-exit">
                        <a href="">
                            <i class="fa-solid fa-house"></i>Home
                        </a>
                        <div class="btn-exit">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                    </div>
                    <h5></i> DANH MỤC SẢN PHẨM</h5>
                    <ul class="list-dm">
                        <li><a href="">⛸ Giày thể thao</a></li>
                        <li><a href="">🥊 Găng thủ môn</a></li>
                        <li><a href="">🎽 Quần áo bóng đá</a></li>
                        <li><a href="">🧩 Phụ kiện bóng đá <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="list-item-pk">
                                <li><a href="">Quả bóng đá</a></li>
                                <li><a href="">Tất đá bóng ngắn</a></li>
                                <li><a href="">Tất bóng đá dài</a></li>
                                <li><a href="">Túi đựng giày</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="fa-receipt-none"><a href=""><i class="fa-solid fa-receipt"></i> Check đơn hàng</a></div>
                    <div class="circle-user-none"><a href=""><i class="fa-solid fa-circle-user"></i> Tài khoản <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="reg-log-none">
                            <li><a href="index.php?act=dangky"><i class="fa-solid fa-user-pen"></i> Đăng kí</a></li>
                            <li><a href="index.php?act=dangnhap"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="chinhanh-none">
                        <i class="fa-solid fa-location-dot"></i>
                        <select class="select-cn" id="">
                            <option value="">-- Chọn chi nhánh --</option>
                            <option value="0">Hà Nội</option>
                            <option value="1">Đà Nẵng</option>
                            <option value="1">Hồ Chí Minh</option>
                        </select>
                    </div>
                </div>
            </nav>
            <div class="overlay"></div>
        </header>
        <form class="search-wp-none" action="">
            <input class="input-search" type="search" placeholder="Bạn cần tìm gì...">
            <button class="btn-search"><i class="fa fa-search"></i></button>
        </form>
        
