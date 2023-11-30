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
            $tipe  = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
            $plat  = mysqli_real_escape_string($mysqli, trim($_POST['plat']));
            $query = mysqli_query($mysqli, "INSERT INTO tbl_kendaraan(merk,nopol) 
                                            VALUES('$tipe','$plat')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                header("location: ../../main.php?module=view_kendaraan&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id'])) {
               
                $id  = mysqli_real_escape_string($mysqli, trim($_POST['id']));
              
                $tipe  = mysqli_real_escape_string($mysqli, trim($_POST['tipe']));
                 $plat  = mysqli_real_escape_string($mysqli, trim($_POST['plat']));
              
                $query = mysqli_query($mysqli, "UPDATE tbl_kendaraan SET merk    = '$tipe'
                                                               WHERE id      = '$id'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                
                if ($query) {
                    header("location: ../../main.php?module=view_kendaraan&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
          
            $query = mysqli_query($mysqli, "DELETE FROM tbl_kendaraan WHERE id='$id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            if ($query) {
               
                header("location: ../../main.php?module=view_kendaraan&alert=3");
            }
        }
    }       
}       
?>