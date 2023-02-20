    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
        
        <div class="card">
		  <h5 class="card-header">#</h5>
		  <div class="card-body">
		    
		    	<div class="col-lg">
		    		<div class="row">
			    		<div class="col-lg-2">
			    			<img src="<?php echo base_url('assets/berkas/tak/'). $tak['foto_wna'] ?>" class="img-thumbnail">
			    			<img src="<?php echo base_url('assets/berkas/tak/'). $tak['foto_paspor'] ?>" class="img-thumbnail mt-3">
			    		</div>
			    		
			    		<div class="col-lg-5">
				    		<table class="table table-bordered table-sm">
				    			<tr>
				    				<th>Nama</th>
				    				<td><?php echo$tak['nama']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Jenis Kelamin</th>
				    				<td><?php echo$tak['jk']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>No Pesawat</th>
				    				<td><?php echo$tak['alamat']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Lahir</th>
				    				<td><?php echo$tak['tgl_l']; ?></td>
				    			</tr>
				    			<!-- <tr>
				    				<th>No Paspor</th>
				    				<td><?php echo$tak['paspor']; ?></td>
				    			</tr> -->
				    			<!-- <tr>
				    				<th>Masa Berlaku</th>
				    				<td><?php echo$tak['masa']; ?></td>
				    			</tr>
				    			<tr> -->
				    				<th>Tempat Duduk</th>
				    				<td><?php echo$tak['niora']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>NO hp</th>
				    				<td><?php echo$tak['kebangsaan']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Status</th>
				    				<td><?php echo$tak['sponsor']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Jabatan</th>
				    				<td><?php echo$tak['jk']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Petugas</th>
				    				<td><?php echo$tak['jenis_doc']; ?></td>
				    			</tr>
				    			
				    		</table>
				    	</div>

				    	<div class="col-lg">
				    		<table class="table table-bordered table-sm">
				    			<tr>
				    				<th>Jam ETD</th>
				    				<td><?php echo$tak['pasal']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Keterangan</th>
				    				<td><?php echo$tak['pelanggaran']; ?></td>
				    			</tr>
				    			<!-- <tr>
				    				<th>No Putusan</th>
				    				<td><?php echo$tak['no_putusan']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Isi Putusan</th>
				    				<td><?php echo$tak['isi']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Putusan</th>
				    				<td><?php echo$tak['tgl_putusan']; ?></td>
				    			</tr> -->
				    			
				    		</table>
				    	</div>

		    		</div>
		    	</div>

		  </div>
		  <div>
		  	<a href="<?php echo base_url('kegiatan/tak') ?>" style="float: right;" class=" btn btn-primary btn-sm mt-0 mb-3 mr-5"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</a>
		  </div>
		  
		</div>

    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->