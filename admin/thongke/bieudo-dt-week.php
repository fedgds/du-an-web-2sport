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
                    foreach ($thongke_dt_follow_week as $tk_week_dt ) {
                        extract($tk_week_dt);
                        echo "['$date', $totalOrder],";
                    }
                ?>
            ]);
            // Set Options
            const options = {
                title: 'BIỂU ĐỒ DOANH THU THEO TUẦN',
                is3D: true,
                colors: ['#BD0000']
            };
            // Draw
            const chart = new google.visualization.ColumnChart(document.getElementById('piechart_4d'));
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
    <div id="piechart_4d" style="width: 100%; height: 400px;"></div>
</body>
</html>