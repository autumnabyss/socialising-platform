<?php

include('connect.php');//連結資料庫

$username="z";
$sql="SELECT * FROM other_info WHERE keyusername = '$username'";
$result = mysqli_query($con,$sql);
//echo "<table border=1>";
//echo "<tr><td>欄位名稱</td><td>資料表</td>";
//echo "<td>最大長度</td><td>資料類型</td></tr>";
$total_fields = mysqli_num_fields($result);
$total_records = mysqli_num_rows($result);

echo "<table border=1>";
while ($row = mysqli_fetch_row($result)) {
   echo "<tr>";
   for ( $i = 0;  $i <= $total_fields-1; $i++ )
       echo "<td>" . $row[$i] .  "</td>";   
   echo "</tr>";
}
echo "</table>";
?>