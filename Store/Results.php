<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="http://localhost:3000/PHP/Programs/Math/Store/Results.css">
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<body>
<?php
$candy = $_GET['candy'];
$toys = $_GET['toy'];
$tech = $_GET['tech'];
$other = $_GET['other'];
$candy_cost = 1.00;
$toys_cost = 2.00;
$tech_cost = 20.00;
$other_cost = 5.00;
$candy_total = $candy*$candy_cost;
$toys_total = $toys*$toys_cost;
$tech_total = $tech*$tech_cost;
$other_total = $other*$other_cost;
$Sub_Total = $candy_total+$toys_total+$tech_total+$other_total;
$Tax = .05;
$Plain_Tax = $Tax*$Sub_Total;
$Total = $Sub_Total+$Plain_Tax;
?>
<div>
<?php
echo ("$".$candy_total." .....In Candy");
echo "<br>";
echo ("$".$toys_total." .....In Toys");
echo "<br>";
echo ("$".$tech_total." .....In Technology");
echo "<br>";
echo ("$".$other_total." .....In Other Stuff");
echo "<br>";
echo ("$".$Sub_Total." .....Is Your Sub-Total");
echo "<br>";
echo ("$".$Plain_Tax." .....Is Your Tax");
echo "<br>";
echo ("$".$Total."<br>Is Your Total For Today");
?>
</div>
<br>
<div>
<button><a href="http://localhost:3000/PHP/Programs/Math/Store/Form.php">Back To Store Form</a></button>
</div>
</body>
</html>