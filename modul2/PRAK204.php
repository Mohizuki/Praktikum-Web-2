<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 2 soal 4</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nilai : <input type="number" name="nilai"></input></br>
        <input type="submit" name="submit" value="Konversi"></input>
    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $nilai = $_POST["nilai"];
    if ($nilai == 0){
        echo "<h2>Hasil: Nol<h2>";
    } elseif ($nilai > 0 && $nilai < 10) {
        echo "<h2>Hasil: Satuan<h2>";
    } elseif ($nilai >= 11 && $nilai < 20) {
        echo "<h2>Hasil: Belasan<h2>";
    } elseif (($nilai >= 10 && $nilai < 100) || $nilai == 10) {
        echo "<h2>Hasil: Puluhan<h2>";
    } elseif ($nilai >= 100 && $nilai < 1000) {
        echo "<h2>Hasil: Ratusan<h2>";
    } elseif ($nilai >= 1000) {
        echo "<h2>Anda Menginput Melebihi Limit Bilangan<h2>";
    }
}
?>