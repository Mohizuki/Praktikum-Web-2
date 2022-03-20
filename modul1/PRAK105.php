<!--PHP duluan karena ga kebaca-->
<?php
$listhp = ['HP1'=>'Samsung Galaxy S22','HP2'=>'Samsung Galaxy S22+','HP3'=>'Samsung Galaxy A03','HP4'=>'Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .judul {font-weight: bold;
    background-color: red;
    }
    .uwu {
        font-size: 20px;
        padding: 20px 0px 20px 0px;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal nomor 5</title>
</head>
<body>
<table border="1">
    <tr class= "judul">
        <td class="uwu">Daftar Smartphone Samsung</td>
    </tr>
    <tr>
        <td><?php echo $listhp['HP1'] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp['HP2'] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp['HP3'] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp['HP4'] ?></td>
    </tr>
</table>
</body>
</html>