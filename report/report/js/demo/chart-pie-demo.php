// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

<script src="vendor/chart.js/Chart.min.js"></script>

// Pie Chart Example
<script>
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["文學小說", "商業理財", "人文史地","心理勵志","其他"],
    datasets: [{
      data: [23, 32, 10,20,15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#8080c0','#ae57a4'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#5a5aad','#8f4586'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>