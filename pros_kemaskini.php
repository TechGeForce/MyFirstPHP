<?php
include "config.php";

if (isset($_POST['update']))
{
    $idstudent = $_POST['idstudent'];
    $student_name = $_POST['student_name'];
    $Jantina = $_POST['Jantina'];
    $No_Telefon = $_POST['No Telefon'];
    $Alamat = $_POST['Alamat'];
    $Tahun_Graduan = $_POST['Tahun_Graduan'];
    $Status = $_POST['Status'];

    $query = "UPDATE alumni SET idstudent='$idstudent', student_name='$student_name', Jantina='$Jantina', No_Telefon='$No_Telefon', Alamat='$Alamat', Tahun_Graduan='$Tahun_Graduan', Status='$Status' WHERE idstudent=$idstudent";

    $result = mysqli_query($mysqli, $query);

    if (mysqli_query($mysqli, $query)) {
        echo "<script>alert('Kemaskini maklumat berjaya! Less goo!')</script>" .
    "<script>window.location='index.php'</script>";
        }
    else {
        echo "<script>alert('Maklumat tidak berjaya"
    }
}
?>