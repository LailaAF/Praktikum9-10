<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
              <div class="container">
              <h1>Form Edit Mahasiswa</h1>
              <?php echo form_open("mahasiswa/save") ?>
                <div class="form-group row">
                  <label for="nim" class="col-4 col-form-label">NIM :</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-id-card-o"></i>
                        </div>
                      </div> 
                    <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" value="<?php echo $obj_mahasiswa->nim?>" class="form-control">
                  </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Lengkap :</label> 
                  <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-user-circle"></i>
                          </div>
                        </div> 
                      <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" value="<?php echo $obj_mahasiswa->nama?>" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Jenis Kelamin :</label>
                  <div class="col-8">
                    <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fa fa-transgender"></i>
                            </div>
                          </div> 
                      <input id="gender" name="gender" placeholder="Masukkan Jenis Kelamin Anda" type="text" value="<?php echo $obj_mahasiswa->gender?>" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir :</label> 
                  <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-location-arrow"></i>
                          </div>
                        </div> 
                      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir Anda" type="text" value="<?php echo $obj_mahasiswa->tmp_lahir?>" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir :</label> 
                  <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </div>
                        </div> 
                      <input id="tgl_lahir" name="tgl_lahir" type="text" value="<?php echo $obj_mahasiswa->tgl_lahir?>" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ipk" class="col-4 col-form-label">IPK :</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-pencil-square-o"></i>
                        </div>
                      </div> 
                    <input id="ipk" name="ipk" type="text" value="<?php echo $obj_mahasiswa->ipk?>" class="form-control">
                  </div>
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              <?php echo form_close() ?>
              </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
