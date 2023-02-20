<!-- Begin Page Content -->
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>

    	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newAnggaranModal"><i class="fas fa-plus "></i>  Tambah Anggaran</a>


    	<table class="table table-hover" id="bap">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Rp.</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>

                <?php $i=1; ?>

                <?php foreach ($ang as $a) : ?>

                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $a['nama']; ?></td>
                    <td><?php echo $a['jumlah']; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>kegiatan/edit_ang/<?php echo$a['id_ang']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                      <a href="<?php echo base_url(); ?>kegiatan/delete_ang/<?php echo$a['id_ang']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>

                    <?php $i++; ?>

                    <?php endforeach; ?>

            </tbody>
        </table>




    </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="newAnggaranModal" tabindex="-1" aria-labelledby="newAnggaranModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newAnggaranModalLabel">Buat Anggaran Baru</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

	      <form action="<?php echo base_url('kegiatan/anggaran'); ?>" method="post">
	      <div class="modal-body">
	        <div class="mb-3">
				  <label for="formGroupExampleInput" class="form-label">Anggaran</label>
				  <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Anggaran">
			</div>
			<div class="mb-3">
				  <label for="formGroupExampleInput" class="form-label">Jumlah</label>
				  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Input Jumlah Anggaran Rp.">
			</div>
	      </div>     
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Add</button>
	      </div>
	      </form>

    </div>
  </div>
</div>