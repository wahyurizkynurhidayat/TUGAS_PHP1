<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo</title>
</head>
<body>
<?php
echo 'Kode PHP di sini';
// ...
?>
<p> Dokumen HTML </p>
<?php
echo 'Kode PHP di sini';
// ...
?>
<?php
// Deklarasi dan inisialisasi
$bil = 3;
echo $bil;
?>
<?php
// Deklarasi dan inisialisasi
$bil = 3;
// Dumping informasi mengenai variabel
var_dump($bil);
print_r($bil);
?>
<?php
$bil = 3;
var_dump($bil);
// Output: int(3)
$var = "";
var_dump($var);
// Output: string(0) ""
$var = null;
var_dump($var);
// Output: NULL
?>
<?php
$bil = 3;
var_dump(is_int($bil));
// Output: bool(true)
$var = "";
var_dump(is_string($var));
// Output: bool(true)
?>
<?php
$a = 10;
$b = 5;
if ($a > $b) {
echo 'a lebih besar dari b';
} elseif ($a == $b) {
echo 'a sama dengan b';
} else {
echo 'a kurang dari b';
}
?>

</body>
</html>