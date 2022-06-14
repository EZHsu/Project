<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
</script>
<?php
include("database.php");
$db= $conn;
$tableName="trade";
$columns= ['trade_id', 'trade_bookname','trade_date','trade_lend','trade_borrow', 'trade_level','comment_times','trade_returndate'];
$fetchData5 = fetch_data5($db, $tableName, $columns);
$fetchData6 = fetch_data6($db, $tableName, $columns);
$fetchData7 = fetch_data7($db, "book_data", ['name', 'bk_type']);

function fetch_data5($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}
else{
$query = "SELECT count(*) FROM trade WHERE trade_date>= date_sub(curdate(), interval 1 month) group by trade_bookname ORDER BY count(*) DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg = array_fill(0, 10, 0);
    //echo print_r($row);
    $i = 0;
    while(isset($row[$i]['count(*)'])){
      $msg[$i] = $row[$i]['count(*)'];
      $i++;
    }
    //echo print_r($msg);
    //echo "||";
    //echo print_r($row);
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
function fetch_data6($db, $tableName, $columns){
  if(empty($db)){
   $msg= "Database connection error";
  }elseif (empty($columns) || !is_array($columns)) {
   $msg="columns Name must be defined in an indexed array";
  }elseif(empty($tableName)){
    $msg= "Table Name is empty";
 }
 else{
 $query = "SELECT trade_bookname FROM trade WHERE trade_date>= date_sub(curdate(), interval 1 month) group by trade_bookname ORDER BY count(*) DESC";
 $result = $db->query($query);
 
 if($result== true){ 
  if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg = array_fill(0, 10, "NULL");
    $i = 0;
    while(isset($row[$i]['trade_bookname'])){
      $msg[$i] = $row[$i]['trade_bookname'];
      $i++;
    }
    //echo print_r($msg);
    //echo "||";
    //echo print_r($row);
  } else {
     $msg= "No Data Found"; 
  }
 }else{
   $msg= mysqli_error($db);
 }
 }
 return $msg;
 }
 function fetch_data7($db, $tableName, $columns){
  if(empty($db)){
   $msg= "Database connection error";
  }elseif (empty($columns) || !is_array($columns)) {
   $msg="columns Name must be defined in an indexed array";
  }elseif(empty($tableName)){
    $msg= "Table Name is empty";
 }
 else{
$columnName = implode(", ", $columns);
 $query = "SELECT ".$columnName." FROM $tableName";
 $result = $db->query($query);
 
 if($result== true){ 
  if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg = array_fill(0, 10, "NULL");
    $msg = $row;
    //echo print_r($msg);
    //echo "||";
    //echo print_r($row);
  } else {
     $msg= "No Data Found"; 
  }
 }else{
   $msg= mysqli_error($db);
 }
 }
 return $msg;
 }

 $i = 0;

 //echo $fetchData7[0]['name'];
 $newData = array(
    array('count' => 0,'bk_type' => NULL)
 );
 while(isset($fetchData6[$i])){
  $j = 0;
  while(isset($fetchData7[$j])){
    if($fetchData6[$i] == $fetchData7[$j]['name']){
      $fetchData7[$j]['borrowCount']=$fetchData5[$i];
    }
    $j++;
  }
  $i++;
 }
//echo print_r($fetchData7);
//echo "||";
$i = 0;
while(isset($fetchData7[$i])){
  $j = 0;
  if(isset($fetchData7[$i]['borrowCount'])){
    while(isset($newData[$j])){
      if($fetchData7[$i]['bk_type'] == $newData[$j]['bk_type']){
        $newData[$j]['count'] += $fetchData7[$i]['borrowCount'];
        break;
      }
      if(isset($newData[$j+1]) == FALSE ){
        $newData[$j+1]['bk_type'] = $fetchData7[$i]['bk_type'];
        $newData[$j+1]['count'] = 0;
        $newData[$j+1]['count'] += $fetchData7[$i]['borrowCount'];
        break;
      }
      $j++;
    }
  }
  $i++;
}
function sortByOrder($a, $b) {
  if($a['count'] == $b['count']) return 0;
  else if($a['count'] > $b['count']) return -1;
  else return 1;
}
usort($newData, 'sortByOrder');
//echo print_r($newData);
$i = 0;
$Data = array_fill(0, 10, 0);
$Labels = array_fill(0, 10, NULL);
$count = 0;
while(isset($newData[$i])){
  $Data[$i] = $newData[$i]['count'];
  $Labels[$i] = $newData[$i]['bk_type'];
  $count += $Data[$i];
  $i ++;
}
//echo print_r($newData);
$Data[$i-1] = NULL;
$Labels[$i-1] = NULL;
if($Labels[0] == NULL){
  $Labels = "No Data Found";
} 
//echo print_r($Data);
//echo print_r($Labels);
?>
<script>
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

// Bar Chart Example
console.log(<?php echo json_encode($Data); ?>);
console.log(<?php echo json_encode($Labels); ?>);
const RankPoints2 = <?php echo json_encode($Data); ?>;
const RankNames2 = <?php echo json_encode($Labels); ?>;
const sum = <?php echo $count ?>;
var rankers = RankNames2;
var score = RankPoints2;
const data4 = {
    labels: rankers,
    datasets: [{
      label: "出借次數:",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: score,
    }],
}
//config block
const config4 = {
  type: 'bar',
  data: data4,
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
        gridLines: {
          display: false,
          drawBorder: false
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return   number_format(value);
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
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + number_format(tooltipItem.yLabel) + "次"+ "\n"+ number_format(tooltipItem.yLabel)/sum * 100 + "%";
        }
      }
    },
  }
}
//render block
const myBarChart2 = new Chart(
  document.getElementById('myBarChart2'),
  config4
);
</script>