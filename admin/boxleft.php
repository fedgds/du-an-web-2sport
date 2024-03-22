<aside>
    <ul class="menu-list">
        <div class="btn-exit">
            <i class="fa-solid fa-rectangle-xmark"></i>
        </div>
        <li><a href="index.php">Trang chủ</a></li>
        <li class="list-item">Danh mục <i class="fa-solid fa-caret-down"></i>
            <ul class="menu-item">
                <li><a href="index.php?act=adddm">Thêm danh mục</a></li>
                <li><a href="index.php?act=listdm">Danh sách</a></li>
            </ul>
        </li>
        <li class="list-item">Sản phẩm <i class="fa-solid fa-caret-down"></i>
            <ul class="menu-item">
                <li><a href="index.php?act=addsp">Thêm sản phẩm</a></li>
                <li><a href="index.php?act=listsp">Danh sách</a></li>
                <li><a href="index.php?act=listcolor">Màu sắc</a></li>
                <li><a href="index.php?act=listsize">Size</a></li>
            </ul>
        </li>
        <li><a href="index.php?act=qldh">Đơn hàng</a></li>
        <?php if($_SESSION['login']['role'] == 2){ ?>
            <li><a href="index.php?act=khachhang">Khách hàng</i></a></li>
        <?php } ?>
        <li><a href="index.php?act=listbl">Bình luận</a></li>
            <li class="list-item">Thống kê <i class="fa-solid fa-caret-down"></i>
                <ul class="menu-item">
                    <li><a href="index.php?act=spdm">Sản phẩm</a></li>
                    <li><a href="index.php?act=dhdt">Danh thu</a></li>
                </ul>
            </li>
        <!-- <li><a href="#">Phản hồi</a></li> -->
    </ul>
</aside>