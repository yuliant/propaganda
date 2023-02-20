    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
                    
        <div class="row">
        	<div class="col-lg-10">
	        	<div class="card">
				  <h5 class="card-header">Featured</h5>
				  <div class="card-body">
				    <?php echo form_open_multipart('kegiatan/edit_tak/'.$tak['id_tak']); ?>
				    <input type="text" name="id_tak" id="id_tak" value="<?php echo $tak['id_tak']?>" hidden />
                        <div class="card-body">
                   <?php echo form_open_multipart('kegiatan/tak'); ?>
                      <div class="form-group row">
                          <label for="tgl_l" class="col-sm-3 col-form-label">Tanggal</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_l" name="tgl_l" value="<?php echo set_value('tgl_l')?>">
                            <?php echo form_error('tgl_l','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="pasal" class="col-sm-3 col-form-label">Jam ETD/ETA</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pasal" name="pasal" >
                            <?php echo form_error('pasal','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
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
                          <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" >
                            <?php echo form_error('jabatan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="alamat" class="col-sm-3 col-form-label">No Pesawat</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat')?>">
                            <?php echo form_error('alamat','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="paspor" class="col-sm-3 col-form-label">Rute</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="paspor" name="paspor" value="<?php echo set_value('paspor')?>">
                            <?php echo form_error('paspor','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <!-- <div class="form-group row">
                          <label for="masa" class="col-sm-3 col-form-label">Masa Berlaku</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="masa" name="masa" value="<?php echo set_value('masa')?>">
                            <?php echo form_error('masa','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div> -->
                      <div class="form-group row">
                          <label for="niora" class="col-sm-3 col-form-label">Tempat Duduk</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="niora" name="niora" value="<?php echo set_value('niora')?>">
                            <?php echo form_error('niora','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="kebangsaan" class="col-sm-3 col-form-label">No HP</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" value="<?php echo set_value('kebangsaan')?>">
                            <?php echo form_error('kebangsaan','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="sponsor" class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="sponsor" name="sponsor" >
                            <?php echo form_error('sponsor','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>                      
                      <div class="form-group row">
                          <label for="jenis_doc" class="col-sm-3 col-form-label">Petugas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="jenis_doc" name="jenis_doc" >
                            <?php echo form_error('jenis_doc','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <!-- <div class="form-group row">
                          <label for="pasal" class="col-sm-3 col-form-label">Pasal</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pasal" name="pasal" >
                            <?php echo form_error('pasal','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div> -->
                      <div class="form-group row">
                          <label for="pelanggaran" class="col-sm-3 col-form-label">Keterangan</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" >
                            <?php echo form_error('pelanggaran','<small class="text-danger pl-3">','</small>')?>
                          </div>
                      </div>
                      <!-- <div class="form-group row">
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
                      </div> -->
                                        
                      <div class="form-group row">
                <label for="tgl_putusan" class="col-sm-3 col-form-label">Foto WNA</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-4">
                      <img src="<?php echo base_url('assets/berkas/tak/'). $tak['foto_wna'] ?>" class="img-thumbnail">
                    </div>
                  
                  <div class="col-sm-8">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_wna" name="foto_wna">
                                      <label class="custom-file-label" for="foto_wna" >Choose file</label>
                    </div>
                  </div>

                  </div>
                </div>
              </div>
                      <div class="form-group row">
                          <label for="foto_paspor" class="col-sm-3 col-form-label">Foto Paspor</label>
                          <div class="col-sm-7">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto_paspor" name="foto_paspor">
                                  <label class="custom-file-label" for="foto_paspor" >Choose file</label>
						    		</div>
						    	</div>

						    	</div>
						    </div>
			  			</div>

                        <button class="btn btn-success btn-sm float-right ml-3" type="submit" >Simpan</button>
                        <a href="<?php echo base_url('kegiatan/tak') ?>" class="btn btn-primary btn-sm float-right" >Kembali</a>
                    </form>
				  </div>
				</div>        		
        	</div>
        	
        </div>
    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            