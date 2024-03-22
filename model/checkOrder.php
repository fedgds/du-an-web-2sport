<?php 
    function generateCaptcha() {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $captcha = '';
    
        for ($i = 0; $i < 5; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $captcha .= $characters[$index];
        }
        return $captcha;
    }

    //lấy thông tin order_info
    function checkPhone_Order($phoneUser){
        $sql="SELECT * FROM `order_info` WHERE order_info.phoneNumber='$phoneUser'";
        $checkPhone_Order=pdo_query($sql);
        return $checkPhone_Order;
    }
?>