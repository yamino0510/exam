<!DOCTYPE html>
<html>
<head>
    <title>Equity Curve</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<h2>Equity Curve</h2>
<canvas id="equityChart" width="900" height="400"></canvas>

<script>
    const labels = <?php echo json_encode($dates); ?>;
    const equityData = <?php echo json_encode($equities); ?>;

    const ctx = document.getElementById('equityChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Equity Curve',
                data: equityData,
                borderWidth: 2,
                fill: false,
                borderColor: 'orange',
                tension: 0.3,
            }]
        },
        options: {
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Date'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Equity'
                    }
                }
            }
        }
    });
</script>

</body>
</html>
<?php /**PATH C:\Users\chinweihong\Herd\ca_exam_question-master\resources\views/equity_curve.blade.php ENDPATH**/ ?>