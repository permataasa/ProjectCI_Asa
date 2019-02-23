      <table class="table table-hover">
        <thead>
            <tr class="table-info">
              <th scope="col">No</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Email</th>
              <th scope="col">Telpon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
              <?php
              $no=1;
              foreach($pelanggan as $value){
              ?>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $value->namaplg;?></td>
                    <td><?php echo $value->email;?></td>
                    <td><?php echo $value->telepon;?></td>
                    <td><?php echo $value->alamat;?></td>
                    <td>
                    <a class="btn btn-danger" href="<?php echo site_url('pelanggan/delete_pelanggan/').$value->id_pelanggan;?>" onclick="return confirm=('Yakin Ingin Hapus Data?')">Delete</a>
                    <a class="btn btn-primary" href="<?php echo site_url('pelanggan/edit_pelanggan/').$value->id_pelanggan;?>">Edit</a>
                    </td>
                  <tr class="table-danger">
                    <?php } ?>
                  </tr>
              
        </tbody>
        </table>

