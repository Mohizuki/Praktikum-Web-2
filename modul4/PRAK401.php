<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web II Modul 4 soal 1</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

    </style>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">  
        Panjang : <input type="text" name="panjang"</input></br>
        Lebar : <input type="text" name="lebar"></input></br>
        Nilai : <input type="text" name="nilai"></input></br>
        <input type="submit" name="submit" value="Cetak"></input>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
        $nilai = explode(" ", $nilai);
        if($panjang * $lebar == count($nilai)){
            $count = 0;
            for ($i = 0; $i < $panjang; $i++){
                for ($j = 0; $j < $lebar; $j++){
                    $angka[$i][$j] = $nilai[$count];
                    $count++;
                }
            }
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++){
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++){
                    echo "<td>".$angka[$i][$j]."</td>";
                }
                echo "</tr>";
            } echo "</table>";
        }
        if($panjang * $lebar != count($nilai)){
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
            
    }
?>
</body>
</html>