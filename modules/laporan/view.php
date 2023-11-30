
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
            <i class="ace-icon fa fa-list"></i> Laporan
        </h1>
      </div>
    </div>
     <form role="form" class="form-horizontal" action="modules/laporan/cetak.php" method="GET" target="_blank" enctype="multipart/form-data" />
           <div class="box-body">

           

              <div class="form-group">
                  <label class="col-sm-2 control-label no-padding-right">Dari</label>
                  
                  <div style="padding-right:20px;" class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control date-picker" type="text" data-date-format="yyyy-mm-dd" name="dari" required />
                      <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                      </span>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label no-padding-right">Sampai</label>
                  
                  <div style="padding-right:20px;" class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control date-picker" type="text" data-date-format="yyyy-mm-dd" name="sampai" required />
                      <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                      </span>
                    </div>
                  </div>
                </div>
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="cetak" value="Export to excel">
                </div>
              </div>
            </div>
          </form>
                  