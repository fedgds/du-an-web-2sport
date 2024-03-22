<?php 

function load_thongke_sanpham_danhmuc(){
    $sql = "SELECT
                c.id AS category_id,
                c.name AS category_name,
                COUNT(v.id) AS variant_count,
                MIN(v.discount) AS min_price,
                MAX(v.discount) AS max_price,
                AVG(v.discount) AS avg_price
            FROM
                category c
            JOIN
                product p ON c.id = p.idCategory
            JOIN
                variants v ON p.id = v.idProduct
            GROUP BY
                c.id, c.name order by variant_count desc;";
    return pdo_query($sql);
}
    function thongke_doanh_thu(){
        $sql="SELECT category.id,category.name, order_info.status,SUM(order_detail.quantity)AS soluongdh,SUM(order_detail.price * order_detail.quantity) AS tongtien FROM category INNER JOIN product ON category.id=product.idCategory INNER JOIN order_detail ON order_detail.idProduct=product.id INNER JOIN order_info ON order_detail.idOrder=order_info.id WHERE order_info.status=3 GROUP BY category.id";
        $thongke_dt=pdo_query($sql);
        return $thongke_dt;
    }
    // thống kê doanh thu theo ngày
    function thongke_doanh_thu_follow_date(){
        $sql="SELECT order_info.date, order_info.status,SUM(order_detail.price*order_detail.quantity) AS totalOrder FROM `order_info` INNER JOIN order_detail ON order_info.id=order_detail.idOrder WHERE order_info.status=3 GROUP BY date(order_info.date)";
        $thongke_dt_follow_date=pdo_query($sql);
        return $thongke_dt_follow_date;
    }
    // thống kê doanh thu theo tuần
    function thongke_doanh_thu_follow_week(){
        $sql="SELECT order_info.date, order_info.status,SUM(order_detail.price*order_detail.quantity) AS totalOrder FROM `order_info` INNER JOIN order_detail ON order_info.id=order_detail.idOrder WHERE order_info.status=3 GROUP BY WEEK(order_info.date)";
        $thongke_dt_follow_week=pdo_query($sql);
        return $thongke_dt_follow_week;
    }
        // thống kê doanh thu theo ngày
        function thongke_doanh_thu_follow_month(){
            $sql="SELECT order_info.date, order_info.status,SUM(order_detail.price*order_detail.quantity) AS totalOrder FROM `order_info` INNER JOIN order_detail ON order_info.id=order_detail.idOrder WHERE order_info.status=3 GROUP BY MONTH(order_info.date)";
            $thongke_dt_follow_month=pdo_query($sql);
            return $thongke_dt_follow_month;
        }

?>