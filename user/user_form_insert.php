<?php
require_once '../template/header.php';
?>

<script>
	$(document).ready(function() {
		$("#form_insert").validate({
			rules : {
				password : "required",
				passwordc : {
					equalTo : "#password"
				}
			}
		});
	}); 
</script>

<div class="container">

	<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>

	<br />
	<br />
	<form action="user_act_insert.php" method="post" id="form_insert" name="form_insert">
		<div class="control-group">
			<label for="username">Kode SPBU : </label>
			<div class="controls">
				<input type="text" name="username" id="username" placeholder="Username" class="required" maxlength="20"/>
			</div>
		</div>

		<div class="control-group">
			<label for="password">Fasilitas : </label>
			<div class="controls">
				<input type="password" name="password" id="password" placeholder="Password" class="required" maxlength="20"/>
			</div>
		</div>
		<div class="control-group">
			<label for="username">Produk : </label>
			<div class="controls">
				<input type="text" name="username" id="username" placeholder="Username" class="required" maxlength="20"/>
			</div>
		</div>

		<div class="control-group">
			<label for="password">Jam Operasional : </label>
			<div class="controls">
				<input type="password" name="password" id="password" placeholder="Password" class="required" maxlength="20"/>
			</div>
		</div>

		<?
		if (isset($_GET['konfirmasi'])) {
			echo "<div id='form_alert' style='color:#DD1144' class='alert alert-success'>";
			echo "<a class='close' data-dismiss='alert' href='#'>x</a>Data berhasil disimpan!";
			echo "</div>";
		}
		?>

		<div class="control-group">
			<button type="submit" class="btn btn-primary">
				<i class="icon icon-plus"></i> Simpan
			</button>
			<button type="reset" class="btn btn-warning">
				<i class="icon icon-refresh"></i> Batal
			</button>
		</div>
	</form>
</div>
</body>
</html>