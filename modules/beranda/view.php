
<?php
error_reporting(0);
?>
<div class="page-content">
	<div class="page-header">
		<h4>
			Peminjaman Mobil
		</h4>
	</div><!-- /.page-header -->
	<div class="row">
	<?php
if ($_SESSION['hak_akses']=='admin') { ?>
<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-user"></i>
				</button>
				<i class="ace-icon fa fa-user green"></i>
				Selamat datang
				<strong class="green"><?php echo $_SESSION['nama_user']; ?></strong> di Sistem Informasi Peminjaman Mobil
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->

	 <div class="row">
<div class="col-lg-3 col-xs-6">
            <!-- small box -->
             <div style="background-color:#dd4b39;color:#fff" class="small-box">
                <?php  
                $user= $_SESSION['id_user'];
                //$users= $_SESSION['nama_user'];
                $query = mysqli_query($mysqli, "SELECT 
 
  COUNT(DISTINCT (`id`)) AS kendaraan

  
FROM
tbl_kendaraan ")


                                                or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));

                $data = mysqli_fetch_assoc($query);

                
                ?>

                <div class="inner">

                    <h3><?php echo $data['kendaraan']; ?></h3>
                    <p>Total Mobil</p>
                    
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    
    </div>

   
</div>


    <?php

}
elseif ($_SESSION['hak_akses']=='user') { ?>
<div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-user"></i>
                </button>
                <i class="ace-icon fa fa-user green"></i>
                Selamat datang
                <strong class="green"><?php echo $_SESSION['nama_user']; ?></strong> di Sistem Informasi Peminjaman Mobil Dinas
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

     <div class="row">
<div class="col-lg-3 col-xs-6">
            <!-- small box -->
             <div style="background-color:#dd4b39;color:#fff" class="small-box">
                <?php  
                $user= $_SESSION['id_user'];
                //$users= $_SESSION['nama_user'];
                $query = mysqli_query($mysqli, "SELECT 
 
  COUNT(DISTINCT (`id`)) AS kendaraan

  
FROM
tbl_pinjam where iduser='$user' ")


                                                or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));

                $data = mysqli_fetch_assoc($query);

                
                ?>

                <div class="inner">

                    <h3><?php echo $data['kendaraan']; ?></h3>
                    <p>Total Pinjam</p>
                    
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    
        
    </div>

   
</div>


    <?php

}
?>



	 
	 <!-- /.page-content -->