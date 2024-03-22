<?php 
    //model tìm kiếm tài khoản admin
    function search_tk($table,$column1,$column2,$keyword, $id){
        $sql="SELECT * FROM $table WHERE ($column1 LIKE '%$keyword%' OR $column2 LIKE '%$keyword%') AND id <> $id";
        $search_tk=pdo_query($sql);
        return $search_tk;
    }
    //model tìm kiếm sản phẩm admin
    function search_product_admin($keyword){
        $sql="SELECT * FROM product WHERE product.id LIKE '%$keyword%' OR product.name LIKE '%$keyword%' ORDER BY product.id DESC";
        $search_sp=pdo_query($sql);
        return $search_sp;
    }
    //model tìm kiếm danh mục sản phẩm admin
    function search_category_admin($keyword){
        $sql="SELECT * FROM category WHERE category.id LIKE '%$keyword%' OR category.name LIKE '%$keyword%' ORDER BY category.id DESC";
        $search_dm=pdo_query($sql);
        return $search_dm;
    }
    //model tìm kiếm đoan hàng admin
    function search_order($keyword){
        $sql="SELECT * FROM order_info JOIN account ON order_info.idAccount = account.id WHERE order_info.id LIKE '%$keyword%' OR account.username LIKE '%$keyword%' ORDER BY order_info.id DESC";
        $search_dh=pdo_query($sql);
        return $search_dh;
    }
    // tìm kiếm sản phẩm trang chủ user
    // Hàm thực hiện sắp xếp kết quả tìm kiếm
    function search_product($keyw, $orderBy = null){
        // ...
        $sql = "SELECT product.id, product.name, product.img, variants.price, variants.discount
                FROM product 
                JOIN (
                    SELECT idProduct, price, discount, id as idVariant
                    FROM variants
                    GROUP BY idProduct
                ) AS variants ON product.id = variants.idProduct 
                JOIN category ON product.idCategory = category.id 
                WHERE product.name LIKE '%$keyw%'";
    
        // Thêm điều kiện sắp xếp nếu có
        if ($orderBy) {
            $sql .= " ORDER BY $orderBy";
        }
    
        $search_wp = pdo_query($sql);
        return $search_wp;
    }
    

    
?>