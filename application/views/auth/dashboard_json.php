<?php
$this->db->where('tgl_l >=', date('Y-m-d'));
$this->db->where('pasal >=', date('H:i:s'));
$departure = $this->db->get('tak')->result_array();
?>

<?php $i = 1; ?>
<?php foreach ($departure as $t) : ?>
    <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td><?php echo $t['nama']; ?></td>
        <td><?php echo $t['tgl_l']; ?></td>
        <td><?php echo date("H:i", strtotime($t['pasal'])); ?></td>
        <td><?php echo $t['jabatan']; ?></td>
        <td><?php echo $t['alamat']; ?></td>
        <td><?php echo $t['paspor']; ?></td>
        <td><?php echo $t['niora']; ?></td>
        <td><?php echo $t['kebangsaan']; ?></td>
        <td><?php echo $t['jenis_doc']; ?></td>
        <td><?php echo $t['pelanggaran']; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>