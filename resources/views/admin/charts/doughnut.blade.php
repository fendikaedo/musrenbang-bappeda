<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Doughnut Chart Bidang</title>
</head>
<body>
    <div class="card">
        <canvas id="doughnutChart" width="700" height="400"></canvas>
    </div>
</body>

<script>
    $(function() {
        var ctx = document.getElementById("doughnutChart").getContext('2d');
        var doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($chartBidang['labels']),
                datasets: [{
                    label: 'Jumlah usulan bidang',
                    data: @json($chartBidang['data']),
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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



