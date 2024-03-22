<div class="update-user-left">
            <div class="avtar-user">
                <img src="assets/img/<?= $img;?>" width="40%" alt=""><br>
                <span><?= $username;?></span>
                <div class="show-role">
                    <?php 
                        if ($role=='2') {
                        echo' <span> ( Admin ) </span>';
                        }elseif($role=='1'){
                            echo' <span> ( Nhân viên ) </span>';
                        }else {
                            echo' <span> ( Khách hàng ) </span>';
                        }
                    ?>
                </div>
            </div>
            <nav class="nav-user-list">
                <ul class="nav-user">
                    <li><a href="index.php?act=setInfoUser"><i class="fa-solid fa-user-pen"></i> Sửa thông tin</a></li>
                    <li><a href="index.php?act=changePass"><i class="fa-solid fa-rotate"></i> Đổi mật khẩu</a></li>
                    <li><a href="index.php?act=history-order"><i class="fa-solid fa-clock-rotate-left"></i> Lịch sử mua hàng</a></li>
                    <li><a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a></li>
                </ul>
            </nav>
            
        </div>