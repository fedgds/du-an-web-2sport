<?php
  session_start();
  include "../model/pdo.php";
  include '../model/binhluan.php';
    

    $idsp = isset($_GET['id']) ? $_GET['id'] : null;
    if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
        $iduser = $_POST['iduser'];
        $name = $_POST['user'];
        $idsp = $_POST['idsp'];
        $noidung = $_POST['noidung'];
        insert_comment($idsp, $noidung,$iduser);
    } 
    $dsbl = load_comment($idsp);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .binhluan{
            width: 100%;
        }
        .binhluan table{
            width: 100%; 
            border-left: 1px solid #D70019;
            border-right: 1px solid #D70019;
            border-bottom: 1px solid #D70019;
            margin-bottom: 10px;
        }

        .binhluan table tr{
            display: grid;
            width: 100%;
            grid-template-columns: 1fr 6fr 1fr;
            margin-bottom: 5px;
        }
        textarea{
            width: 100%;
        }
        form{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        textarea{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input[type="submit"]{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #D70019;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }
        input[type="submit"]:hover{
            background-color: black;
        }
        .name, .date{
            text-align: center;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="row mb"> 
        <div class="binhluan">
            <table style="text-align:center;">
                <tr>
                    <th>Khách hàng</th>
                    <th>Nội dung bình luận</th>
                    <th>Ngày binh luận</th>
                </tr>
                <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td class="name">'.$username.'</td>';
                        echo '<td>'.$text.'</td>';
                        echo '<td class="date">'.date("d/m/Y", strtotime($date)).'</td></tr>';
                    }
                ?>  
            </table>
        </div> 
    <?php if(isset($_SESSION['login'])){ ?>
        <div class="form">
            <form action="binhluan-form.php" method="post">
                <input type="hidden" name="iduser" value="<?=$_SESSION['login']['id']?>">
                <input type="hidden" name="user" value="<?=$_SESSION['login']['username']?>">
                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                <textarea name="noidung" id="" cols="10" rows="5"></textarea><br>
                <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
            </form>
        </div> 
    <?php
    } else{
        echo '<p style="color: red;">Đăng nhập để thực hiện chức năng bình luận</p>';
    }
    ?> 
    </div>
</body>
</html>