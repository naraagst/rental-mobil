  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">RENTAL MOBIL BDJ</a>

	  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
	  

	  <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Anda tidak memiliki pemberitahuan baru</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cog fa-lg"></i>
          </a>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Akun</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
	</div>
    </nav>
	
	<div id="wrapper">

	<?php if(isset($_GET['r'])) $r = $_GET['r']; ?>
      <ul class="sidebar navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="../admin/home.php">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Beranda</span>
			  </a>
			</li>
		<?php if( $r == "mobil" ){ ?>
			<li class="nav-item active">
			  <a class="nav-link" href="#">
				<i class="fas fa-fw fa-car"></i>
				<span>Mobil</span></a>
			</li>
		<?php } else{ ?>
			<li class="nav-item">
			  <a class="nav-link" href="?r=mobil">
				<i class="fas fa-fw fa-car"></i>
				<span>Mobil</span></a>
			</li>
		<?php } if( $r == "cust" ){ ?>
			<li class="nav-item active">
			  <a class="nav-link" href="#">
				<i class="fas fa-fw fa-user"></i>
				<span>Customer</span></a>
			</li>
		<?php } else{ ?>
			<li class="nav-item">
			  <a class="nav-link" href="?r=cust">
				<i class="fas fa-fw fa-user"></i>
				<span>Customer</span></a>
			</li>
		<?php } if( $r == "transaksi" ){ ?>
			<li class="nav-item active">
			  <a class="nav-link" href="#">
				<i class="fas fa-fw fa-paste"></i>
				<span>Transaksi</span></a>
			</li>
		<?php } else{ ?>
			<li class="nav-item">
			  <a class="nav-link" href="?r=transaksi">
				<i class="fas fa-fw fa-paste"></i>
				<span>Transaksi</span></a>
			</li>
		<?php } if( $r == "krisan" ){ ?>
			<li class="nav-item active">
			  <a class="nav-link" href="#">
				<i class="fas fa-fw fa-comments"></i>
				<span>Kritik dan Saran</span></a>
			</li>
		<?php } else{ ?>
			<li class="nav-item">
			  <a class="nav-link" href="?r=krisan">
				<i class="fas fa-fw fa-comments"></i>
				<span>Kritik dan Saran</span></a>
			</li>
		<?php } ?>
      </ul>
