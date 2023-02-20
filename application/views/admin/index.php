    <!-- Begin Page Content -->
    <div class="container-fluid">
    	
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
        <?php if(validation_errors()) : ?>
        	<div class="alert alert-danger col-lg-4" role="alert">
        		<?php echo validation_errors(); ?>
        	</div>
        <?php endif; ?>
                    	

        <?php echo $this->session->flashdata('message'); ?>

        
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal"><i class="fas fa-plus "></i>  Add New User</a>

        <table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Username</th>
				<th scope="col">Role Id</th>
							      
			</tr>
		</thead>
		<tbody>

			<?php $i=1; ?>

			<?php foreach ($userall as $u) : ?>

			<tr>
				<th scope="row"><?php echo $i; ?></th>
				<td><?php echo $u['name'] ?></td>
				<td><?php echo $u['email'] ?></td>
				<td><?php echo $u['role_id'] ?></td>
							     

				<?php $i++; ?>

			<?php endforeach; ?>

		</tbody>
		</table>



    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

	      <form action="<?php echo base_url('admin/index'); ?>" method="post">
	      <div class="modal-body">

	        

			<div class="form-group">
				<input type="text" class="form-control" id="email" name="email" placeholder="Username">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
			</div>

			<label>Default Password : 1234</label>

			
			
	      </div>     
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Add</button>
	      </div>
	      </form>

    </div>
  </div>
</div>
            