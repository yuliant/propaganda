   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>

       <div class="row">
          <div class="col-lg-6">
              <?php echo $this->session->flashdata('message'); ?>
              <div class="card">
                <div class="card-header">
                  Input Agenda Kantor
                </div>
                <div class="card-body">
                   <?php echo form_open_multipart('kegiatan/pora'); ?>
                      <div class="form-group row">
                          <label for="kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="kegiatan" value="<?php echo set_value('kegiatan')?>">
                            <?php echo form_error('kegiatan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tempat" class="col-sm-3 col-form-label">Tempat Kegiatan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo set_value('tempat')?>">
                            <?php echo form_error('tempat','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl" class="col-sm-3 col-form-label">Tgl Kegiatan</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo set_value('tgl')?>">
                            <?php echo form_error('tgl','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="anggota" class="col-sm-3 col-form-label">Nama Petugas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="anggota" name="anggota" value="<?php echo set_value('anggota')?>">
                            <?php echo form_error('anggota','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="target" class="col-sm-3 col-form-label">Waktu</label>
                          <div class="col-sm-8">
                            <input type="time" class="form-control" id="target" name="target" value="<?php echo set_value('target')?>">
                            <?php echo form_error('target','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="hasil" class="col-sm-3 col-form-label">Keterangan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="hasil" name="hasil" value="<?php echo set_value('hasil')?>">
                            <?php echo form_error('hasil','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                                        
                      <div class="form-group row">
                          <label for="foto1" class="col-sm-3 col-form-label">Foto 1</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto1" name="foto1">
                                  <label class="custom-file-label" for="foto1" >Choose file</label>
                              </div>
                              <?php echo form_error('foto1','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="foto2" class="col-sm-3 col-form-label">Foto 2</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto2" name="foto2">
                                  <label class="custom-file-label" for="foto2" >Choose file</label>
                              </div>
                              <?php echo form_error('foto2','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="foto3" class="col-sm-3 col-form-label">Foto 3</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto3" name="foto3">
                                  <label class="custom-file-label" for="foto3" >Choose file</label>
                              </div>
                              <?php echo form_error('foto3','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                                        
                        <button class="btn btn-primary btn-sm float-right" type="submit" >
                            Save
                        </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <?php echo $this->session->flashdata('messagedt'); ?>
              <div class="card">
                <div class="card-header">
                   Data Pora Masuk
                </div>
                <div class="card-body">
                  <table class="table table-hover" id="projust">
                          <thead>
                          <tr>
                               <th scope="col">No</th>
                              <th scope="col">Nama TO</th>
                              <th scope="col">Aksi</th>
                          </tr>
                          </thead>
                          <tbody>

                              <?php $i=1; ?>

                              <?php foreach ($pora as $p) : ?>

                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $p['target']; ?></td>
                                  <td>
                                    <a href="<?php echo base_url(); ?>kegiatan/detail_pora/<?php echo$p['id_pora']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/edit_pora/<?php echo$p['id_pora']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/delete_pora/<?php echo$p['id_pora']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                  </td>

                                  <?php $i++; ?>

                                  <?php endforeach; ?>

                          </tbody>
                      </table>
                </div>
              </div>
          </div>

                    

   </div>
   <!-- /.container-fluid --> 

</div>
<!-- End of Main Content -->

            