      <table class="table table-hover">
        <thead>
            <tr class="table-info">
              <th scope="col">No</th>
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Satuan</th>
              <th scope="col">Img</th>
              <th scope="col">Desc</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
              <?php
              $no=1;
              foreach($produk as $value){
              ?>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $value->namaprd;?></td>
                    <td><?php echo $value->harga;?></td>
                    <td><?php echo $value->satuan;?></td>
                    <td><?php echo $value->img;?></td>
                    <td><?php echo $value->deskripsi;?></td>
                    <td>
                    <a class="btn btn-danger" href="<?php echo site_url('Produk/delete_produk/').$value->id_produk;?>" onclick="return confirm=('Yakin Ingin Hapus Data?')">Delete</a>
                    <a class="btn btn-primary" href="<?php echo site_url('Produk/edit_produk/').$value->id_produk;?>">Edit</a>
                    </td>
                  <tr class="table-danger">
                    <?php } ?>
                  </tr>
              
        </tbody>
        </table>

