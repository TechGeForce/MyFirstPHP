<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Alumni");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alumni</title>
</head>
<body>
    <body>
        <center><br><br>
            <h2>🌸 ALUMNI KV SEPANG 🌸</h2>
            <fieldset>
                <table>
                    <tr>
                        <td>NO ID</td>
                        <td>NAMA PELAJAR</td>
                        <td>JANTINA</td>
                        <td>NO TELEFON</td>
                        <td>ALAMAT</td>
                        <td>TAHUN_GRADUAN</td>
                        <td>STATUS</td>
                        <td>TINDAKAN</td>
                        <td>TINDAKAN</td>
                    </tr>

<?php
    $no=1;

    while($res = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<td>".$res['idstudent']."</td>";
            echo "<td>".$res['student_name']."</td>";
            echo "<td>".$res['Jantina']."</td>";
            echo "<td>".$res['No_Telefon']."</td>";
            echo "<td>".$res['Alamat']."</td>";
            echo "<td>".$res['Tahun_Graduan']."</td>";
            echo "<td>".$res['Status']."</td>";
            echo "<td><a href= \"form_kemaskini.php?idstudent=$res[idstudent]\" onClick=\return confirm('Adakah anda pasti?')\">KEMASKINI</a></td>";              
            echo "<td><a href= \"delete.php?idstudent=$res[idstudent]\" onClick=\return confirm('Adakah anda pasti?')\">HAPUS</a></td>"; 
        $no++;                 
    }
        ?>
            </table>
            <br><a href="add.php">DAFTAR ALMUNI BARU</a>
        </center>
        </fieldset> 
</body>
</html>
