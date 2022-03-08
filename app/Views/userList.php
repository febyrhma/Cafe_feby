<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if (session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
    <button type="button" class="success" data-dismiss="alert" aria-label="close">success</button>
</div>
<?php
}
?>
<table class="container">
    <h3>Data User</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addUser">Tambah Data</button>

    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <!-- <th>Password</th> -->
            <th>Role</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['username']?></td>
                <!-- <td><?=$row['password']?></td> -->
                <td><?=$row['role']?></td>
                <td>
                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editUser-<?=$row['id']?>"
                        btn-sm btn-edit>Edit</a>
                    <a href="<?= base_url ('userController/delete/'.$row['id'])?>"
                        onclick="return confirm('Yakin Mau Dihapus?')"
                        class="btn btn-danger btn-sm btn-delete">Hapus</a>
                </td>
            </tr>

            <form action="<?=base_url('user/edit/'.$row['id'])?>" method="post">
                <div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelladby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama User"
                                        value="<?=$row['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username"
                                        value="<?=$row['username']?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" id="password" class="form-control"
                                        placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label>User</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1"
                                            value="kasir" <?=$row['role']=="kasir"?"checked":""?>>
                                        <label class="form-check-label" for="flexRadioDefault1">Kasir</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1"
                                            value="manager" <?=$row['role']=="manager"?"checked":""?>>
                                        <label class="form-check-label" for="flexRadioDefault1">Manager</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1"
                                            value="admin" <?=$row['role']=="admin"?"checked":""?>>
                                        <label class="form-check-label" for="flexRadioDefault1">Admin</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        <?php
        $no++;
        endforeach?>
        </tbody>
    </table>

    <!-- Add Product -->
    <form action="<?=base_url('users')?>" method="post">
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelladby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Nama User</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama User">
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" id="password" class="form-control"
                                placeholder="password">
                        </div>

                        <div class="form-group">
                            <label>User</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1"
                                    value="kasir">
                                <label class="form-check-label" for="flexRadioDefault1">Kasir</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2"
                                    value="manager">
                                <label class="form-check-label" for="flexRadioDefault1">Manager</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3"
                                    value="admin">
                                <label class="form-check-label" for="flexRadioDefault1">Admin</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>

    <?= $this->endSection()?>
    <div class="modal fade" id="adddetail" tabindex="-1" aria-labelladby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>