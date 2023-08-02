<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Master Penerima
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addModalPenerima">
    <i class="fa fa-plus-circle"></i> Tambah Petugas Penerima Surat
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>


<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= session()->getFlashdata('sukses'); ?>

<table class="table table-striped table-bordered" id="example1" width: 70%>
    <thead>
        <tr>
            <th style="width:5%;">No</th>
            <th>Nama Petugas</th>
            <th style="width:10%;">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $nomor = 1;
        foreach ($petugas_penerima as $row) :
        ?>

            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row->nama_penerima; ?></td>

                <td>
                    <a href="#" class="btn btn-info btn-sm btn-editPenerima" title="Edit Petugas" data-id_penerima="<?= $row->id_penerima; ?>" data-nama_penerima="<?= $row->nama_penerima; ?>">
                        <i class="fa fa-pen"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-deletePenerima" title="Hapus Petugas" data-id_penerima="<?= $row->id_penerima; ?>">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                </td>

            </tr>


        <?php endforeach; ?>


    </tbody>
</table>

<?= form_open('penerima/tambah'); ?>
<div class="modal fade" id="addModalPenerima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas Penerima</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Petugas</label></label>
                    <input type="text" class="form-control" name="nama_penerima" placeholder="Masukan Nama Petugas">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<?= form_close(); ?>


<?= $this->endSection('isi') ?>