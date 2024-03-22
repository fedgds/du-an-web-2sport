<?php
function insert_category($name, $hinh){
    $sql = "INSERT INTO category (name, img) values ('$name', '$hinh')";
    pdo_execute($sql);
}
function update_category($id, $name, $hinh){
    if($hinh != ""){
        $sql = "UPDATE category set name = '$name', img = '$hinh' where id = '$id'";
    }else{
        $sql = "UPDATE category set name = '$name' where id = '$id'";
    }
    pdo_execute($sql);
}
function list_category(){
    $sql = "SELECT * from category order by id";
    $listCate = pdo_query($sql);
    return $listCate;
}
function check_category($id){
    $sql = "SELECT COUNT(product.id) as product_count FROM category LEFT JOIN product ON category.id = product.idCategory WHERE category.id = $id GROUP BY category.id";
    $result = pdo_query_one($sql);

    if ($result && $result['product_count'] > 1) {
        return true; // Đã có nhiều hơn 1 sản phẩm
    } else {
        return false; // Hoặc không có sản phẩm hoặc chỉ có 1 sản phẩm
    }
}

function list_category_home(){
    $sql = "SELECT * from category order by id ";
    $listCate = pdo_query($sql);
    return $listCate;
}
function loadone_category($id){
    $sql = "SELECT * from category where id='$id'";
    $result = pdo_query_one($sql);
    return $result;
}
function delete_category($id){
    $sql = "DELETE from category where id = $id";
    pdo_execute($sql);
}
function join_sp_dm(){
    $sql = "SELECT * FROM category order by id desc";
    $dssp=pdo_query($sql);
    return $dssp;
}
function join_product_iddm($id){
    $sql="SELECT * FROM `product` WHERE id = $id";
    $join_product_iddm=pdo_query($sql);
    return $join_product_iddm;
}
?>