<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h5 class="card-title">Monthly Recap Report</h5> -->
                            <!-- notif error -->
                            <!-- <?= form_error('dtdc', '<div class="alert alert-danger" role ="alert">', '</div>'); ?> -->
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <!-- notif sukses -->
                            <?= $this->session->flashdata('message'); ?>
                            <div class="row justify-content-end">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newDtdcModal"> Add New DTDC</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="info-box mb-10">
                                    <div class="table table-responsive">
                                        <table class="table table-bordered table-striped table-hover ">
                                            <thead class="text-center text-dark">
                                                <tr>
                                                    <TH>#</th>
                                                    <TH>NIK</th>
                                                    <TH>Nama</th>
                                                    <TH>Alamat</th>
                                                    <TH>Kelurahan</th>
                                                    <TH>Kecamatan</th>
                                                    <TH>No Telpon</th>
                                                    <TH>Tanggapan</th>
                                                    <TH>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>

                                                <?php foreach ($dtdc as $m) : ?>

                                                    <tr>
                                                        <th class="text-center" scope="row"><?= $i; ?>
                                                        </th>
                                                        <td><?= $m['nik']; ?></td>
                                                        <td><?= $m['nama']; ?></td>
                                                        <td><?= $m['alamat']; ?></td>
                                                        <td><?= $m['namakel']; ?></td>
                                                        <td><?= $m['namakec']; ?></td>
                                                        <td><?= $m['nohp']; ?></td>
                                                        <td><?= $m['tanggapan']; ?></td>
                                                        <td class="text-center">
                                                            <a data-toggle="modal" data-target="#edit<?= $m['id']; ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-fw fa-edit" aria-hidden="true"></i></a>
                                                            <!-- <a data-toggle="modal" data-target="#edit<?= $m['id']; ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a> -->
                                                            <!-- <a href="" class="badge badge-danger">delete</a> -->
                                                            <a href="<?= site_url('dtdc/delete/' . $m['id']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $m['nama']; ?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>

                                                    <!-- Modal Edit Dtdc -->
                                                    <div class="modal fade" id="edit<?= $m['id']; ?>" tabindex="-1" aria-labelledby="editDtdcModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editDtdcModalLabel">Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="<?= base_url('dtdc/edit/') . $m['id']; ?>" method="POST">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" readonly value="<?= $m['id']; ?>" name="id" class="form-control">
                                                                        <div class="form-group row">
                                                                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $m['nik']; ?>" placeholder="NIK">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama']; ?>" placeholder="Nama">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat ..."><?= $m['alamat']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $m['namakel']; ?>" placeholder="Kelurahan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $m['namakec']; ?>" placeholder="Kecamatan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="nohp" class="col-sm-3 col-form-label">No Telpon</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $m['nohp']; ?>" placeholder="No Telpon">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputNik3" class="col-sm-3 col-form-label">Tanggapan</label>
                                                                            <div class="col-sm-9">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="tanggapan" value="Bersedia" <?= ($m['tanggapan'] == 'Bersedia') ? 'checked' : ''; ?>>
                                                                                    <label class="form-check-label">Bersedia Memilih</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="tanggapan" value="Tidak Bersedia" <?= ($m['tanggapan'] == 'Tidak Bersedia') ? 'checked' : ''; ?>>
                                                                                    <label class="form-check-label">Tidak Bersedia Memilih</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="tanggapan" value="Ragu-ragu" <?= ($m['tanggapan'] == 'Ragu-ragu') ? 'checked' : ''; ?>>
                                                                                    <label class="form-check-label">Ragu-Ragu</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal Edit Dtdc -->

                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal Add New Dtdc -->
<div class="modal fade" id="newDtdcModal" tabindex="-1" aria-labelledby="newDtdcModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="newDtdcModalLabel">Add New DTDC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('dtdc/add'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat ..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 col-form-label">No Telpon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Telpon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="radio" class="col-sm-3 col-form-label">Tanggapan</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tanggapan" value="Bersedia">
                                <label class="form-check-label">Bersedia Memilih</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tanggapan" value="Tidak Bersedia">
                                <label class="form-check-label">Tidak Bersedia Memilih</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tanggapan" value="Ragu-ragu">
                                <label class="form-check-label">Ragu-Ragu</label>
                            </div>
                        </div>
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
<!-- End Modal Add New Dtdc -->