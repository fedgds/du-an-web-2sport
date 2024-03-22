<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #header, #footer{
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-infor_order_user">
        <?php 
            foreach ($show_order as $show) {
                extract($show);
            }
            ?>
            <h4>THÔNG TIN NHẬN HÀNG</h4>
            <form action="">
                <label for="">Họ và tên </label><br>
                <input type="text" disabled value="<?= $name; ?>"><br><br>
                <label for="">Số điện thoại</label><br>
                <input type="tel" disabled value="<?= $phoneNumber; ?>"><br><br>
                <label for="">Địa chỉ nhận hàng </label><br>
                <textarea name="" id="" cols="30" disabled rows="4"> <?= $address; ?></textarea><br><br>
                <label for="">Hình thức thanh toán </label><br>
                <select name="" disabled id="">
                    <option value="0" <?= ($payment == "0" ? "selected" : "") ?>>💵 Thanh toán bằng tiền mặt</option>
                    <option value="1" <?= ($payment == "1" ? "selected" : "")?>>🏧 Thanh toán bằng ATM MOMO</option>
                </select>
            </form>
    <?php 
    ?>
    </div>
</body>
</html>