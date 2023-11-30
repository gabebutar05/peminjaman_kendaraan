 <?php  

if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Input Jenis Kendaraan
      </h1>
    </div>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/kendaraan/proses.php?act=insert" method="POST" enctype="multipart/form-data" />
           <div class="box-body">

           

              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama" autocomplete="off" required>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label">Plat</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="plat" autocomplete="off" required>
                </div>
              </div>
              
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=view_kendaraan" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </div>
<?php
error_reporting(0);
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
  
      $query = mysqli_query($mysqli, "SELECT * from tbl_kendaraan where id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data Vendor: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query); 
    }
  
?>
 
  <section class="content-header">
    <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Edit Jenis
      </h1>
    </div>
    
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/kendaraan/proses.php?act=update" method="POST" enctype="multipart/form-data" />
          
            <div class="box-body">

               <div class="form-group">
                <div class="col-sm-5">
                  <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data['id']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipe" autocomplete="off" value="<?php echo $data['merk']; ?>">
                </div>
              </div>

             
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=view_kendaraan" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
<?php
      }
     
?>