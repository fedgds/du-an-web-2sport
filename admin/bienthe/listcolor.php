<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="list-product">
            <h1>DANH SÁCH MÀU</h1>
            <table>
                <tr>
                    <th></th>
                    <th>Mã màu</th>
                    <th>Màu</th>
                    <th>Sản phẩm</th>
                    <th>Giá gốc</th>
                    <th>Giá giảm</th>
                    <th>Hành động</th>
                </tr>
                
                <?php foreach($listColor as $row){
                    extract($row);
                    $sualoai = "index.php?act=suacolor&id=$id";
                ?>  
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $id ?></td>
                        <td><div style="background-color: <?= $color ?>; width: 40px; height: 40px; border: 1px solid #333; border-radius: 20px; margin-left: 40px;"></div></td>
                        <td><?= $name ?></td>
                        <td><?= $price ?></td>
                        <td><?= $discount ?></td>
                        <td>
                            <a href="<?= $sualoai ?>"><input type="button" value="Sửa"></a>   
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="action">
                <a href="">CHỌN TẤT CẢ</a>
                <a href="">BỎ CHỌN</a>
                <a href="">XÓA CÁC MỤC ĐÃ CHỌN</a>
            </div>
        </div>
    </article>
</main>