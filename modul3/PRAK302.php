<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 3 soal 2</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Tinggi :<input type="text" name="nilai"></input></br>
        Alamat Gambar :<input type="text" name="link"></input></br>
        <input type="submit" name="submit" value="Cetak"></input>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num=$_POST["nilai"];
$link=$_POST["link"];
    $i = 0;
    while ($i <= $num) {
        $j = 0;
        while ($j < $i){ 
            echo "&nbsp;&nbsp;";
            $j++;
            }
            $j = 0;
            while ($j<$num-$i) {
                echo "<img src='$link' width='10px' height='10px'>";
                $j++;
            }
            $i++;
            echo "</br>";
            }
        }
?>