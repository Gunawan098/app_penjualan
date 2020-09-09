
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="card">
                    <div class="card-header">
                      <h4>Transaksi Barang</h4>
                    </div>
                    <div class="card-body">
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
                              <td><a href="<?=base_url('master/transaksi_beli/'.$row['id']);?>" class="btn btn-primary btn-sm">Beli Barang</a></td>
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