<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
</script>
<script src="vendor/chart.js/Chart.min.js"></script>
<?php
include("database.php");
$db= $conn;
$tableName="book_data";
$columns= ['bk_ID', 'bk_ISBN','name','bk_author','bk_trans', 'bk_intro', 'bk_public','bk_publicdate','bk_type','bk_img','bk_adddate','apply_date','apply_status','apply_applicant'];
$fetchData = fetch_data($db, $tableName, $columns);
$BookTypeLabels = fetch_labels($db, $columns, $tableName);
 function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}
else{
$columnName = implode(", ", $columns);
$query = "SELECT count(*) FROM book_data WHERE apply_status = 1 GROUP by bk_type ORDER BY count(*) DESC;";;
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $CountByBookCat = array_fill(0, 15, 0);
    $rowcount = 0;
    while(isset($row[$rowcount]["count(*)"])){
        $rowcount ++;
    }
    for($i = 0; $i < $rowcount; $i++){
      $CountByBookCat[$i] = $row[$i]["count(*)"];
    }
    //echo print_r($CountByBookCat);
    //echo print_r($row);
    $msg = $CountByBookCat;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
function fetch_labels($db, $columns, $tableName){
  if(empty($db)){
   $msg= "Database connection error";
  }elseif (empty($columns) || !is_array($columns)) {
   $msg="columns Name must be defined in an indexed array";
  }elseif(empty($tableName)){
    $msg= "Table Name is empty";
 }
 else{
 $query = "SELECT bk_type FROM book_data WHERE apply_status = 1 GROUP by bk_type ORDER BY count(*) DESC;";;
 $result = $db->query($query);
 
 if($result== true){ 
  if ($result->num_rows > 0) {
     $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
     $i = 0;
     while(isset($row[$i]['bk_type'])){
        $msg[$i] = $row[$i]['bk_type'];
        $i++;
     }
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
$count = 0;
while(isset($fetchData[$i])){
  $count += $fetchData[$i];
  $i ++;
}
//echo $count;
//echo print_r($BookTypeLabels);
?>

<script>
// Pie Chart Example
//setup block
console.log(<?php echo json_encode($fetchData); ?>);
console.log(<?php echo json_encode($BookTypeLabels); ?>);
const CountByBookCat = <?php echo json_encode($fetchData); ?>;
const cat = <?php echo json_encode($BookTypeLabels); ?>;
var ctx = document.getElementById("myPieChart");
var dynamicColors = function() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
         };
var coloR = [];
var coloR2 = [];
var nums = CountByBookCat;
var categories = cat;
for (var i in nums) {
            coloR.push(dynamicColors());
            coloR2.push(dynamicColors());
         }
const data ={
  labels: categories,
    datasets: [{
      data: nums,
      backgroundColor: coloR,
      hoverBackgroundColor: coloR2,
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  };
//config block
const config = {
  type: 'doughnut',
  data,
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
};
//render block
const myPieChart = new Chart(
  document.getElementById('myPieChart'),
  config
);
//var myPieChart = new Chart(ctx, {
  
//});
</script>