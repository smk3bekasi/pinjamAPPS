
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" style="width:50px;" alt="Logo">&nbsp;DASBOARD</a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                
                    <li >
                        <a href="permintaan.php"><i class="menu-icon fa fa-question"></i>Permintaan Peminjaman</a>
                        <a href="barang-dipinjam.php"><i class="menu-icon fa fa-shopping-cart"></i>Barang Dipinjam</a>
                        <a href="permintaan-kembali.php"><i class="menu-icon fa fa-check"></i>Konfirmasi Kembali?</a>
                        <a href="barang-kembali.php"><i class="menu-icon fa fa-handshake-o"></i>Barang Kembali</a>
                        
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Barang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-archive"></i><a href="data-barang.php">Data Barang</a></li>
                            <li><i class="menu-icon fa fa-plus"></i><a href="tambah-barang.php">Tambah Barang</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="data-user.php">Data User</a></li>
                            <!--li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Tambah User</a></li-->
                        </ul>
                    </li>

                    <li class="active">
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->