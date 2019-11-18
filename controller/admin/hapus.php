<?php
if(isset($_GET['id'])){
	include('koneksi.php');
 	$id_siswa=$_GET['id'];

	 //sebuah query untuk menampilkan data kolom id_siswa dari table siswa
	$cek=mysqli_query($koneksi,"SELECT ID_DESA FROM DESA where ID_DESA='$id_siswa'")or die(mysql_error());
		if(mysqli_num_rows($cek)==0){
  	echo'<script>window.history.back()</script>';
 	}else{

	 	//query untuk menghapus data dari tb_siswa
	 	$del=mysqli_query($koneksi,"Delete FROM desa WHERE ID_DESA='$id_siswa'");
	  	if($del){?>
			<script type="text/javascript">
			alert('Hapus Berhasil !');
			setTimeout(function() {window.location.href='../../pages/admin/viewdesa.php'},10);
			</script>
			<?php
	  	}else{?>
			<script type="text/javascript">
			alert('Hapus Gagal !');
			setTimeout(function() {window.location.href='../../pages/admin/viewdesa.php'},10);
			</script><?php
	  	}
	 }
}else{
 	echo'<script>window.history.back()</script>';
}
?>
