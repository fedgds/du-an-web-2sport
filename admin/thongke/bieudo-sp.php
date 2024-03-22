<?php
include "../../model/pdo.php";
include "../../model/thongke.php";
$thongkesp = load_thongke_sanpham_danhmuc();
?>
<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div
        id="myChart" style="width:100%; max-width:600px; height:500px; align-items: center;">
    </div>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng'],
            <?php
              foreach($thongkesp as $thongke){
                extract($thongke);
                echo "['$category_name', $variant_count],";
              }
            ?>
          ]);
          const options = {
            title:'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
            is3D:true
          };
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>
</body> 
</html>



