
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="card">
                    <div class="card-header">
                      <h4>Stock Barang</h4>
                    </div>
                    <div class="card-body">
                      <a href="<?=base_url();?>master/tambah" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>Tambah Barang</a>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($master as $row) { ?>
                            <tr>
                              <th scope="row"><?=$row['id']?></th>
                              <td><?=$row['nama_barang']?></td>
                              <td><?=$row['jumlah']?></td>
                              <td>Rp.<?=number_format($row['harga_jual'], 0, ".", ".")?></td>
                              <td><a href="<?=base_url('master/ubah/'.$row['id']);?>" class="btn btn-warning btn-sm">Ubah Barang</a> &nbsp <a href="<?=base_url('master/hapus/'.$row['id']);?>" class="btn btn-danger btn-sm">Hapus Barang</a></td>
                            </tr>                            
                          <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>
              </div>
            </div>            
          </div>
        </section>
      </div>