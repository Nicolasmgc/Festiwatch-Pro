<?php 

include '../../Controller/database.php';
global $db;


$query3 = $db->prepare("SELECT 
time as time,
son_db as amount
FROM capteursonore
WHERE Montre_code = :Montre_code
GROUP BY time
");

$query3->execute([
    'Montre_code' => 3
]);

foreach($query3 as $data3)
{
$time3[] = $data3['time'];
$amount3[] = $data3['amount'];
}

?>

<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="canva">
    <canvas id="myChart3"></canvas>
</div>

<script>
// === include 'setup' then 'config' above ===
const labels3 = <?php echo json_encode($time3) ?>;
const data3 = {
    labels: labels3,
    datasets: [{
    label: 'Amplitude sonore',
    data: <?php echo json_encode($amount3) ?>,
    backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
    ],
    borderWidth: 1
    }]
};

const config3 = {
    type: 'line',
    data: data3,
    
    options: {
    scales: {
        y: {
        beginAtZero: true
        }
    }

    },
};

var myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
);
</script>