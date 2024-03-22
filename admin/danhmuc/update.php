<?php 
    if ($_SESSION['login']['role']=='2') {
?>
<?php
if (is_array($danhmuc)) {
    extract($danhmuc);
}
?>
<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-category">
            <h1>SỬA DANH MỤC</h1>
            <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value="<?= $id ?>" hidden>
                <label for="">TÊN DANH MỤC</label><br>
                <input type="text" name="namedm" value="<?= $name ?>"><br>
                <input type="file" name="img">
                <img src="../assets/img/<?= $img ?>" alt="" width="70px" height="60px"><br>
                <input type="submit" value="SỬA DANH MỤC" name="updateCate">
                <input type="reset" value="NHẬP LẠI"><br>
                <?php
                    if (isset($messSuccess) && $messSuccess!='') {
                        echo $messSuccess;
                    }
                ?>
            </form>
        </div>
    </article>
</main>
<?php }else {
        header('Location: index.php');
    }
?>