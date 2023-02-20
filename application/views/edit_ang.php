 <!-- Begin Page Content -->
    <div class="container-fluid">
    	
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
        <div class=" col-lg-5">
        	<?php if(validation_errors()) : ?>
            	<div class="alert alert-danger col-lg-4" role="alert">
            		<?php echo validation_errors(); ?>
            	</div>
            <?php endif; ?>
           
            <?php echo $this->session->flashdata('message'); ?>


        	<div class="card shadow mb-4">
	            <!-- Card Header - Dropdown -->
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Anggaran</h6>
	            </div>

	            <?php 
	            $id_ang=$ang['id_ang']; ?>

	            <!-- Card Body -->
	            <form action="<?php echo base_url();?>dashboard/edit/<?php echo $id_ang; ?>" method="post">
	            	<div class="card-body mb-4">
		            	<div class="form-group row">
					      <label for="nama" class="col-lg-5 col-form-label">Nama Anggaran</label>
					      <div class="row col-lg">
					        <input style="text-align: right;" type="text" class="form-control" id="nama" name="nama" value="<?php echo $ang['nama'] ?>">
					        <?php echo form_error('nama','<small class="text-danger pl-3">','</small>')?>
					      </div>
						</div>
		             	<div class="form-group row">
					      <label for="nama" class="col-lg-5 col-form-label">Jumlah Anggaran</label>
					      <div class="row col-lg">
					        <input style="text-align: right;" type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo number_format($ang['jumlah'], 0, ".", ".")?>">
					        <?php echo form_error('jumlah','<small class="text-danger pl-3">','</small>')?>
					      </div>
						</div>
						<button type="submit" style="float: right;" class="btn btn-success btn-sm mr-0" >Simpan</button>
						<a href="<?php echo base_url('dashboard') ?>" class="btn btn-primary btn-sm mr-3" style="float: right;" >Kembali</a>
		            </div>
	            </form>

	        </div>
        	
        </div>
        

    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->