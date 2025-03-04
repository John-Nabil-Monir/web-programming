<!-- exe 1:- -->
<?php
$x = 10;
$y = 7;

echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br>";
?>
<!-- ----------------------------------------------- -->
<!-- exe 2:- -->
 <?php
 $month = date('F', time());

 if ($month == "August") {
     echo "It's August, so it's really hot.";
 } else {
     echo "Not August, so at least not in the peak of the heat.";
 }
 ?>
<!-- ----------------------------------------------- -->
<!-- exe 3:- -->
<?php
for ($i = 1; $i <= 12; $i++) {
    echo "$i * $i = " . ($i * $i) . "<br>";
}
?>
<!-- ----------------------------------------------- -->
<!-- exe 4:- -->
<?php
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>