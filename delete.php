<?php
include("config.php");
$idstudent = $_GET['idstudent'];

$result = mysqli_query($mysqli, "DELETE FROM Alumni WHERE idstudent = '$idstudent'");
echo "<script>alert('Hapus maklumat berjaya');
". "window.location = 'index.php'</script>";

?>
