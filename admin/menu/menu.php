        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="#">RENTAL MOBIL BDJ</a>


      <!-- Navbar -->
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



      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100 cards">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-car"></i>
                  </div>
                  <div class="mr-5">DAFTAR MOBIL</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="?r=mobil">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">DAFTAR CUSTOMER</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="?r=cust">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-paste"></i>
                  </div>
                  <div class="mr-5">DAFTAR TRANSAKSI</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="?r=transaksi">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">KRITIK DAN SARAN</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="?r=krisan">
                  <span class="float-left">Lihat Detail</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
		  
		  <!-- Area Chart Example-->
		 <center>
         <div class="card mb-3" style="width:500px;margin-top:60px;" >
            <div class="card-header">
              <h4>KODE TRANSAKSI</h4>
			  </div>
            <div class="card-body">
              <form name="tambah" method="post" action="?r=cek_kode" enctype="multipart/form-data">
				<input type="text" style="width:300px;padding:25px;" name="kode_trans" class="form-control" placeholder="Kode Transaksi" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')">
				<input type="submit" style="width:200px;padding:15px;margin-top:10px;" name="tambah" value="Submit" class="tambah">
			  </form>
			</div>
		</div>
		</center>