<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #header,#footer{
            display: none;
            box-sizing: border-box;
        }
        #ratingForm{
            margin: 10px 3px;
            max-width: 100%;
            width: 700px;

        }
        .rateWapper{
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: 0;
        }
        #ratingForm h3{
            padding: 10px 0px;
            width: 40%;
            background-color: #BD0000;
            border-radius: 0px 50px 50px 0px;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;
            margin: 10px 0px;
            color: #fff;
            text-align: center;
        }
        .rating {
            float: left;
            display: flex;
            flex-direction: row-reverse;
            /* width: 62%;
            margin: 0 auto; */

        }

        .rating input {
            display: none;
            color: #BD0000;
        }

        .rating label {
            cursor: pointer;
            width: 25px;
            height: 25px;
            background-size: cover;
            font-size: 20px;
            margin: 10px 5px;
        }

        .rating input:checked~label {
            color: #BD0000;
            opacity: 0.9;
        }
        .subRate{
            clear: left;
        }
        .subRate textarea{
            padding-left: 10px;
            padding-top: 10px;
            /* border: 1px solid #d9d9d9; */
            background-color: #fff;
            outline: none;
            border-radius: 10px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        .subRate input{
            background-color: #BD0000;
            padding: 10px 15px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container rateWapper">
        <form id="ratingForm" action="" method="POST">
            <?php 
                foreach ($listProductRate as $listRatePro) {
                    extract($listRatePro);
                    // var_dump($listRatePro);
                    ?>
                <h3>Đánh giá sản phẩm 🌟<br>( <span style="font-size:15px; font-weight:400;font-style:italic;"><?= $name ?></span> )</h3>
            <?php    }

            ?>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5"><label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1">&#9733;</label>
            </div>
            <div class="subRate">
                <textarea id="" cols="80" rows="7" name="contentRate" placeholder="Nhập đánh giá của bạn" required></textarea><br>
                <?php 
                    $idkh=$_SESSION['login']['id'];
                    $id_product=$id;
                    $comPareCheckRateTrue=comPareRate($idkh,$id_product);
                    if (empty($comPareCheckRateTrue)) {
                        echo'<input type="submit" name="rateSubmit" value="Đánh giá">';
                    }else {
                        echo'<input type="submit" name="rateComeBackSubmit" value="Đánh giá lại">';
                    }
                ?>
            </div>
        </form>
        <div>
            <img src="./assets/img/rate-img.svg" alt="ảnh đánh giá">
        </div>
    </div>
</body>

</html>
