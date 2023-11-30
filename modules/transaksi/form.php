 <?php  

if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Input Data Transaksi
      </h1>
    </div>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/transaksi/proses.php?act=insert" method="POST" enctype="multipart/form-data" />
           <div class="box-body">
             <?php  
             error_reporting(0);
             $nama = $_SESSION['nama_user'];
             $divisi = $_SESSION['divisi'];
              // fungsi untuk membuat id transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(id,6) as kode FROM tbl_pinjam
                                                ORDER BY id DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil id_barang : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data id_barang
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat id_barang
              $buat_id   = str_pad($kode, 6, "0", STR_PAD_LEFT);
              $id = "TRX$buat_id";
              ?>



           

              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">ID Transaksi</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id" autocomplete="off"  value="<?php echo $id;?>" required>
                </div>
              </div>


               <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Nama</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama" autocomplete="off" value='<?php echo $nama;?>' readonly>
                </div>
              </div>

                 <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Departemen</label>*
                <div class="col-sm-5">
  <input type="text" class="form-control" name="departemen" autocomplete="off" value='<?php echo $divisi;?>' readonly>
                </div>
              </div>

              

              <div class="form-group">
                  <label class="col-sm-2 control-label no-padding-right">Tanggal Pinjam</label>
                  
                  <div style="padding-right:20px;" class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="pinjam" required />
                      <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                      </span>
                    </div>
                  </div>
                </div>

                   <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Keterangan</label>*
                <div class="col-sm-5">
  <input type="text" class="form-control" name="keterangan" autocomplete="off"  rquired>
                </div>
              </div>
                
   

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=view_transaksi_pinjam" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>
<?php
      }
      elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
  
      $query = mysqli_query($mysqli, "SELECT 
                                            a.id, a.tgl,c.nama_user,c.divisi,a.keterangan,a.nopol,a.status

                                            FROM
                                             tbl_pinjam a,
                                             tbl_kendaraan b,
                                             tbl_user c
                                             
                                             WHERE a.iduser=c.id_user and  a.id='$_GET[id]'
GROUP BY a.`id`") 
                                      or die('Ada kesalahan pada query tampil Data Vendor: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query); 

    $tgl_pinjam     = $data['tgl'];
    $tgl           = explode('-',$tgl_pinjam);
    $tanggal_pinjam = $tgl[2]."-".$tgl[1]."-".$tgl[0];

    }
  
?>
 
  <section class="content-header">
    <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Edit Transaksi
      </h1>
    </div>
    
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/transaksi/proses.php?act=update" method="POST" enctype="multipart/form-data" />
          
            <div class="box-body">

               <div class="form-group">
                <div class="col-sm-5">
                  <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data['id']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama_user']; ?>" readonly>
                </div>
              </div>
  <div class="form-group">
                <label class="col-sm-2 control-label">departemen</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="divisi" autocomplete="off" value="<?php echo $data['divisi']; ?>" readonly>
                </div>
              </div>
 

              <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pinjam</label>
              <div class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="pinjam" value="<?php echo $tanggal_pinjam; ?>" readonly />
                      <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="keterangan" autocomplete="off" value="<?php echo $data['keterangan']; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Nopol</label>*
                <div class="col-sm-5">
                  <select class="chosen-select" name="nopol" data-placeholder="-- Pilih Nopol--" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_operator = mysqli_query($mysqli, "SELECT * FROM tbl_kendaraan group by id")
                                                            or die('Ada kesalahan pada query tampil: '.mysqli_error($mysqli));
                      while ($data_operator = mysqli_fetch_assoc($query_operator)) {
                        echo"<option value=\"$data_operator[nopol]\"> $data_operator[nopol] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

               


              <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-4">
                    <select class="form-control" name="status" placeholder="Pilih ..." required>
                      <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                      <option value="APPROVE">APPROVE</option>
                                      <option value="REJECTED">REJECTED</option>
                                      
                    </select>
                  </div>
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