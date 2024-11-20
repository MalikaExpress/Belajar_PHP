<?php
$array = array();
?>

<?php
$array = [];
?>

<?php
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
echo '<pre>';
print_r($array);
?>

<?php
$array = ['One', 'Two', 'Three'];
?>

<?php
$array = ['One', 'Two', 'Three'];
 
// get the first element of the $array array
echo $array[0];
echo "<br>";
 
// get the second element of the $array array
echo $array[1];
echo "<br>";
 
// get the third element of the $array array
echo $array[2];
echo "<br>";
?>

<?php
$array = ['One', 'Two', 'Three'];
foreach ($array as $element) {
echo $element;
echo '<br>';
}
?>
 <?php
$array = ['One', 'Two', 'Three'];
$array_length = count($array);
 
for ($i = 0; $i < $array_length; ++$i) {
echo $array[$i];
echo '<br>';
}
?>

