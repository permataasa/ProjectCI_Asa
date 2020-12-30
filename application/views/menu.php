<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class = "container">
    <a class="navbar-brand" href="#">Toko Asslab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <?php echo anchor("produk","Produk",array("class"=>"nav-link")); ?>
        </li>
        <li class="nav-item">
         <?php echo anchor("pelanggan","Pelanggan",array("class"=>"nav-link")); ?>
        </li>
        <li class="nav-item">
         <?php echo anchor("pelanggan/show_list_pelanggan","List Pelanggan",array("class"=>"nav-link")); ?>
        </li>
        <li class="nav-item">
         <?php echo anchor("produk/show_list_produk","List Produk",array("class"=>"nav-link")); ?>
        </li>
        <li class="nav-item">
         <?php echo anchor("User/index","User",array("class"=>"nav-link")); ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Pesanan</a>
          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">Form Pesanan</a>
            <a class="dropdown-item" href="#">Daftar Pesanan Barang</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Pembayaran</a>
          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">Form Pembayaran</a>
            <a class="dropdown-item" href="#">Daftar Pembayaran</a>
          </div>
        </li>

      </ul>

    </div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $this->session->userdata('namauser')?></a>
          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
            <?php echo anchor("login/logout","Log Out",array("class"=>"nav-link")); ?>
            
          </div>
        </li>
      </ul>
  </div>
      </ul>
      
    </div>
  </div>
</nav>



















      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->