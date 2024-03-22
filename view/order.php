<?php
    error_reporting(0);
    if (is_array($_SESSION['login'])) {
        extract($_SESSION['login']);
    }
?>
<main class="form-order container">
        <h2><i class="fa-solid fa-cart-shopping"></i>THANH TOÁN ĐƠN HÀNG</h2>
        <div class="order-wp">
            <table>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th colspan="2">Color / Size</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php   
                        $sum = 0;
                        $price_formatted = number_format($_SESSION['order'][1], 0, '.', ',');
                        $thanhtien = $_SESSION['order'][1] * $_SESSION['order'][3];
                        $thanhtien_formatted = number_format($thanhtien, 0, '.', ',');
                        $sum += $thanhtien;
                        echo '
                            <tr>
                                <td><img src="assets/img/'.$_SESSION['order'][2].'" width="50px" alt=""></td>
                                <td><a style="text-decoration: none;" href="index.php?act=detail&id='.$_SESSION['order'][8].'">'.$_SESSION['order'][0].'</a></td>
                                <td><span style="background-color: '.$_SESSION['order'][6].'; padding: 5px 15px; border:1px solid #d9d9d9; border-radius:50%;"></span></td>
                                <td>'.$_SESSION['order'][7].'</td>
                                <td>'.$price_formatted.'đ</td>
                                <td>'.$_SESSION['order'][3].'</td>
                                <td>'.$thanhtien_formatted.'đ</td>
                            </tr>
                        ';
                ?>
            </table> 
        </div>
        <div class="select_payment">
            <select name="payment_method" id="payment_method">
                <option value="">-Chọn phương thức thanh toán-</option>
                <option value="cash">💵Thanh toán bằng tiền mặt</option>
                <option value="momo">🏧 Thanh toán bằng ATM MOMO</option>
            </select>
        </div>
        <div id="cash_form" style="display: none;">
            <form action="" method="post" class="profile-payment">
            <?php 
                echo'
                <div class="form-receive">                            
                    <h4>Thông tin nhận hàng</h4>
                    <div class="receive-infor">                        
                        <div class="show_infor_order">                       
                        <label for="">Họ và tên</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <input type="text" name="name_order" placeholder="Nhập họ và tên : " value="'.$name.'"><br>
                            <label for="">Số điện thoại</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <input type="text" name="phone_order" placeholder="Nhập số điện thoại : " value="'.$phone.'"><br>
                            <label for="">Địa chỉ</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <textarea name="address_order" id="" cols="30" rows="6" placeholder="Nhập địa chỉ nhận hàng : ">'.$address.'</textarea><br>
                        </div>
                    </div>
                </div>
                ';
                    $sum=0;
                    $thanhtien = $_SESSION['order'][1] * $_SESSION['order'][3];
                    $sum += $thanhtien;
                    echo '
                        <div class="right_order">
                            <h4><i class="fa-solid fa-money-bill"></i> TỔNG TIỀN: '.number_format($sum, 0, '.', ',').' VNĐ</h4>
                            <div class="payment-in">
                                <input type="hidden" name="tongtien_order" value="'. $sum .'">
                                <div class="payout-in">
                                    <input type="submit" name="order_pay" value="THANH TOÁN BẰNG TIỀN MẶT">
                                </div>
                            </div>
                        </div>
                    ';
            ?>
            </form>
            </div>
            <div id="momo_form" style="display: none;">
            <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?act=momo_pay1" class="profile-payment">
            <?php 
                echo'
                <div class="form-receive">                            
                    <h4>Thông tin nhận hàng</h4>
                    <div class="receive-infor">                        
                        <div class="show_infor_order">                       
                        <label for="">Họ và tên</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <input type="text" name="name_order" placeholder="Nhập họ và tên : " value="'.$name.'"><br>
                            <label for="">Số điện thoại</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <input type="text" name="phone_order" placeholder="Nhập số điện thoại : " value="'.$phone.'"><br>
                            <label for="">Địa chỉ</label> <span style="color:#DB0000;">'.$error_name.'</span>
                            <textarea name="address_order" id="" cols="30" rows="6" placeholder="Nhập địa chỉ nhận hàng : ">'.$address.'</textarea><br>
                        </div>
                    </div>
                </div>
                ';
                    $sum=0;
                    $thanhtien = $_SESSION['order'][1] * $_SESSION['order'][3];
                    $sum += $thanhtien;
                        echo '
                            <div class="right_order">
                                <h4><i class="fa-solid fa-money-bill"></i> TỔNG TIỀN: ' . number_format($sum, 0, '.', ',') . ' VNĐ</h4>
                                <div class="payment-in">
                                    <input type="hidden" name="tongtien_order" value="' . $sum . '">
                                    <div class="payout-in">
                                        <input type="submit" name="payment_atm1" value="THANH TOÁN BẰNG MOMO">
                                    </div>
                                </div>
                            </div>
                        </div>
                    '; 
                    
            ?>
            </form>
        </div>
    </main>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            var paymentMethodSelect = document.getElementById("payment_method");
            var cashForm = document.getElementById("cash_form");
            var momoForm = document.getElementById("momo_form");

            paymentMethodSelect.addEventListener("change", function () {
                // Hide all forms
                cashForm.style.display = "none";
                momoForm.style.display = "none";

                // Show the selected form based on the payment method
                var selectedPaymentMethod = paymentMethodSelect.value;
                if (selectedPaymentMethod === "cash") {
                    cashForm.style.display = "block";
                } else if (selectedPaymentMethod === "momo") {
                    momoForm.style.display = "block";
                }
            });
        });
    </script>