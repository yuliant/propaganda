    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
        
        <div class="card">
		  <h5 class="card-header">#</h5>
		  <div class="card-body">
		    
		    	<div class="col-lg">

		    		<div class="row">
		    			<div class="col-lg-5">
				    		<table class="table table-bordered table-sm">
				    			<tr>
				    				<th>Nama Kegiaan</th>
				    				<td><?php echo$pora['kegiatan']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tempat Kegiatan</th>
				    				<td><?php echo$pora['tempat']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Kegiatan</th>
				    				<td><?php echo$pora['tgl']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Nama Anggota</th>
				    				<td><?php echo$pora['anggota']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Waktu</th>
				    				<td><?php echo$pora['target']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Keterangan</th>
				    				<td><?php echo$pora['hasil']; ?></td>
				    			</tr>
				    		</table>
				    	</div>
				    	<div class="col-lg-2">
		    				<label>Foto 1</label>
			    			<img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto1'] ?>" class="img-thumbnail ">
			    		</div>
			    		<div class="col-lg-2">
			    			<label>Foto 2</label>
			    			<img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto2'] ?>" class="img-thumbnail ">
			    		</div>
			    		<div class="col-lg-2">
			    			<label>Foto 3</label>
			    			<img src="<?php echo base_url('assets/berkas/pora/'). $pora['foto3'] ?>" class="img-thumbnail ">
			    		</div>
		    		</div>
		    		<div class="row">


		    		</div>
		    	</div>

		  </div>
		  <div>
		  	<a href="<?php echo base_url('kegiatan/pora') ?>" style="float: right;" class=" btn btn-primary btn-sm mt-0 mb-3 mr-5"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</a>
		  </div>
		  
		</div>

    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->