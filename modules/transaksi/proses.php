<?php
session_start();
require_once "../../config/database.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form

            $tgl_pinjam         = mysqli_real_escape_string($mysqli, trim($_POST['pinjam']));
            $tgl              = explode('-',$tgl_pinjam);
            $tanggal_pinjam     = $tgl[2]."-".$tgl[1]."-".$tgl[0];
            $id           = mysqli_real_escape_string($mysqli, trim($_POST['id']));
            $keterangan           = mysqli_real_escape_string($mysqli, trim($_POST['keterangan']));
            $iduser = $_SESSION['id_user'];
            

            $query = mysqli_query($mysqli, "INSERT INTO tbl_pinjam(id,tgl,iduser,keterangan) 
                                            VALUES('$id','$tanggal_pinjam','$iduser','$keterangan')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                header("location: ../../main.php?module=view_transaksi_pinjam&alert=1");
            }   
        }   
    }  
     elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id'])) {
                // ambil data hasil submit dari form
                $id    = mysqli_real_escape_string($mysqli, trim($_POST['id']));
               

            $tgl_pinjam         = mysqli_real_escape_string($mysqli, trim($_POST['pinjam']));
            $tgl              = explode('-',$tgl_pinjam);
            $tanggal_pinjam     = $tgl[2]."-".$tgl[1]."-".$tgl[0];

            $nopol           = mysqli_real_escape_string($mysqli, trim($_POST['nopol']));
            $status           = mysqli_real_escape_string($mysqli, trim($_POST['status']));

           
            

                $updated_user = $_SESSION['id_user'];

                // perintah query untuk mengubah data pada tabel barang
                $query = mysqli_query($mysqli, "UPDATE tbl_pinjam SET tgl    = '$tanggal_pinjam',
                                                                    nopol =  '$nopol',
                                                                    status='$status'
                                                                   
                                                               WHERE id      = '$id'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                // cek query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil update data
                    header("location: ../../main.php?module=view_transaksi&alert=2");
                }         
            }
        }
    } 
     elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
          
            $query = mysqli_query($mysqli, "DELETE FROM transaksi WHERE id='$id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            if ($query) {
               
                header("location: ../../main.php?module=view_kendaraan&alert=3");
            }
        }
    }      
}       
?>