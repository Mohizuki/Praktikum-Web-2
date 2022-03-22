<?php
    $pesanErrorNama = $pesanErrorNIM = $pesanErrorKelamin = "";
    $nama = "";
    $nim = "";
    $kelamin = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $pesanErrorNama = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $pesanErrorNIM = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["kelamin"])) {
            $pesanErrorKelamin = "Jenis kelamin tidak boleh kosong";
        } else {
            $kelamin = $_POST["kelamin"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .error{
        color: #FF0000;
    }
    </style>
    <title>Praktikum Web II Modul 2 soal 2</title>
</head>
<body>
    <form form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    Nama: <input type="text" name="nama" value="<?php $nama ?>"><span class="error">* <?php echo $pesanErrorNama ?> </span><br>
    NIM: <input type="text" name="nim" value="<?php $nim ?>"><span class="error">* <?php echo $pesanErrorNIM ?> </span><br>
    Jenis Kelamin: <span class="error">* <?php $pesanErrorkelamin ?> </span><br>

    <input type="radio" name="kelamin" value="Laki-laki" <?php if (isset($_POST["kelamin"]) && $_POST["kelamin"] == "Laki-laki") echo "checked";?>> Laki-Laki<br>
    <input type="radio" name="kelamin" value="Perempuan" <?php if (isset($_POST["kelamin"]) && $_POST["kelamin"] == "Perempuan") echo "checked";?>> Perempuan<br>
    <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>

<?php
    if($nama && $nim && $kelamin != null){
        echo ($nama)."<br>";
        echo ($nim)."<br>";
        echo ($kelamin);
    }
?>