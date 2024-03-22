
<main class="container">
            <?php include "boxleft.php" ?>
            <article>
                <div class="tilte-ds">
                    <h2>THỐNG KÊ SẢN PHẨM THEO DANH MỤC</h2>
                </div>
                <table class="table-tk">
                    <thead>
                        <tr>
                            <th>#STT</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </thead>
                    <?php 
                    $i = 0;
                    foreach($thongkesp as $row){
                        extract($row);
                        $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $category_name ?></td>
                            <td><?= $variant_count ?></td>
                            <td><?= number_format($max_price) ?> VND</td>
                            <td><?= number_format($min_price) ?> VND</td>
                            <td><?= number_format($avg_price) ?> VND</td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>  
                    <a target="chart" href="./thongke/bieudo-sp.php"><button class="btn-bieudo">XEM BIỂU ĐỒ</button> </a>
                <!-- <a target="chart" href="./thongke/bieudo-sp.php">XEM BIỂU ĐỒ </a> -->
                <iframe src="" name="chart" frameborder="0" width="100%" height="520px"></iframe>
            </article>
    </main>
