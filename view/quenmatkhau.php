<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    if(isset($_POST['restorePass'])){
        $subject = "KHÔI PHỤC MẬT KHẨU CHO TÀI KHOẢN ($email) TẠI 2 SPORT";
        $name = $searchName[0]['name'];
        $body = "
            <h4>👋 Chào <i style='font-size:13px; font-weight:400;' >".$name."</i></h4>
            Khôi phục mật khẩu của bạn đây: http://localhost/Nhom02_WebBanHang_2Sport/index.php?act=restorePass&tokenEmail=".$tokenEmail."
        ";
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'andinhle163@gmail.com';
        $mail->Password = 'dhcfeoiidiifvwmt';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFrom($email, '2 SPORT');
        $mail->addAddress($email);
        $mail->Subject = mb_encode_mimeheader($subject, 'UTF-8');
        $mail->Body = mb_convert_encoding($body , 'HTML-ENTITIES', 'UTF-8');
        $mail->send();
        echo "
        <script>alert('Gửi email khôi phục thành công -> Vui lòng check email 💌');
            window.location.href = 'index.php';
        </script>";
    }
?>

<main class="container form-restore-pass">
    <h2>KHÔI PHỤC MẬT KHẨU</h2>
    <form action="" method="post" class="form-pass">
        <label for="">Nhập Email</label><br>
        <input type="email" name="info_email" placeholder="Vui lòng nhập email " required > 
        <input type="submit" value="Khôi phục" name="restorePass">
    </form>
</main>