<?php 
    if ($_SESSION['login']['role']=='2') {
?>
<main class="container">
        <?php include "boxleft.php" ?>
        <article>
            <div class="tilte-ds">
                <h2>DANH SÁCH KHÁCH HÀNG</h2>
            </div>
            <form class="form-search" action="" method="post">
                <div class="search-wp">
                    <input class="input-search" type="search" name="keyword" required placeholder="Nhập user or email ...">
                    <button type="submit" name="searchkh" class="btn-search"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>#STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Access</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                    $stt=1;
                    foreach ($dskh as $kh) {
                        extract($kh);
                        echo'
                            <tr>
                                <td>'.$stt++.'</td>
                                <td>'.$username.'</td>
                                <td>'.$email.'</td>
                                <td><img src="../assets/img/'.$img.'" alt="anh-user"></td>
                                <td> 
                                    '. ($role == 1 ? 'Nhân viên' : 'Khách hàng') .'
                                </td>
                                <td>'. ($role == 0 ? '<a href="index.php?act=phanquyen&id='.$id.'" style="padding:10px; display:block; text-decoration: none; color:#068FFF; "  onclick="return phanquyen()">Phân quyền</a>' : '<a href="index.php?act=goquyen&id='.$id.'" style="padding:10px; display:block; text-decoration: none; color:#DB0000;" onclick="return goquyen()">Gỡ quyền</a>') .'</td>
                            </tr>
                        ';
                        $i++;
                    }
                    echo'<caption style="caption-side:bottom;text-align:left; color: #A6A6A4; font-style:italic; padding:15px 0px;">Có '.$i.' khách hàng</caption>';
                ?>
                <script>
                    function phanquyen() {
                        confirm('Bạn có muốn phân quyền khách hàng này không ?');
                    }
                    function goquyen() {
                        confirm('Bạn có muốn gỡ quyền nhân viên này không ?');
                    }
                </script>
                </tbody>
            </table>  
            <?php 
                if (isset($search_tk)) {
                    echo '
                    <div class="btn-back" style="padding-top:20px;">
                        <a href="index.php?act=khachhang"><i class="fa-regular fa-circle-left"></i> Danh sách</a>
                    </div>
                    ';
                }
            ?>
        </article>
</main>
<?php }else {
        header('Location: index.php');
    }
?>