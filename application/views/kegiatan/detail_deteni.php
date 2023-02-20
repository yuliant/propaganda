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
			    			<img src="<?php echo base_url('assets/berkas/deteni/'). $deteni['foto_wna'] ?>" class="img-thumbnail">
			    			<img src="<?php echo base_url('assets/berkas/deteni/'). $deteni['foto_paspor'] ?>" class="img-thumbnail mt-3">
			    		</div>
			    		
			    		<div class="col-lg-5">
				    		<table class="table table-bordered table-sm">
				    			<tr>
				    				<th>Nama</th>
				    				<td><?php echo$deteni['nama']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Jenis Kelamin</th>
				    				<td><?php echo$deteni['jk']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Alamat</th>
				    				<td><?php echo$deteni['alamat']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Lahir</th>
				    				<td><?php echo$deteni['tgl_l']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>No Paspor</th>
				    				<td><?php echo$deteni['paspor']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Masa Berlaku</th>
				    				<td><?php echo$deteni['masa']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Niora</th>
				    				<td><?php echo$deteni['niora']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Kebangsaan</th>
				    				<td><?php echo$deteni['kebangsaan']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Perusahaan/Sponsor</th>
				    				<td><?php echo$deteni['sponsor']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Jabatan</th>
				    				<td><?php echo$deteni['jk']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Jenis Dokumen</th>
				    				<td><?php echo$deteni['jenis_doc']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Masuk</th>
				    				<td><?php echo$deteni['tgl_masuk']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Keluar</th>
				    				<td><?php echo$deteni['tgl_keluar']; ?></td>
				    			</tr>
				    			
				    		</table>
				    	</div>

				    	<div class="col-lg">
				    		<table class="table table-bordered table-sm">
				    			<tr>
				    				<th>Pasal</th>
				    				<td><?php echo$deteni['pasal']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Pelanggaran</th>
				    				<td><?php echo$deteni['pelanggaran']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>No Putusan</th>
				    				<td><?php echo$deteni['no_putusan']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Isi Putusan</th>
				    				<td><?php echo$deteni['isi']; ?></td>
				    			</tr>
				    			<tr>
				    				<th>Tgl Putusan</th>
				    				<td><?php echo$deteni['tgl_putusan']; ?></td>
				    			</tr>
				    			
				    		</table>
				    	</div>

		    		</div>
		    	</div>

		  </div>
		  <div>
		  	<a href="<?php echo base_url('kegiatan/deteni') ?>" style="float: right;" class=" btn btn-primary btn-sm mt-0 mb-3 mr-5"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</a>
		  </div>
		  
		</div>

    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->