<?php

include_once("functions.php");
include("calculator.php");
echo "<h1 style='padding-top:20px;text-align:center'>Multiplication Table</h1>";
echo "<div style='background-color:#88ff88;'><table style='padding:10px;text-align:center;'>";
echo "<th><tr>";
for ($i = 2; $i <= 10; $i++) {
    echo "<td><h3>" . $i . "</h3></td>";
}
echo "</tr></thead>";
echo "<tbody><tr>";
for ($i = 2; $i <= 10; $i++) {
    mutliplicationTable($i);
}
echo "<tr/></tbody></table></div>";

echo "<div style='background-color:#8888ff'>";
echo "<h1 style='padding-top:20px'>Star Rectangle</h1><div style='padding:20px; border:1px solid black'>";
printStars(20, 8);

echo "</div><div style='background-color:#ff8888'>";
echo "<h1 style='padding-top:20px'>Calculator</h1>";


$N1 = 0;
$N2 = 0;
?>



<form method="post">
    Number 1 :
    <input type="number" name="N1" id="N1" value="<?php echo $N1; ?>" />
    Number 2:
    <input type="number" name="N2" id="N2 value=" <?php echo $N2; ?>" />

    <input type="submit" name="add" value="add" />
    <input type="submit" name="sub" value="sub" />
    <input type="submit" name="mul" value="mul" />
    <input type="submit" name="div" value="div" />
    <input type="submit" name="pow" value="pow" />

</form>
<h1>Result</h1>
<?php
// $CalculatorResult = '';
if (isset($_POST['add'])) {
    echo sum($N1, $N2);
}
if (isset($_POST['sub'])) {
    echo sub($N1, $N2);
}
if (isset($_POST['multiply'])) {

    echo mul($N1, $N2);
}
if (isset($_POST['divide'])) {
    echo div($N1, $N2);
}
if (isset($_POST['power'])) {

    echo power($N1, $N2);
}
echo "</div>";

?>