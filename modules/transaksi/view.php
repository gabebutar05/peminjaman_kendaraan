
<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="?module=beranda">Beranda</a>
        </li>
    </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
    <div class="page-header">
        <h1 style="color:#585858">
            <i class="ace-icon fa fa-list"></i>Data Transaksi
           
        </h1>
        <br>
        <br>
    
        

<?php

if (empty($_GET['alert'])) {
}

elseif ($_GET['alert'] == 1) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi baru berhasil disimpan.
        <br>
    </div>
<?php
} 
elseif ($_GET['alert'] == 2) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi berhasil diubah.
        <br>
    </div>
<?php
}
elseif ($_GET['alert'] == 3) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi berhasil dihapus.
        <br>
    </div>
<?php
} 
?>

<br>
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <div class="row">

           
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class='center'>No</th>
                                    <th class='center'>ID TRANSAKSI</th>
                                     <th class='center'>Tanggal Pinjam</th>
                                     <th class='center'>Nama User</th>
                                     <th class='center'>Departemen</th>
                                     <th class='center'>Keterangan</th>
                                     <th class='center'>Nopol Kendaraan</th>

                                     
                                            <th class='center'>Status</th>

                                          <th class="center">Action</th>

                                  
                                </tr>
                            </thead>

                            <?php
                            error_reporting(0);
                            $no = 1;
          
                            $query = mysqli_query($mysqli, "SELECT 
                                            a.id, a.tgl,c.nama_user,c.divisi,a.keterangan,a.nopol,a.status

                                            FROM
                                             tbl_pinjam a,
                                             tbl_kendaraan b,
                                             tbl_user c
                                             
                                             WHERE a.iduser=c.id_user 
                                             
                                             GROUP BY 1
                                            ")
                                                or die('Ada kesalahan pada query tampil Data: '.mysqli_error($mysqli));

                            while ($data = mysqli_fetch_assoc($query)) { 
                         
                            ?>
                          <tr>
                                    <td width="10" class="center"><?php echo $no; ?></td>
                                    
                                   
                                     <td width="100"><?php echo $data['id'];?></td>
                                      <td width="100"><?php echo $data['tgl'];?></td>
                                      <td width="100"><?php echo $data['nama_user'];?></td>
                                      <td width="100"><?php echo $data['divisi'];?></td>
                                      <td width="100"><?php echo $data['keterangan'];?></td>
                                      <td width="100"><?php echo $data['nopol'];?></td>
                                     
                                              <td width="100"><?php echo $data['status'];?></td>
                                             <td>

                                             

                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href="?module=form_transaksi&form=edit&id=<?php echo $data['id']; ?>">
                                                <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                                            </a>

                                             <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/transaksi/proses.php?act=delete&id=<?php echo $data['trans'];?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['id']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>

                                     
                                     </td>
                                 
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;

                               
                           
                            } ?>
                            </tbody>
                            <tfoot>
     
      </tfoot>
                        </table>
                    

                </div>
            </div>
        </div>
</div>
</div>
