<?php
require_once '../inc/config.php';
//MENANGKAP VARIABLE FIELD DITABLE YANG DIKIRIM DENGAN METHODE POST

$username = $_POST['username'];
$password = $_POST['password'];

$query_validasi = "SELECT * FROM admin WHERE username='".$username."'";
$result_validasi = mysql_query($query_validasi);

$query_validasi_final = mysql_fetch_array($result_validasi);
echo $query_validasi_final['username'];

if ($query_validasi_final['username']!="") {
echo "<script>alert('Data sudah ada!');
		location.href='user_form_insert.php';
		</script>";
		
} else if ($query_validasi_final['username']=="") {

$query = "INSERT INTO admin
(id_admin,username,password) VALUES('".$id_admin."','".$username."','".$password."')";
$result = mysql_query($query);
header('Location:user_form_insert.php?konfirmasi=1');

}
?>