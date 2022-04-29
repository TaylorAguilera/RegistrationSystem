<p>Available Seats :</p>
<?php
include ("ConfigFile.php");
$sqlC = "SELECT `Group_by` , COUNT( `id` ) AS total FROM `users` GROUP BY `Group_by`";
$resC = mysqli_query($link, $sqlC);
while ($row = $resC->fetch_assoc()) {
if ($resC->num_rows > 0) {
echo $row["Group_by"] .":".$row["total"]."/10 <br />";
}
}
?>