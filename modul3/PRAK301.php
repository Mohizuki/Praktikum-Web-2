<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 3 soal 1</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Jumlah Peserta :<input type="text" name="nilai"></input></br>
        <input type="submit" name="submit" value="Cetak"></input>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai=$_POST["nilai"];
        $i = 1;
        while($i<$nilai+1){
            if($i%2==0){
                echo "<font color='green'> Peserta ke-$i<br><font>";
            }
            else {
                echo "<font color='red'> Peserta ke-$i<br><font>";
            }
            $i++;
        }
    }


?>
