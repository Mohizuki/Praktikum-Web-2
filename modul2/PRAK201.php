<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web II Modul 2 soal 1</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nama: 1 <input type="text" name="nama[]" placeholder="Masukkan Nama"><br>
        Nama: 2 <input type="text" name="nama[]" placeholder="Masukkan Nama"><br>
        Nama: 3 <input type="text" name="nama[]" placeholder="Masukkan Nama"><br>
        <input type="submit" value="Urutkan">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $daftar=$_POST["nama"];
        for ($i=0; $i<3; $i++){
            for ($j=$i+1; $j<3; $j++){
                if($daftar[$i] > $daftar[$j]){
                    $daftarawal = $daftar[$i];
                    $daftar[$i] = $daftar[$j];
                    $daftar[$j] = $daftarawal;
                }
            }       
        }
        foreach ($daftar as $daftar => $daftarr) {
            echo "$daftarr <br>";
        }
    }

?>
