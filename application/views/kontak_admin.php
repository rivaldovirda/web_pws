<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Kontak</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_mobile"></i> Pesan</th>
                <th><i class="icon_pin_alt"></i> Nama</th>
                <th><i class="icon_pin_alt"></i> Email</th>
                <th><i class="icon_mail_alt"></i> Status</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($kontak as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php 
                          $pesan = $row['pesan'];
                          $potpesan = substr($pesan,0, 50);
                          echo $potpesan;
                        ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td>
                      <a class="btn btn-success" href="<?php echo base_url('index.php/kontak/edit_kontak/'.$row['id']);?>"><i class="icon_check_alt2"></i> Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url('index.php/kontak/hapus_kontak/'.$row['id']);?>" onClick="return confirm('yakin ingin menghapus ?')"><i class="icon_close_alt2"></i> Hapus</a>
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