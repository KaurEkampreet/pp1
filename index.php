<?php
/** Ekampreet Kaur
 * 1/6/2020
 * http://ekaur.greenriverdev.com/328/pp1/index.php
 * Pair Program 1
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<title>Pair Program 1</title>
<h1>Pair Program 1 </h1>
<?php
$numbers = array(7,9,8,9,8,8,6);

printArr($numbers);



echo "<p>The largest is ".largest($numbers)."</p>";
echo "<p>The array without duplicates is "."</p>";

echo"<p>".printArr(removeDups($numbers))."</p>";













