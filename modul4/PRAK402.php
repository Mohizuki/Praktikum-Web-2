<?php 
    $nilai = [
        ["nama" => "Andi", "nim" => "2101001", "nuts" => 87, "nuas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "nuts" => 76, "nuas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "nuts" => 50, "nuas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "nuts" => 60, "nuas" => 75]

    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web II Modul 4 soal 2</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-right: 10px;
        }

        td {
            padding-bottom: 10px;
            padding-left: 5px;
        }
        .header{
            font-weight: bold;
            background-color: #ececec;

        }

    </style>
</head>
<body>
    <table>
        <tr>
            <td class = "header">Nama</td>
            <td class = "header">NIM</td>
            <td class = "header">Nilai UTS</td>
            <td class = "header">Nilai UAS</td>
            <td class = "header">Nilai Akhir</td>
            <td class = "header">Huruf</td>
        </tr>

            <?php
            $sum = 0;
            foreach($nilai as $key=>$value){
                $sum = ($value['nuts'] * 4/10) + ($value['nuas'] * 6/10);
                echo "<tr>";
                foreach ($value as $key2=>$value2) {
                    echo "<td>".$value2."</td>";
                }
                echo "<td>".$sum."</td>";
                if($sum < 50){
                    echo "<td>E</td>";
                }
                else if($sum >= 50 && $sum < 60){
                    echo "<td>D</td>";
                }
                else if($sum >= 60 && $sum < 70){
                    echo "<td>C</td>";
                }
                else if($sum >= 70 && $sum < 80){
                    echo "<td>B</td>";
                }
                else if($sum >= 80){
                    echo "<td>A</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>

</body>
</html>