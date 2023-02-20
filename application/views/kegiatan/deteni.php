   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>

       <div class="row">
          <div class="col-lg-6">
              <?php echo $this->session->flashdata('message'); ?>
              <div class="card">
                <div class="card-header">
                  Input deteni
                </div>
                <div class="card-body">
                   <?php echo form_open_multipart('kegiatan/deteni'); ?>
                      <div class="form-group row">
                          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="nama" value="<?php echo set_value('nama')?>">
                            <?php echo form_error('nama','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="jk" name="jk">
                            <option value="">--Pilih jenis Kelamin--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                            <?php echo form_error('jk','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat')?>">
                            <?php echo form_error('alamat','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl_l" class="col-sm-3 col-form-label">Tgl Lahir</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_l" name="tgl_l" value="<?php echo set_value('tgl_l')?>">
                            <?php echo form_error('tgl_l','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="paspor" class="col-sm-3 col-form-label">No Paspor</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="paspor" name="paspor" value="<?php echo set_value('paspor')?>">
                            <?php echo form_error('paspor','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="masa" class="col-sm-3 col-form-label">Masa Berlaku</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="masa" name="masa" value="<?php echo set_value('masa')?>">
                            <?php echo form_error('masa','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="niora" class="col-sm-3 col-form-label">Niora</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="niora" name="niora" value="<?php echo set_value('niora')?>">
                            <?php echo form_error('niora','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="kebangsaan" class="col-sm-3 col-form-label">Kebangsaan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" value="<?php echo set_value('kebangsaan')?>">
                            <?php echo form_error('kebangsaan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="sponsor" class="col-sm-3 col-form-label">Perusahaan/Sponsor</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="sponsor" name="sponsor" >
                            <?php echo form_error('sponsor','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" >
                            <?php echo form_error('jabatan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="jenis_doc" class="col-sm-3 col-form-label">Jenis Dokumen</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jenis_doc" name="jenis_doc" >
                            <?php echo form_error('jenis_doc','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl_masuk" class="col-sm-3 col-form-label">Tgl Masuk</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" >
                            <?php echo form_error('tgl_masuk','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl_keluar" class="col-sm-3 col-form-label">Tgl keluar</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" >
                            <?php echo form_error('tgl_keluar','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="pasal" class="col-sm-3 col-form-label">Pasal</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pasal" name="pasal" >
                            <?php echo form_error('pasal','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="pelanggaran" class="col-sm-3 col-form-label">Pelanggaran</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" >
                            <?php echo form_error('pelanggaran','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="no_putusan" class="col-sm-3 col-form-label">No Putusan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_putusan" name="no_putusan" >
                            <?php echo form_error('no_putusan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="isi" class="col-sm-3 col-form-label">Isi Putusan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="isi" name="isi" >
                            <?php echo form_error('isi','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl_putusan" class="col-sm-3 col-form-label">Tgl Putusan</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_putusan" name="tgl_putusan" >
                            <?php echo form_error('tgl_putusan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                                        
                      <div class="form-group row">
                          <label for="foto_paspor" class="col-sm-3 col-form-label">Foto Paspor</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto_paspor" name="foto_paspor">
                                  <label class="custom-file-label" for="foto_paspor" >Choose file</label>
                              </div>
                              <?php echo form_error('foto_paspor','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="foto_wna" class="col-sm-3 col-form-label">Foto WNA</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto_wna" name="foto_wna">
                                  <label class="custom-file-label" for="foto_wna" >Choose file</label>
                              </div>
                              <?php echo form_error('foto_wna','<small class="text-danger pl-3">','</small>')?>
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
                   Data deteni Masuk
                </div>
                <div class="card-body">
                  <table class="table table-hover" id="projust">
                          <thead>
                          <tr>
                               <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Aksi</th>
                          </tr>
                          </thead>
                          <tbody>

                              <?php $i=1; ?>

                              <?php foreach ($deteni as $d) : ?>

                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $d['nama']; ?></td>
                                  <td>
                                    <a href="<?php echo base_url(); ?>kegiatan/detail_deteni/<?php echo$d['id_deteni']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/edit_deteni/<?php echo$d['id_deteni']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/delete_deteni/<?php echo$d['id_deteni']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
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

            