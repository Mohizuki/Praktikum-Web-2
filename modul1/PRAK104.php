<!--PHP duluan karena ga kebaca-->
<?php
$listhp = ['Samsung Galaxy S22','Samsung Galaxy S22+','Samsung Galaxy A03','Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .judul {font-weight: bold;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal nomor 4</title>
</head>
<body>
<table border="1">
    <tr class = "judul">
        <td>Daftar Smartphone Samsung</td>
    </tr>
    <tr>
        <td><?php echo $listhp[0] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp[1] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp[2] ?></td>
    </tr>
    <tr>
        <td><?php echo $listhp[3] ?></td>
    </tr>
</table>
</body>
</html>