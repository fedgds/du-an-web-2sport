
<main class="container">
            <?php include "boxleft.php" ?>
            <article>
                <div class="tilte-ds">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
                </div>
                <form class="form-search" action="" method="post">
                    <div class="search-wp">
                        <input class="input-search" name="inOrder" type="search" required placeholder="Bạn cần tìm gì...">
                        <button class="btn-search" type="submit" name="searchOrder"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>#Mã ĐH</th>
                            <th>NGÀY TẠO</th>
                            <th>KHÁCH HÀNG</th>
                            <th>TÌNH TRẠNG</th>
                            <th>TỔNG TIỀN </th>
                            <th>CHI TIẾT </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($list_order as $order) {
                                $id_order=$order[0];
                                // var_dump($order);
                                $total=total_money_order($id_order);
                                foreach ($total as $sum) {
                                    extract($sum);
                                }?>
                                    <tr>
                                        <td><?=$order[0]?></td>
                                        <td><?=$order['date']?></td>
                                        <td><?=$order['username']?></td>
                                        <td>
                                        <?php 
                                            if ($order['status'] == 0 ) {
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #BD0000; border-radius:20px;"">Chờ xác nhận</span>';
                                            }elseif ($order['status'] == 1) {
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #069A8E; border-radius:20px;">Chờ lấy hàng</span>';
                                            }
                                            elseif ($order['status'] == 2) {
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #ED7D31; border-radius:20px;">Chờ giao hàng</span>';
                                            }elseif ($order['status'] == 3) {
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #0F117A; border-radius:20px;">Đã giao hàng <i class="fa-solid fa-check" style="font-size:15px;"></i></span>';
                                            }elseif ($order['status'] == 4){
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #000; border-radius:20px;">Đã huỷ <i class="fa-solid fa-xmark" style="color: #ffffff; font-size:15px;"></i></span>';
                                            }else {
                                                echo '<span style="color:#fff; padding:2px 15px; background-color: #980F5A; border-radius:20px;">Trả hàng <i class="fa-solid fa-arrow-rotate-left" style="color: #ffffff; font-size:15px;"></i></span>';
                                            } 
                                        ?>
                                        </td>
                                        <td><?= number_format($total_price, 0, '.', ',')?> VNĐ</td>
                                        <td class="btn-chitiet-order"><a href="index.php?act=chitietdh&id=<?=$order[0]?>">Chi tiết</a></td>
                                    </tr>

                         <?php  }
                        ?>
                    </tbody>
                </table>
                <?php 
                    if (isset($search_dh)) {
                        echo '
                        <div class="btn-back" style="padding-top:25px;">
                            <a href="index.php?act=qldh"><i class="fa-regular fa-circle-left"></i> Danh sách</a>
                        </div>
                        ';
                    }
                ?>
                <!-- Thêm phần phân trang -->
                <div class="pagination">
                    <?php
                        $totalCategories = count(pdo_query("SELECT id FROM order_info"));
                        $totalPages = ceil($totalCategories / $perPage);
                        
                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo "<a href='index.php?act=qldh&page=$i'>$i</a> ";
                        }
                    ?>
                </div>
            </article>
</main>