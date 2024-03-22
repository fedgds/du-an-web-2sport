<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="list-product">
            <h1>DANH SÁCH SIZE</h1>
            <table>
                <tr>
                    <th></th>
                    <th>Mã size</th>
                    <th>Size</th>
                    <th>Sản phẩm</th>
                    <th>Giá gốc</th>
                    <th>Giá giảm</th>
                    <th>Hành động</th>
                </tr>
                
                <?php foreach($listSize as $row){
                    extract($row);
                    $suasize = "index.php?act=suasize&id=$id";
                ?>  
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $id ?></td>
                        <td><?= $size ?></td>
                        <td><?= $name ?></td>
                        <td><?= $price ?></td>
                        <td><?= $discount ?></td>
                        <td>
                            <a href="<?= $suasize ?>"><input type="button" value="Sửa"></a>   
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