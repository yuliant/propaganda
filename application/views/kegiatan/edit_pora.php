    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
                    
        <div class="row">
        	<div class="col-lg-10">
	        	<div class="card">
				  <h5 class="card-header">Featured</h5>
				  <div class="card-body">
				    <?php echo form_open_multipart('kegiatan/edit_pora/'.$pora['id_pora']); ?>
				    <input type="text" name="id_pora" id="id_pora" value="<?php echo $pora['id_pora']?>" hidden />
                        <div class="form-group row">
                            <label for="kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                        	  <div class="col-sm-8">
                              <input type="text" class="form-control" id="name" name="kegiatan" value="<?php echo $pora['kegiatan']?>">
                              <?php echo form_error('kegiatan','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-3 col-form-label">Tempat Kegiatan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $pora['tempat']?>">
                              <?php echo form_error('tempat','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl" class="col-sm-3 col-form-label">Tgl Kegiatan</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $pora['tgl']?>">
                              <?php echo form_error('tgl','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anggota" class="col-sm-3 col-form-label">Nama Anggota</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anggota" name="anggota" value="<?php echo $pora['anggota']?>">
                              <?php echo form_error('anggota','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="target" class="col-sm-3 col-form-label">Waktu</label>
                            <div class="col-sm-8">
                              <input type="time" class="form-control" id="target" name="target" value="<?php echo $pora['target']?>">
                              <?php echo form_error('target','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hasil" class="col-sm-3 col-form-label">Keteranganl</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="hasil" name="hasil" value="<?php echo $pora['hasil']?>">
                              <?php echo form_error('hasil','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>

                        <div class="form-group row">
          						    <label for="foto1" class="col-sm-3 col-form-label">Foto 1</label>
          						    <div class="col-sm-8">
          						    	<div class="row">
          						    		<div class="col-sm-4">
          						    			<img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto1'] ?>" class="img-thumbnail">
          						    		</div>
          						    	
          						    	<div class="col-sm-8">
          						    		<div class="custom-file">
          						    			<input type="file" class="custom-file-input" id="foto1" name="foto1">
          	                     <label class="custom-file-label" for="foto1" >Choose file</label>
          						    		</div>
          						    	</div>

          						    	</div>
          						    </div>
          			  			</div>

          			  			<div class="form-group row">
                          <label for="foto2" class="col-sm-3 col-form-label">Foto 2</label>
                          <div class="col-sm-8">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto2'] ?>" class="img-thumbnail">
                              </div>
                            
                            <div class="col-sm-8">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto2" name="foto2">
                                 <label class="custom-file-label" for="foto2" >Choose file</label>
                              </div>
                            </div>

                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="foto3" class="col-sm-3 col-form-label">Foto 3</label>
                          <div class="col-sm-8">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto3'] ?>" class="img-thumbnail">
                              </div>
                            
                            <div class="col-sm-8">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto3" name="foto3">
                                 <label class="custom-file-label" for="foto3" >Choose file</label>
                              </div>
                            </div>

                            </div>
                          </div>
                        </div>

                        <button class="btn btn-success btn-sm float-right ml-3" type="submit" >Simpan</button>
                        <a href="<?php echo base_url('kegiatan/pora') ?>" class="btn btn-primary btn-sm float-right" >Kembali</a>
                    </form>
				  </div>
				</div>        		
        	</div>
        	
        </div>
    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            