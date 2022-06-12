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
$query = "SELECT count(*) FROM book_data GROUP by bk_type;";;
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
?>

<script>
// Pie Chart Example
//setup block
console.log(<?php echo json_encode($fetchData); ?>);
const CountByBookCat = <?php echo json_encode($fetchData); ?>;
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
for (var i in nums) {
            coloR.push(dynamicColors());
            coloR2.push(dynamicColors());
         }
const data ={
  labels: ["人生史地", "大專院校教科書", "文學小說","生活與旅遊","考試用書","社會科學","兒童圖書","科學與科普","商業與經濟","電腦科學","圖文書","語言","漫畫","藝術與設計","醫學"],
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