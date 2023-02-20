    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
                    
        <div class="row">
        	<div class="col-lg-10">
	        	<div class="card">
				  <h5 class="card-header">Featured</h5>
				  <div class="card-body">
				    <?php echo form_open_multipart('kegiatan/edit_bap/'.$bap['id_bap']); ?>
				    <input type="text" name="id_bap" id="id_bap" value="<?php echo $bap['id_bap']?>" hidden />
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        	  <div class="col-sm-8">
                              <input type="text" class="form-control" id="name" name="nama" value="<?php echo $bap['nama']?>">
                              <?php echo form_error('nama','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                              <select class="form-control" id="jk" name="jk">
                              <option value="<?php echo $bap['jk']?>"><?php echo $bap['jk']?></option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                              <?php echo form_error('jk','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $bap['alamat']?>">
                              <?php echo form_error('alamat','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_l" class="col-sm-3 col-form-label">Tgl Lahir</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="tgl_l" name="tgl_l" value="<?php echo $bap['tgl_l']?>">
                              <?php echo form_error('tgl_l','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paspor" class="col-sm-3 col-form-label">No Paspor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="paspor" name="paspor" value="<?php echo $bap['paspor']?>">
                              <?php echo form_error('paspor','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="masa" class="col-sm-3 col-form-label">Masa Berlaku</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="masa" name="masa" value="<?php echo $bap['masa']?>">
                              <?php echo form_error('masa','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="niora" class="col-sm-3 col-form-label">Niora</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="niora" name="niora" value="<?php echo $bap['niora']?>">
                              <?php echo form_error('niora','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kebangsaan" class="col-sm-3 col-form-label">Kebangsaan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" value="<?php echo $bap['kebangsaan']?>">
                              <?php echo form_error('kebangsaan','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                       	<div class="form-group row">
                           	<label for="sponsor" class="col-sm-3 col-form-label">Perusahaan/Sponsor</label>
                          	<div class="col-sm-8">
                           		<input type="text" class="form-control" id="sponsor" name="sponsor" value="<?php echo $bap['sponsor']?>">
                            	<?php echo form_error('sponsor','<small class="text-danger pl-3">','</small>')?>
                          	</div>
                       	</div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $bap['jabatan']?>">
                              <?php echo form_error('jabatan','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_doc" class="col-sm-3 col-form-label">Jenis Dokumen</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="jenis_doc" name="jenis_doc" value="<?php echo $bap['jenis_doc']?>">
                              <?php echo form_error('jenis_doc','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pasal" class="col-sm-3 col-form-label">Pasal</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="pasal" name="pasal" value="<?php echo $bap['pasal']?>">
                              <?php echo form_error('pasal','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pelanggaran" class="col-sm-3 col-form-label">Pelanggaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" value="<?php echo $bap['pelanggaran']?>" >
                              <?php echo form_error('pelanggaran','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_putusan" class="col-sm-3 col-form-label">No Putusan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="no_putusan" name="no_putusan" value="<?php echo $bap['no_putusan']?>" >
                              <?php echo form_error('no_putusan','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-3 col-form-label">Isi Putusan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="isi" name="isi" value="<?php echo $bap['isi']?>" >
                              <?php echo form_error('isi','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_putusan" class="col-sm-3 col-form-label">Tgl Putusan</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="tgl_putusan" name="tgl_putusan" value="<?php echo $bap['tgl_putusan']?>">
                              <?php echo form_error('tgl_putusan','<small class="text-danger pl-3">','</small>')?>
                            </div>
                        </div>

                        <div class="form-group row">
						    <label for="tgl_putusan" class="col-sm-3 col-form-label">Foto Paspor</label>
						    <div class="col-sm-8">
						    	<div class="row">
						    		<div class="col-sm-4">
						    			<img src="<?php echo base_url('assets/berkas/bap/'). $bap['foto_paspor'] ?>" class="img-thumbnail">
						    		</div>
						    	
						    	<div class="col-sm-8">
						    		<div class="custom-file">
						    			<input type="file" class="custom-file-input" id="foto_paspor" name="foto_paspor">
	                                    <label class="custom-file-label" for="foto_paspor" >Choose file</label>
						    		</div>
						    	</div>

						    	</div>
						    </div>
			  			</div>

			  			<div class="form-group row">
						    <label for="tgl_putusan" class="col-sm-3 col-form-label">Foto WNA</label>
						    <div class="col-sm-8">
						    	<div class="row">
						    		<div class="col-sm-4">
						    			<img src="<?php echo base_url('assets/berkas/bap/'). $bap['foto_wna'] ?>" class="img-thumbnail">
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

                        <button class="btn btn-success btn-sm float-right ml-3" type="submit" >Simpan</button>
                        <a href="<?php echo base_url('kegiatan/bap') ?>" class="btn btn-primary btn-sm float-right" >Kembali</a>
                    </form>
				  </div>
				</div>        		
        	</div>
        	
        </div>
    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            