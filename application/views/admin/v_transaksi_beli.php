
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="card" style="width: 900px;margin-left: 60px;margin-top: 10px;">
                  <form action="<?=base_url()?>master/aksi_transaksi_beli" method="post">
                    <div class="card-header">
                      <h4>beli Barang</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?=$master['nama_barang']?>">
                      </div>
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" value="<?=$master['jumlah']?>">
                      </div>
                      <div class="form-group">
                        <label>Harga Jual</label>
                        <input type="text" class="form-control" name="harga_jual" value="<?=$master['harga_jual']?>">
                      </div>
                    </div>
                    <input type="hidden" class="form-control" name="id" value="<?=$master['id']?>">
                    <div class="card-footer text-right">
                      <button class="btn btn-success" type="reset" onclick="history.back();">Kembali</button>
                      <button class="btn btn-primary" type="submit">Beli Barang</button>
                    </div>
                  </form>
                </div>
            </div>            
          </div>
        </section>
      </div>