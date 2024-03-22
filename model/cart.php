
<?php
    function search_quantily($id_variant,$idkh){
        $sql="SELECT quantity + 1  AS total_quantity
        FROM cart
        WHERE idVariant = $id_variant AND `idAccount`= $idkh";
        $search_quantily=pdo_query($sql);
        return $search_quantily;
    }
    function search_quantily_chitiet($id_variant,$quantity,$idkh){
        $sql="SELECT quantity + $quantity AS total_quantity
        FROM cart
        WHERE idVariant = $id_variant AND `idAccount`= $idkh";
        $search_quantily_chitiet=pdo_query($sql);
        return $search_quantily_chitiet;
    }
    function update_quantily($total_quantity,$id_variant,$idkh){
        $sql="UPDATE `cart` SET `quantity` = $total_quantity  WHERE `idVariant`= $id_variant AND `idAccount`= $idkh" ;
        pdo_execute($sql);
    }

    function addcart($nameSp,$priceSp,$imgSp,$idkh,$id_variant){
        $sql="INSERT INTO `cart`(`name`,`price`, `img`, `idAccount`, `idVariant`) VALUES ('$nameSp','$priceSp','$imgSp','$idkh','$id_variant')";
        pdo_execute($sql);
    }
    function addcart_quantity($nameSp,$priceSp,$imgSp, $quantity,$idkh,$id_variant){
        $sql="INSERT INTO `cart`(`name`,`price`, `img`, `quantity`, `idAccount`, `idVariant`) VALUES ('$nameSp','$priceSp','$imgSp', '$quantity', '$idkh','$id_variant')";
        pdo_execute($sql);
    }

    //show giỏ hàng 
    function showcart($idkh){
        $sql="SELECT
        cart.id AS cart_id,
        cart.quantity,
        product.id AS product_id,
        product.name AS product_name,
        product.img AS product_img,
        variants.id AS variant_id,
        variants.price AS variant_price,
        variants.discount AS variant_discount,
        variants.quantity AS variant_quantity,
        product_size.size,
        product_color.color
    FROM
        cart
    JOIN
        variants ON cart.idVariant = variants.id
    JOIN
        product ON variants.idProduct = product.id
    JOIN
        product_size ON variants.idSize = product_size.id
    JOIN
        product_color ON variants.idColor = product_color.id
    WHERE
        cart.idAccount = $idkh;";
        $showcart=pdo_query($sql);
        return $showcart;

    }
    
    //xoá giỏ hàng
    function deletecart($id){
        $sql="DELETE FROM `cart` WHERE `cart`.`id`=$id";
        pdo_execute($sql);
    }

   

?>