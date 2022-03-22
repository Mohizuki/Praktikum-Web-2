<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 2 soal 3</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nilai :<input type="number" name="suhu"></input></br>

        Dari :</br>
        <input type="radio" name="suhuawal" value="Celcius">Celcius</br>
        <input type="radio" name="suhuawal" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="suhuawal" value="Reamur">Reamur</br>
        <input type="radio" name="suhuawal" value="Kelvin">Kelvin</br>

        Ke :</br>
        <input type="radio" name="suhuakhir" value="Celcius">Celcius</br>
        <input type="radio" name="suhuakhir" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="suhuakhir" value="Reamur">Reamur</br>
        <input type="radio" name="suhuakhir" value="Kelvin">Kelvin</br>
        <input type="submit" name="submit" value="Konversi"></input>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $suhu = $_POST['suhu'];
        $suhuawal = $_POST['suhuawal'];
        $suhuakhir = $_POST['suhuakhir'];
        $hasil;
        if ($suhuawal == "Celcius") {
            if ($suhuakhir == "Celcius") {
                $hasil = $suhu;
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            } elseif ($suhuakhir == "Fahrenheit") {
                $hasil = (($suhu * 9/5) + 32);
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;F</h2>";
            } elseif ($suhuakhir == "Reamur") {
                $hasil = ($suhu * 4/5);
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;R</h2>";
            } elseif ($suhuakhir == "Kelvin") {
                $hasil = ($suhu + 273);
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;K</h2>";
            }
        } elseif ($suhuawal == "Fahrenheit") {
            if ($suhuakhir == "Celcius") {
                $hasil = ($suhu - 32) * 5 / 9;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;C</h2>";
            } elseif ($suhuakhir == "Fahrenheit") {
                $hasil = $suhu;
                echo "<h2>Hasil Konversi :" . $hasil . " &deg;F</h2>";
            } elseif ($suhuakhir == "Reamur") {
                $hasil = ($suhu - 32) * 4 / 9;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;R</h2>";
            } elseif ($suhuakhir == "Kelvin") {
                $hasil = ($suhu - 32) * 5/9 + 273;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;K</h2>";
            }
        } elseif ($suhuawal == "Reamur") {
            if ($suhuakhir == "Celcius") {
                $hasil = ($suhu * 5/4);
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;C</h2>";
            } elseif ($suhuakhir == "Fahrenheit") {
                $hasil = (($suhu * 9*4) + 32); 
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;F</h2>";
            } elseif ($suhuakhir == "Reamur") {
                $hasil = $suhu;
                echo "<h2>Hasil Konversi : ". $hasil. " &deg;R</h2>";
            } elseif ($suhuakhir == "Kelvin") {
                $hasil = ($suhu * 5/4) + 273;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;K</h2>";
            }
        } elseif ($suhuawal == "Kelvin") {
            if ($suhuakhir == "Celcius") {
                $hasil = ($suhu - 273);
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;C</h2>";
            } elseif ($suhuakhir == "Fahrenheit") {
                $hasil = 9/5*($suhu  - 273) + 32;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;F</h2>";
            } elseif ($suhuakhir == "Reamur") {
                $hasil = ($suhu - 273) * 4/5;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;R</h2>";
            } elseif ($suhuakhir == "Kelvin") {
                $hasil = $suhu;
                echo "<h2>Hasil Konversi : " . $hasil . " &deg;K</h2>";
            }
        }
    }
    ?>
</body>
</html>