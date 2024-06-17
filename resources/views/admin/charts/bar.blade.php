<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Bar Chart Kecamatan</title>
</head>
<body>
    <canvas id="barChart" width="700" height="400"></canvas>
</body>
<script>
    $(function() {
        var ctx = document.getElementById("barChart").getContext('2d');
        var doughnutChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartKecamatan['labels']),
                datasets: [{
                    label: 'Jumlah usulan setiap kecamatan',
                    data: @json($chartKecamatan['data']),
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>
</html>

