<?php 


if ($_SESSION['hak_akses']=='admin'){ ?>
    <ul class="nav nav-list">
    <?php
  
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }
    
     if ($_GET["module"] == "view_kendaraan" || $_GET["module"] == "view_kendaraan") {
        echo '  <li class="active">
                    <a href="?module=view_kendaraan">
                        <i class="menu-icon fa fa-car"></i>
                        <span class="menu-text">Kendaraan</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_kendaraan">
                        <i class="menu-icon fa fa-car"></i>
                        <span class="menu-text">Kendaraan</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
            }
    if ($_GET["module"] == "view_transaksi" || $_GET["module"] == "view_transaksi") {
        echo '  <li class="active">
                    <a href="?module=view_huni">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">Transaksi</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_transaksi">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">Transaksi</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
            } 

     if ($_GET["module"] == "laporan") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="active">
                            <a href="?module=laporan">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan
                            </a>
                            <b class="arrow"></b>
                        </li>

                       
                       
                    </ul>
                </li>';
            } 
    
    else {
        echo '  <li>
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=laporan">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan
                            </a>
                            <b class="arrow"></b>
                        </li>

                      
                    </ul>
                </li>';
    }

    if ($_GET["module"] == "user" || $_GET["module"] == "user") {
        echo '  <li class="active">
                    <a href="?module=user">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">user</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '<li>
                <a href="?module=user">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">user</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
            } 

    ?>
    </ul>

    <?php
}

elseif ($_SESSION['hak_akses']=='user'){ ?>
    <ul class="nav nav-list">
    <?php
  
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    if ($_GET["module"] == "view_transaksi_pinjam" || $_GET["module"] == "view_transaksi_pinjam") {
        echo '  <li class="active">
                    <a href="?module=view_transaksi_pinjam">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">Transaksi</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_transaksi_pinjam">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">Transaksi</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
?>
    </ul>
<?php
}