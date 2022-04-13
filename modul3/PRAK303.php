<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 3 soal 3</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Batas Bawah :<input type="text" name="bawah"></input></br>
        Batas Atas :<input type="text" name="atas"></input></br>
        <input type="submit" name="submit" value="Cetak"></input>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$bawah=$_POST["bawah"];
$atas=$_POST["atas"];
$i = $bawah;
do {
    if (($i+7) % 5 == 0){
        echo "<img src='star.png' width='10px' height='10px'> ";
    }
    else {
    echo "$i ";
    }
    $i++;
} while ($i < $atas+1);
}
?>
