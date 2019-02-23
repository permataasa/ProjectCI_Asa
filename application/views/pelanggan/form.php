<form action="<?php echo site_url("Pelanggan/submit"); ?>" method="POST">
<div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" name="namaplg" placeholder="Ketik nama...." value="<?php echo (isset($data_pelanggan[0]->namaplg)? $data_pelanggan[0]->namaplg:''); ?>">
      </div>
      <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email" placeholder="Ketik email..." value="<?php echo (isset($data_pelanggan[0]->email)? $data_pelanggan[0]->email:''); ?>"> 
      </div>
      <div class="form-group">
      <label>Telepon</label>
      <input type="text" class="form-control" name="telepon" placeholder="Ketik nomor telepon..." value="<?php echo (isset($data_pelanggan[0]->telepon)? $data_pelanggan[0]->telepon:''); ?>">
      </div>
      <div class="form-group">
      <label>Alamat</label>
      <input type="text" class="form-control" name="alamat" placeholder="Ketik alamat..." value="<?php echo (isset($data_pelanggan[0]->alamat)? $data_pelanggan[0]->alamat:''); ?>">
      </div>
      <input type="hidden" name="id_pelanggan" 
      value="<?php echo (isset($data_pelanggan[0]->id_pelanggan)? $data_pelanggan[0]->id_pelanggan:''); ?>">
      <button type="submit" class="btn btn-primary">Submit</button>
</form>