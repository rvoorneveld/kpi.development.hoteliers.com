<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KPI's Development</title>
    </head>
    <body>
        <canvas id="chart" width="300" height="150"></canvas>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                var myChart = new Chart(document.getElementById('chart').getContext('2d'), {
                    type: 'line',
                    fill: false,
                    data: {
                        labels: [
                            '2017 Q1',
                            '2017 Q2',
                            '2017 Q3',
                            '2017 Q4',
                            '2018 Q1',
                            '2018 Q2',
                            '2018 Q3',
                            '2018 Q4',
                        ],
                        datasets: [{
                            label: 'Burndown',
                            data: [
                                70,
                                61,
                                67,
                                58,
                                63,
                                69,
                                84,
                                84,
                            ],
                            yAxisID: 'y-axis-1',
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                            ],
                            borderWidth: 2,
                        },{
                            label: 'Unplanned',
                            data: [
                                26,
                                24,
                                15,
                                13,
                                13,
                                8,
                                8,
                                8,
                            ],
                            yAxisID: 'y-axis-2',
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)',
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                            ],
                            borderWidth: 2,
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "KPI's Development",
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                    max: 100,
                                },
                                display: true,
                                position: 'left',
                                id: 'y-axis-1',
                            }, {
                                display: true,
                                position: 'right',
                                id: 'y-axis-2',
                                ticks: {
                                    min: 0,
                                    max: 100,
                                },
                            }],
                        },
                    }
                });
            });
        </script>
    </body>
</html>
