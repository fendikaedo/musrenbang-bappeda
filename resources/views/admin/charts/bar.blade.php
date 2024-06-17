
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="barChart" width="700" height="400"></canvas>
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

