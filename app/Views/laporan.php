<?= $this->extend ('layouts/admin')?>
<?= $this->section('content')?>
<?php
if (session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?= session()->getFlashdata('success')?>
<button type="button" class="close" data-dismiss="alert" aria-label="close">Success</button>
</div>
<?php
}
?>
<div class="container">
    <h3 class="h1">Laporan</h3>
    
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Tanggal</th>
            <th>No_meja</th>
            <th>Nama_pemesan</th>
            <th>Total_harga</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($laporan as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['tanggal']?></td>
                <td><?=$row['no_meja']?></td>
                <td><?=$row['nama_pemesan']?></td>
                <td><?=$row['total_harga']?></td>
                <td>
                    <label for="status" class="btn btn-success">Lunas</label>    
                </td>
            </tr>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div>

<?= $this->endSection()?>