<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="http://localhost:3000/PHP/Programs/Math/Store_2/Results.css">
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<body>
<?php
$candy = $_GET['candy'];
$fruit = $_GET['fruit'];
$toys = $_GET['toy'];
$stuff_animal = $_GET['animal'];
$tech = $_GET['tech'];
$candy_cost = 1.00;
$fruit_cost = 1.00;
$toys_cost = 2.00;
$stuff_animal_cost = 3.00;
$tech_cost = 20.00;
$candy_total = $candy*$candy_cost;
$fruit_total = $fruit*$fruit_cost;
$toys_total = $toys*$toys_cost;
$stuff_animal_total = $stuff_animal*$stuff_animal_cost;
$tech_total = $tech*$tech_cost;
$Sub_Total = $candy_total+$fruit_total+$toys_total+$stuff_animal_total+$tech_total;
$Tax = .05;
$Plain_Tax = $Tax*$Sub_Total;
$Total = $Sub_Total+$Plain_Tax;
?>
<div>
<?php
echo ("$".$candy_total." .....In Candy");
echo "<br>";
echo ("$".$fruit_total." .....In Fruit");
echo "<br>";
echo ("$".$toys_total." .....In Toys");
echo "<br>";
echo ("$".$stuff_animal_total." .....In Stuff Animal");
echo "<br>";
echo ("$".$tech_total." .....In Technology");
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
<button><a href="http://localhost:3000/PHP/Programs/Math/Store_2/Form.php">Back To Store Form</a></button>
</div>
</body>
</html>