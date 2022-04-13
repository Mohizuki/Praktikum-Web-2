<?php
$jumlahBintang = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['jumlahBintang'])) {
        $jumlahBintang = $_POST['jumlahBintang'];
    }
}

if (isset($_POST['tambah'])){
    $jumlahBintang++;
}
if(isset($_POST['kurang'])){
    $jumlahBintang--;
}

function janganClear($temp){
    if(isset($_POST[$temp]) && $_POST[$temp]!=""){
        echo " value='".$_POST[$temp]."'";
    }
}
?>
<?php
for($i = 0; $i < $jumlahBintang; $i++){
      echo "<img src='star.png' width='150px' height='150px'>";
}
?>

<?php if($jumlahBintang == 0): ?>
<form method = "POST" action = "">
    Jumlah Bintang <input type = "number" name = "jumlahBintang" <?php janganClear('jumlahBintang')?>><br>
    <button type = "submit">Submit</button><br>
</form>
<?php endif; if($jumlahBintang != 0):?>
    <form action="" method="POST">
        <button name="tambah">Tambah</button>
        <input type='hidden' name='jumlahBintang' value='<?= $jumlahBintang; ?>'/>
        <button name="kurang">Kurang</button>
    </form>
<?php endif;?>