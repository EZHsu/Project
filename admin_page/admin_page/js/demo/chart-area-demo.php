<?php
include("database.php");
$db= $conn;
$tableName="customer_service";
$columns= ['service_id', 'service_name','service_email','service_title','service_content', 'service_end'];
$fetchData4 = fetch_data4($db, $tableName, $columns);

function fetch_data4($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}
else{
$columnName = implode(", ", $columns);
$query = "select date_format(trade_date, '%M %Y'),COUNT(*) from trade group by date_format(trade_date, '%M %Y')";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
  $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
  $msg = array_fill(0, 12, 0);
  $i = 0;
  while(isset($row[$i]["date_format(trade_date, '%M %Y')"])){
    if($row[$i]["date_format(trade_date, '%M %Y')"] == "January 2022"){
      $msg[0] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "February 2022"){
      $msg[1] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "March 2022"){
      $msg[2] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "April 2022"){
      $msg[3] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "May 2022"){
      $msg[4] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "June 2022"){
      $msg[5] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "July 2022"){
      $msg[6] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "August 2022"){
      $msg[7] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "September 2022"){
      $msg[8] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "October 2022"){
      $msg[9] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "November 2022"){
      $msg[10] = $row[$i]["COUNT(*)"];
    }
    else if($row[$i]["date_format(trade_date, '%M %Y')"] == "December 2022"){
      $msg[11] = $row[$i]["COUNT(*)"];
    }
    $i++;
  }
  //echo $row[1]["date_format(trade_date, '%M')"];
  //echo "||";
  //echo print_r($msg);
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}
console.log(<?php echo json_encode($fetchData4); ?>);
const Amount = <?php echo json_encode($fetchData4); ?>;
// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var data3 = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "借閱數量",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: Amount,
    }],
  }
  var config3 = {
  type: 'line',
  data: data3,
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + number_format(tooltipItem.yLabel) + "冊";
        }
      }
    }
  }
}
var myLineChart = new Chart(ctx, config3);
</script>