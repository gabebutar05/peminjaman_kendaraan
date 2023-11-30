<?php 
/* panggil file database.php untuk koneksi ke database */
require_once "../../config/database.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data.xls");

?>
<head>
    <title>LAPORAN</title>
</head>
<center>
        <h1>Laporan Data</h1>
    </center>
  <table border='1'>
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
                          <td width="10" class="center"><?php echo $no; ?></td>
                                    
                                   
                                     <td width="100"><?php echo $data['id'];?></td>
                                      <td width="100"><?php echo $data['tgl'];?></td>
                                      <td width="100"><?php echo $data['nama_user'];?></td>
                                      <td width="100"><?php echo $data['divisi'];?></td>
                                      <td width="100"><?php echo $data['keterangan'];?></td>
                                      <td width="100"><?php echo $data['nopol'];?></td>
                                     
                                              <td width="100"><?php echo $data['status'];?></td>
                                            
                                 
                                        

                                   
                        <div>
                         
                                    
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                            </tbody>
                        </table>
          