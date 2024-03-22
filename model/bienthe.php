<?php 
function list_variant(){
    $sql = "SELECT product_color.color, product_color.id, product_size.size, product_size.id, variants.price, variants.discount, product.name 
    FROM variants 
    JOIN product_color on variants.idColor = product_color.id 
    JOIN product_size on variants.idSize = product_size.id 
    JOIN product on variants.idProduct = product.id;";
    $result = pdo_query($sql);
    return $result;
}
function list_size($id){
    $sql = "SELECT product_color.color, product_color.id as idColor, product_size.size, product_size.id as idSize, variants.price, variants.discount, product.name 
    FROM variants 
    JOIN product_color on variants.idColor = product_color.id 
    JOIN product_size on variants.idSize = product_size.id 
    JOIN product on variants.idProduct = product.id
    where product_size.id = $id";
    $result = pdo_query($sql);
    return $result;
} 
function update_size($id,$size){
    $sql = "UPDATE product_size SET size = '$size' WHERE id = $id";
    pdo_execute($sql);
}

function list_color($id){
    $sql = "SELECT product_color.color, product_color.id as idColor, product_size.size, product_size.id as idSize, variants.price, variants.discount, product.name 
    FROM variants 
    JOIN product_color on variants.idColor = product_color.id 
    JOIN product_size on variants.idSize = product_size.id 
    JOIN product on variants.idProduct = product.id
    where product_color.id = $id";
    $result = pdo_query($sql);
    return $result;
} 
function update_color($id,$color){
    $sql = "UPDATE product_color set color = '$color' where id = $id";
    pdo_execute($sql);
}
function delete_variant($id){
    // Tắt ràng buộc khóa ngoại trước khi xóa sau đó bật lại
    $sql = "SET foreign_key_checks = 0;

    DELETE variants,product_color,product_size
    FROM variants
    LEFT JOIN product_color ON variants.idColor = product_color.id
    LEFT JOIN product_size ON variants.idSize = product_size.id
    WHERE variants.id = '$id';

    SET foreign_key_checks = 1;";

    pdo_execute($sql);;
}
?>