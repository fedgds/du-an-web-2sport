<?php
if (is_array($list)) {
    extract($list);
}
?>
<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-category">
            <h1>SỬA COLOR</h1>
            <form action="index.php?act=updatecolor" method="POST">
                <input type="hidden" name="id" value="<?= $list[0]['idColor'] ?>">
                <label for="name">Color: </label><br />
                <input type="text" name="color" value="<?= $list[0]['color'] ?>"><br>
                <input type="submit" value="SỬA COLOR" name="updateColor">
                <input type="reset" value="NHẬP LẠI"><br>
            </form>
        </div>
    </article>
</main>