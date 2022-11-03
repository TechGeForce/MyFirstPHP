<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
    $idstudent = $_POST['idstudent'];
    $student_name = $_POST['student_name'];
    $Jantina = $_POST['Jantina'];
    $No_Telefon = $_POST['No Telefon'];
    $Alamat = $_POST['Alamat'];
    $Tahun_Graduan = $_POST['Tahun_Graduan'];
    $Status = $_POST['Status'];

    $result = mysqli_query($mysqli, "INSERT INTO Alumni(idstudent, student_name, Jantina, No_Telefon, Alamat, Tahun_Graduan, Status)"
    . "VALUES('$idstudent', '$student_name', '$Jantina', '$No_Telefon', '$Alamat', '$Tahun_Graduan', '$Status')");

    echo "<script>alert('Tambah maklumat berjaya');"
    . "window.location='index.php'</script>";
}
else
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="rekod.css">
        <title>TAMBAH REKOD</title>
    </head>
    <body>
        <center><br><br><h2>TAMBAH REKOD ALUMNI</h2>
            <fieldset>
                <form action="add.php" method="post" name="form1">
                    <table>
                        <tr>
                                <td>ID PELAJAR</td>
                                <td><input type="text" name="idstudent"></td>
                            </tr>
                            <tr>
                                <td>NAMA PELAJAR</td>
                                <td><input type="text" name="student_name"></td>
                            </tr>
                            <tr>
                                <td>JANTINA</td>
                                <td><input type="text" name="Jantina"></td>
                            </tr>
                            <tr>
                                <td>NO TELEFON</td>
                                <td><input type="text" name="No_Telefon"></td>
                            </tr>
                            <tr>
                                <td>ALAMAT</td>
                                <td><input type="text" name="Alamat"></td>
                            </tr>
                            <tr>
                                <td>TAHUN GRADUAN</td>
                                <td><input type="text" name="Tahun_Graduan"></td>
                            </tr>
                            <tr>
                                <td>STATUS</td>
                                <td><input type="text" name="Status"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="Submit" value="Tambah Rekod"></td>
                            </tr>
                    </table>
                </form>

                <br><a href="index.php">Kembali ke Laman Utama</a>
            </fieldset>
        </center>
<?php
}
?>
    </body>
    </html>
}
