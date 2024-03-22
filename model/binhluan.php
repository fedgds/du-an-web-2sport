<?php
function load_comment($idsp){
    $sql = "SELECT comment.text, comment.date, account.username 
            from comment
            join account on comment.idAccount = account.id
            join product on comment.idProduct = product.id
            where product.id = $idsp";
    $result = pdo_query($sql);
    return $result;
}

function load_all_comment($page, $perPage){
    $sql = "SELECT comment.id, comment.text, comment.date, account.username, product.name
            from comment
            join account on comment.idAccount = account.id
            join product on comment.idProduct = product.id
            order by date desc";
    $result = pdo_paginate($sql, $page, $perPage);
    return $result;
}
function delete_comment($id){
    $sql = "DELETE from comment where id = $id";
    pdo_execute($sql);
  }
function insert_comment($idProduct, $text,$idAccount){
    $date = date('Y-m-d');
    $sql = "INSERT INTO `comment`(`text`, `idAccount`, `idproduct`, `date`) VALUES ('$text','$idAccount','$idProduct','$date');";
    pdo_execute($sql);
}

?>