<form action="<?php echo site_url("User/submit"); ?>" method="POST">
<div class="form-group">
      <div class="form-group">
      <label>Level</label>
            <?php echo form_dropdown('level', $user, '', 'class="form-control"'); ?>
      </div>
      <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="namauser" placeholder="Ketik nama..." > 
      </div>
      <div class="form-group">
      <label>Divisi</label>
      <input type="text" class="form-control" name="divisiuser" placeholder="Ketik divisi..." >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>