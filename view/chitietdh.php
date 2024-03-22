
<main class="container history-order">
    <h2>LỊCH SỬ MUA HÀNG</h2>
    <div class="history_order_rate">
        <table>
            <thead>
                <tr>
                    <th>#STT</th>
                    <th>Tên sản phẩm</th>
                    <th colspan="2">Color / Size</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Đánh giá</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stt=1;
                    foreach ($info_order as $order_status) {
                        extract($order_status);
                        // echo '<pre>';
                        // var_dump($order_status);
                    }
                    $sum=0;
                    foreach ($show_order as $show) {
                        extract($show);
                        $price_formatted = number_format($price, 0, '.', ',');
                        $thanhtien = $price * $quantity;
                        $thanhtien_formatted = number_format($thanhtien, 0, '.', ',');
                        $sum+=$thanhtien;
                        ?>
                            <tr>
                                <td><?=$stt++ ?></td>
                                <td><a style="text-decoration: none;" href="index.php?act=detail&id=<?=$idProduct?>"><?=$productName?></a></td>
                                <td><span style="background-color: <?=$color?>; padding: 5px 15px; border:1px solid #d9d9d9; border-radius:50%;"></span></td>
                                <td><?=$size?></td>
                                <td><?=$price_formatted?>đ</td>
                                <td><?=$quantity?></td>
                                <td><?=$thanhtien_formatted?>đ</td>
                                <td><?php 
                                    if ($status=='3') {
                                        $idkh=$_SESSION['login']['id'];
                                        $id_product=$idProduct;
                                        $comPareCheckRateTrue=comPareRate($idkh,$id_product);
                                        if (empty($comPareCheckRateTrue)) {
                                            echo'<a style="background-color: #BD0000; padding:7px 15px;text-decoration: none; color:#fff; border-radius:5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" href="index.php?act=rate&id='.$id.'&idproduct='.$idProduct.'" target="rateandinfo">ĐÁNH GIÁ 🌟</a>';
                                        }else {
                                            echo'<a style="background-color: #BD0000; padding:7px 15px;text-decoration: none; color:#fff; border-radius:5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" href="index.php?act=rate&id='.$id.'&idproduct='.$idProduct.'" target="rateandinfo">ĐÁNH GIÁ LẠI 🌟</a>';
                                        }
                                    }
                                ?></td>
                            </tr>
                    <?php  }
                    ?><tr style="font-weight:600">
                        <td colspan="3" style="text-align:left; padding-left:10px;">TRẠNG THÁI ĐƠN HÀNG: 
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
                        <td style="text-align:right;padding:15px 10px;"><a target="rateandinfo" href="index.php?act=infoOrder&id=<?=$idOrder?>" style="background-color: #BD0000; padding:7px 15px;text-decoration: none; color:#fff; border-radius:5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">XEM THÔNG TIN NHẬN HÀNG</a></td>
                        <td colspan="4" style="text-align:right;padding:15px 10px;">TỔNG TIỀN: <span style="color:#DB0000;"><?=number_format($sum, 0, '.', ',');?> VND</span></td>
                    </tr>
            </tbody>
        </table>
        <iframe src="" name="rateandinfo" frameborder="0" class="container" width="100%" height="500px"></iframe>
    </div>
</main>