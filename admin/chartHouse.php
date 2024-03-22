<?php
    include "../model/pdo.php";
    include "../model/thongke.php";
    include "../model/taikhoan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Doanh thu'],
                <?php
                    $thongke_doanh_thu_follow_date=thongke_doanh_thu_follow_date();
                    foreach ($thongke_doanh_thu_follow_date as $tk_date_dt ) {
                        extract($tk_date_dt);
                        echo "['$date', $totalOrder],";
                    }
                ?>

            ]);
            // Set Options
            const options = {
                title: 'BIỂU ĐỒ DOANH THU THEO NGÀY',
                is3D: true,
                colors: ['#BD0000']
            };
            // Draw
            const chart = new google.visualization.LineChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart_3d" style="width: 100%; height: 400px;"></div>
</body>
</html>

