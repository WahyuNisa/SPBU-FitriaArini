<?
// INCLUDE KONEKSI
require_once '../inc/config.php';
// END OF INCLUDE KONEKSI

//INCLUDE TEMPLATE YANG BERISI FILE bootstrap
include '../template/header.php';
//END OF INCLUDE FILE bootstrap
?>
	<div class="row" style="margin-left:0px;">
			<!-- <legend>
				pom PHP & Bootstrap
			</legend> -->
			<!-- MENAMBAHKAN FORM UNTUK PENCARIAN BERDASARKAN username -->
			<form name="user_form_search" action="" method="post" class="form-search">
				<input type="text" name="username" placeholder="Masukkan Username"/>
				<a href='user_form_view.php' class="btn btn-primary" ><i class='icon-list'></i>All</a>
			</form>
			<!-- END OF FORM PENCARIAN -->
			
<!-- MENAMBAHKAN KONFIRMASI JIKA UPDATE DATA BERHASIL -->
<?
if (isset($_GET['konfirmasi'])) {
	echo "<div id='form_alert' style='color:#DD1144' class='alert alert-success'>";
	echo "<a class='close' data-dismiss='alert' href='#'>x</a>Update Succesfull!";
	echo "</div>";
}
?>
<!-- END OF KONFIRMASI UPDATE DATA -->

<table class="table table-bordered table-striped">
	<tr>
		<th><center>id_admin</center></th>
		<th><center>Username</center></th>
		<th><center>Password</center></th>
		<th><center>Aksi</center></th>
	</tr>
	
	<?php
$batas=5;
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
$posisi=0;
$halaman=1;
}else{
$posisi=($halaman-1)* $batas;
}
$query="SELECT * FROM admin ORDER BY username LIMIT $posisi,$batas";
	$query_page="SELECT USERNAME FROM admin";
if(isset($_POST['username'])){
$username=$_POST['username'];
$query="SELECT * FROM admin WHERE username LIKE '%$username%'";
	$query_page="SELECT username FROM admin WHERE username LIKE '%$username%'";
}
$result=mysql_query($query) or die(mysql_error());
$no=0;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){

			?>

	<tr>
		<!-- <td><?php echo $no++; ?></td> -->
		<td><?php echo $no+$posisi; ?></td>
		<td><?php echo $rows['id_admin']; ?></td>
		<td><?php echo $rows['username']; ?></td>
		<td><?php echo $rows['password']; ?></td>
		<td align="center">
			<a href="user_form_update.php?username=<?php echo $rows['username']; ?>" class="btn btn-warning">
				<i class="icon icon-pencil"></i> Update</a>
			<a href="user_act_delete.php?username=<?php echo $rows['username']; ?>" 
				onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">
				<i class="icon icon-trash"></i> Delete</a>
		</td>
	</tr>
	
	<?php
	}
	?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	<td colspan="4"><a href="user_form_insert.php" class="btn  btn-success"><i class="icon icon-plus"></i> Add</a></td>
	</tr>
</table>

<?php

$result_page = mysql_query($query_page);
$jmldata = mysql_num_rows($result_page);
$jmlhalaman = ceil($jmldata / $batas);
 
echo "<div class='pagination'><ul>"; 
for($i=1;$i<=$jmlhalaman;$i++) 
    echo "<li> <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a></li>"; 
?>
</ul>
</div>

<!-- MENAMPILKAN JUMLAH DATA -->
<div class="row" style="margin-left:0px;">
	<div class="well">

	<?php
	echo "Jumlah Data : $jmldata";	
	?>
	</div>
</div>
<!-- END OF MENAMPILKAN JUMLAH DATA -->

<?php
include '../template/footer.php';
?>
