<main class="container history-order">
    <h2>LỊCH SỬ MUA HÀNG</h2>
    <div>
        <table>
            <thead>
                <tr>
                    <th>#Mã đơn hàng</th>
                    <th>Ngày mua</th>
                    <th>Tổng tiền</th>
                    <th>Tình trạng</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $merge_order = [];
                    foreach ($info_order as $order) {
                        extract($order);
                        $id_order = $id;
                        $total=total_money_order($id_order);
                        $merge_order=array_merge($merge_order,$total);
                        foreach ($merge_order as $merge){
                            extract($merge);
                        }
                        ?>
                            <tr>
                                <td><?=$id?></td>
                                <td><?=$date?></td>
                                <td><?=number_format($total_price, 0, '.', ',')?> VNĐ</td>
                                <td>
                                <?php 
                                if ($status == 0 ) {
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #BD0000; border-radius:20px;"">Chờ xác nhận</span>';
                                    }elseif ($status == 1) {
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #069A8E; border-radius:20px;">Chờ lấy hàng</span>';
                                    }
                                    elseif ($status == 2) {
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #F2921D; border-radius:20px;">Chờ giao hàng</span>';
                                    }elseif ($status == 3) {
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #153462; border-radius:20px;">Đã giao hàng <i class="fa-solid fa-check" style="font-size:15px;"></i></span>';
                                    }elseif ($status == 4){
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #F2921D; border-radius:20px;">Đã huỷ</span>';
                                    }else {
                                        echo '<span style="color:#fff; padding:2px 15px; background-color: #F2921D; border-radius:20px;">Trả hàng</span>';
                                    } ?>
                                </td>
                                <td class="btn-chitiet-order"><a href="index.php?act=show_order_hs&id=<?=$id?>">Chi tiết</a></td>
                            </tr>

                  <?php  }                          
                ?>
            </tbody>
        </table>
    </div>
</main>