<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-category">
            <h1>THÊM MỚI DANH MỤC</h1>
            <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
                <label for="">TÊN DANH MỤC</label><br>
                <input type="text" name="namedm"><br>
                <input type="file" name="img"><br>
                <input type="submit" value="THÊM DANH MỤC" name="addCate">
                <input type="reset" value="NHẬP LẠI">
            </form>
        </div>
    </article>
</main>