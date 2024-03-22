<?php 
    if (is_array($showcart)) {
        extract($showcart);
    }
?>
<main class="form-cart container">
    <h2><i class="fa-solid fa-bag-shopping"></i>GIỎ HÀNG</h2>
    <div class="cart-detail">
        <form method="post" action="index.php?act=updatecart">
            <table>
                <tr>
                    <th>#STT</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th colspan="2">Color / Size</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                <?php 
                    $i=0;
                    $stt=1;
                    $sum = 0;
                    foreach ($showcart as $cart) {
                        // var_dump($cart);
                        extract($cart);
                        $price_formatted = number_format($variant_discount, 0, '.', ',');
                        $thanhtien = $variant_discount * $quantity;
                        $thanhtien_formatted = number_format($thanhtien, 0, '.', ',');
                        $sum += $thanhtien;
                        echo '
                            <tr>
                                <td>'.$stt++.'</td>
                                <td><img src="assets/img/'.$product_img.'" width="50px" alt=""></td>
                                <td><a style="text-decoration: none;" href="index.php?act=detail&id='.$product_id.'">'.$product_name.'</a></td>
                                <td><span style="background-color: '.$color.'; padding: 10px 20px; border:1px solid #d9d9d9; border-radius:50%;"></span></td>
                                <td>'.$size.'</td>
                                <td>'.$price_formatted.'đ</td>
                                <td><input type="number" min="1" name="quantity['.$cart_id.']" value="'.$quantity.'" id="" max="'.$variant_quantity.'"></td>
                                <td>'.$thanhtien_formatted.'đ</td>
                                <td><a href="index.php?act=deletecart&id='.$cart_id.'" onclick="return xoacart()"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        ';
                        $i++;
                    }
                        echo'<caption style="caption-side:bottom;text-align:left; color: #A6A6A4; font-style:italic; padding:15px 0px;">Có '.$i.' sản phẩm trong giỏ hàng</caption>';
                        echo'<caption class="total" style="caption-side:bottom;text-align:right; padding:0px 30px 50px 0px;"><i class="fa-solid fa-file-invoice-dollar"></i>Tổng: '. number_format($sum, 0, '.', ',').' VND</caption>
                    ';
                ?>
                <script>
                    function xoacart() {
                        return confirm("Bạn có muốn xoá khỏi giỏ hàng không?");
                    }
                </script>
            </table>
            <div class="submit-cart">
                <button class="update-cart" type="submit">Cập nhật giỏ hàng</button>
                <div>
                <a href="index.php" class="shopping">Tiếp tục mua hàng</a>
                    <?php 
                        if (!empty($showcart)) {
                            echo '<a href="index.php?act=order_cart" class="order">Mua hàng</a>';
                        }else {
                            echo "<script>alert('Giỏ hàng rỗng 😐');
                            </script>";
                        }
                        
                    ?>
                </div>
            </div>
        </form>
    </div>
</main>