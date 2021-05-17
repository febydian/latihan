<div class="main-content">
    <section class="section">
        <div class="card" style="margin-top: 80px">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md 6">
                        <h3 class="card-title"><strong>Data Mobil</strong></h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">+ Tambah</button>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5px">No</th>
                            <th>Mobil</th>
                            <th>Foto</th>
                            <th>No Plat</th>
                            <th>Merk Mobil</th>
                            <th>Warna</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th style="width: 120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_mobil as $dm) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dm['nama_mobil'] ?></td>
                                <td><?= $dm['img_mobil'] ?></td>
                                <td><?= $dm['no_plat'] ?></td>
                                <td><?= $dm['merk_mobil'] ?></td>
                                <td><?= $dm['warna'] ?></td>
                                <td><?= $dm['tahun'] ?></td>
                                <td><?php
                                    if ($dm['status'] == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                                <td><?= $dm['harga'] ?></td>
                                <td>
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="#edit<?= $value['id_mobil'] ?>">Edit</button>
                                    <button class="btn btn-danger " data-toggle="modal" data-target="#delete<?= $value['id_mobil'] ?>">Delete</button> -->
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <form role="form" action="<?= base_url('data_mobil/tambah') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">tambah Mobil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="" name="nama_mobil">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="text" class="form-control" value="" name="img_mobil">
                    </div>
                    <div class="form-group">
                        <label>No Plat</label>
                        <input type="text" class="form-control" value="" name="no_plat">
                    </div>
                    <div class="form-group">
                        <label>Merk Mobil</label>
                        <input type="text" class="form-control" value="" name="merk_mobil">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" class="form-control" value="" name="warna">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="date" class="form-control" value="" name="tahun">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" value="" name="status">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" value="" name="harga">
                    </div>
                </div>

                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>