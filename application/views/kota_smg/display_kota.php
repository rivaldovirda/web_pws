<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Kota Semarang</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <a class="btn btn-primary" href="<?php echo base_url();?>index.php/kota/tambah_data"><i class="icon_plus_alt2"></i> Tambah</a>
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_mobile"></i> Nama Tempat</th>
                <th><i class="icon_pin_alt"></i> Alamat</th>
                <th><i class="icon_pin_alt"></i> Maps</th>
                <th><i class="icon_mail_alt"></i> Deskripsi</th>
                <th><i class="icon_mobile"></i> Telp</th>
                <th><i class="icon_clock"></i> Jam Operasional</th>
                <th><i class="icon_mobile"></i> Tiket</th>
                <th><i class="icon_cogs"></i> Foto Utama</th>
                <th><i class="icon_cogs"></i> Foto 1</th>
                <th><i class="icon_cogs"></i> Foto 2</th>
                <th><i class="icon_cogs"></i> Foto 3</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($kota_smg as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama_tempat'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php 
                          $maps = $row['maps'];
                          $potmaps = substr($maps,0, 50);
                          echo $potmaps;
                        ?></td>
                    <td><?php 
                          $deskripsi = $row['deskripsi'];
                          $potdes = substr($deskripsi,0, 50);
                          echo $potdes;
                        ?></td>
                    <td><?php echo $row['telp'] ?></td>
                    <td><?php echo $row['jam'] ?></td>
                    <td><?php echo $row['tiket'] ?></td>
                    <td><?php echo $row['foto_utama'] ?></td>
                    <td><?php echo $row['foto1'] ?></td>
                    <td><?php echo $row['foto2'] ?></td>
                    <td><?php echo $row['foto3'] ?></td>
                    <td>
                      <a class="btn btn-success" href="<?php echo base_url('index.php/kota/edit_kota/'.$row['id']);?>"><i class="icon_check_alt2"></i> Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url('index.php/kota/hapus_kota/'.$row['id']);?>" onClick="return confirm('yakin ingin menghapus ?')"><i class="icon_close_alt2"></i> Hapus</a>
                    </td>
                  </tr>

              <?php } ?>
            </tbody>

          </table>
        </section>
      </div>
    </div>
  </section>
</section>