<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="list-product">
            <h1>DANH SÁCH BÌNH LUẬN</h1>
            <form action="index.php?act=deleteselected-bl" method="post">
                <table>
                    <tr>
                        <th></th>
                        <th>Người bình luận</th>
                        <th>Sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach($binhluan as $row){
                        extract($row);
                        $delete = "index.php?act=deletebl&id=$id";
                    ?>
                    <tr>
                        <td><input id="checkbox<?= $id ?>" name="selectedComments[]" type="checkbox" value="<?= $id ?>"></td>
                        <td><?= $username ?></td>
                        <td><?= $name ?></td>
                        <td><?= $text ?></td>
                        <td><?= $date ?></td>
                        <td>
                            <a onclick="return confirm('Bạn có chắc muốn xóa bình luận này');" href="<?=$delete?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                </div>
                <div class="action">
                    <a href="#" class="select-all">CHỌN TẤT CẢ</a>
                    <a href="#" class="deselect-all">BỎ CHỌN</a>
                    <button class="delete" type="submit" onclick="return confirm('Bạn có chắc muốn xóa các sản phẩm đã chọn?')">XÓA BÌNH LUẬN ĐÃ CHỌN</button>
                </div>
            </form>
        </div>
    </article>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('a.select-all').addEventListener('click', function (event) {
            event.preventDefault();
            var checkboxes = document.querySelectorAll('input[name="selectedComments[]"]');
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = true;
            });
        });

        document.querySelector('a.deselect-all').addEventListener('click', function (event) {
            event.preventDefault();
            var checkboxes = document.querySelectorAll('input[name="selectedComments[]"]');
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = false;
            });
        });
    });

</script>