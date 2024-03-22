<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="list-product">
            <h1>DANH SÁCH SẢN PHẨM</h1>
            <form class="form-search" action="" method="post">
                <div class="search-wp">
                    <input class="input-search" name="inProduct" type="search" required placeholder="Bạn cần tìm gì...">
                    <button class="btn-search" type="submit" name="searchProduct"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <form action="index.php?act=deleteselected-sp" method="post">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Mã danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach($listProduct as $row){
                        extract($row);
                        $suasp = "index.php?act=suasp&id=$id";
                        $xoasp = "index.php?act=deletesp&id=$id";
                    ?>  
                        <tr>
                            <td><input type="checkbox" id="checkbox<?= $id ?>" name="selectedProducts[]" value="<?= $id ?>"></td>
                            <td><?= $id ?></td>
                            <td><?= $idCategory ?></td>
                            <td><?= $name ?></td>
                            <td><img src="../assets/img/<?= $img ?>" alt=""></td>
                            <td><?=$status == 1 ? 'Hiển thị' : 'Ẩn'?></td>
                            <td>
                                <a href="<?= $suasp ?>"><input type="button" value="Sửa"></a>   
                                <a href="<?= $xoasp ?>"><input type="button" value="Xóa" onclick="return confirm('Bạn có chắc muốn xóa?')"></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <!-- Thêm phần phân trang -->
                <div class="pagination">
                    <?php
                        $totalCategories = count(pdo_query("SELECT id FROM product"));
                        $totalPages = ceil($totalCategories / $perPage);
                        
                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo "<a href='index.php?act=listsp&page=$i'>$i</a> ";
                        }
                    ?>
                </div>
                <div class="action">
                    <a href="index.php?act=addsp">THÊM SẢN PHẨM</a>
                    <a href="#" class="select-all">CHỌN TẤT CẢ</a>
                    <a href="#" class="deselect-all">BỎ CHỌN</a>
                    <button class="delete" type="submit" onclick="return confirm('Bạn có chắc muốn xóa các sản phẩm đã chọn?')">XÓA SẢN PHẨM ĐÃ CHỌN</button>
                </div>
            </form>
        </div>
    </article>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('a.select-all').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            var checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = true;
            });
        });

        document.querySelector('a.deselect-all').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            var checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = false;
            });
        });
    });
    
</script>

