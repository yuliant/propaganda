<?php
$this->db->where('tgl_l >=', date('Y-m-d'));
$this->db->where('pasal >=', date('H:i:s'));
$tak = $this->db->get('tak')->result_array();
?>

<?php $i = 1; ?>
<?php foreach ($tak as $t) : ?>
    <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td><?php echo $t['nama']; ?></td>
        <td>
            <a href="<?php echo base_url(); ?>kegiatan/detail_tak/<?php echo $t['id_tak']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></a>
            <a href="<?php echo base_url(); ?>kegiatan/edit_tak/<?php echo $t['id_tak']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
            <a href="<?php echo base_url(); ?>kegiatan/delete_tak/<?php echo $t['id_tak']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>