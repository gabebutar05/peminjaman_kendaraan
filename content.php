<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";
// panggil fungsi untuk format tanggal
require_once "config/fungsi_tanggal.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module']=='beranda') {
		include "modules/beranda/view.php";
	}

	// jika halaman konten yang dipilih customer, panggil file view customer



	elseif ($_GET['module']=='form_transaksi') {
		include "modules/transaksi/form.php";
	}

	elseif ($_GET['module']=='view_transaksi') {
		include "modules/transaksi/view.php";
	}


elseif ($_GET['module']=='view_transaksi_pinjam') {
		include "modules/transaksi/view_pinjam.php";
	}



	elseif ($_GET['module']=='view_kendaraan') {
		include "modules/kendaraan/view.php";
	}

	elseif ($_GET['module']=='form_kendaraan') {
		include "modules/kendaraan/form.php";
	}

elseif ($_GET['module']=='laporan') {
		include "modules/laporan/view.php";
	}

	elseif ($_GET['module']=='user') {
		include "modules/user/view.php";
	}
	
elseif ($_GET['module']=='form_user') {
		include "modules/user/form.php";
	}






}
?>