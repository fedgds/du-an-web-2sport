<?php
if (is_array($list)) {
}
?>
<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-category">
            <h1>SỬA SIZE</h1>
            <form action="index.php?act=updatesize" method="POST">
                <input type="hidden" name="id" value="<?= $list[0]['idSize'] ?>">
                <label for="name">Size: </label><br />
                <input type="text" name="size" value="<?= $list[0]['size'] ?>"><br>
                <input type="submit" value="SỬA SIZE" name="updateSize">
                <input type="reset" value="NHẬP LẠI"><br>
            </form>
        </div>
    </article>
</main>