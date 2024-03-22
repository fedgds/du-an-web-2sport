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
                ['Danh mục', 'Doanh thu tháng'],
                <?php
                    foreach ($thongke_dt_follow_month as $tk_month_dt ) {
                        extract($tk_month_dt);
                        echo "['$date', $totalOrder],";
                    }
                ?>

            ]);
            // Set Options
            const options = {
                title: 'BIỂU ĐỒ DOANH THU THEO THÁNG',
                is3D: true,
                colors: ['#BD0000']
            };
            // Draw
            const chart = new google.visualization.ColumnChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <style>
        #header{
            display: none;
        }
    </style>
</head>
<body>
    <div id="piechart_3d" style="width: 100%; height: 400px;"></div>
</body>
</html>


