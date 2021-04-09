<section id="main-content">
  <section class="wrapper">
  <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Data</h3>
  </div>
  </div>
  <!-- Form validations -->
  <div class="row">
  <div class="col-lg-12">
  <section class="panel">
    <div class="panel-body">
      <div class="form">
        <?php if ($dataEdit) {
            $id = $dataEdit->id;
            $pesan = $dataEdit->pesan;
            $nama = $dataEdit->nama;
            $email = $dataEdit->email;
            $status = $dataEdit->status;
          }else{
            $pesan = "";
            $nama = "";
            $email = "";
            $status = "";
          } ?>
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('index.php/kontak/update/'.$id) ?>">
          <?php echo validation_errors(); ?>
           <div class="form-group ">
            <label for="cpesan" class="control-label col-lg-2">Pesan <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cpesan" name="pesan" type="text" value="<?php echo $pesan ?>">
            </div>
          </div>
           <div class="form-group ">
            <label for="cnama" class="control-label col-lg-2">Nama <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cnama" name="nama" type="text" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cemail" class="control-label col-lg-2">Email <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cemail" name="email" type="text" value="<?php echo $email ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cstatus" class="control-label col-lg-2">Status <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cstatus" name="status" type="text" value="<?php echo $status ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
  </section>
</section>