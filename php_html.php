<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Loop While</title>
    </head>

    <body>
    <p>1.Tampilkan Perulangan Bilangan Gelap dari 100-0</p>
    <?php
    $i = 100;
    while ($i >=0){
        echo "$i";
        echo " ,";
        $i-=2;
    }
    ?>
    <p>2.Tampilkan Bilangan Yang Mempunyai Angka 8, Bilangan Maksimal 100</p>
    <?php
    for($i=8; $i <= 100; $i=$i+10){
        echo $i;
        echo ",";
    } ?>
</body>
</html>