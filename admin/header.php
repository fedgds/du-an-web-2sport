<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị admin</title>
    <link rel="stylesheet" href="../assets/style/style-admin.css">
    <link rel="stylesheet" href="../assets/style/responsive-admin.css">
    <link rel="icon" type="image/png" href="../assets/img/brand.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <nav class="navigation container">
                <div class="bars">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <a href="../index.php"><img class="logo" src="../assets/img/logo-web.svg" alt=""></a>
                <?php 
                    if (isset($_SESSION['login'])) {
                        extract($_SESSION['login']);
                        echo'
                            <marquee class="marquee-wel" behavior="" direction="" style="text-transform: uppercase;"><i class="fa-solid fa-bolt-lightning"></i> CHÀO MỪNG '.$_SESSION['login']['username'].' ĐẾN VỚI TRANG QUẢN TRỊ</marquee>
                            <div class="profile-out">
                                <a href="#"><i class="fa-solid fa-user-tie"></i>'.$_SESSION['login']['username'].'<span style="font-size: 14px;">'.($_SESSION['login']['role'] == 2 ? ' (Admin)' : ' (Nhân viên)').'</span></a>
                                <a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        ';
                    }
                ?>
                <!-- <marquee class="marquee-wel" behavior="" direction=""><i class="fa-solid fa-bolt-lightning"></i> CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ</marquee> -->
            </nav>
        </header>
        <marquee class="marquee-wel-none" behavior="" direction=""><i class="fa-solid fa-bolt-lightning"></i> CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ</marquee>
        <div class="overlay"></div>