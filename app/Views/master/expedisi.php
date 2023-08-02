<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Management Data Expedisi
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>


<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addModal">
    <i class="fa fa-plus-circle"></i> Tambah Expedisi
</button>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= session()->getFlashdata('sukses'); ?>

<table class="table table-striped table-bordered" id="example1" width: 70%>
    <thead>
        <tr>
            <th style="width:5%;">No</th>
            <th>Nama Expedisi</th>
            <th style="width:10%;">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $nomor = 1;
        foreach ($expedisi as $row) :
        ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row->nama_expedisi; ?></td>

                <td>
                    <a href="#" class="btn btn-info btn-sm btn-edit" title="Edit Expedisi" data-id_expedisi="<?= $row->id_expedisi; ?>" data-nama_expedisi="<?= $row->nama_expedisi; ?>">
                        <i class="fa fa-pen"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Hapus Surat" data-id_expedisi="<?= $row->id_expedisi; ?>">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                </td>

            </tr>

        <?php endforeach; ?>


    </tbody>
</table>

<?= form_open('expedisi/tambah'); ?>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Expedisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Expedisi</label>
                    <input type="text" class="form-control" name="nama_expedisi" placeholder="Nama Expedisi">
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

<?= form_open('expedisi/hapus'); ?>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h2>Expedisi ini akan di hapus ??</h2>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_surat" id="IDsurat">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<script>
    $('.btn-delete').on('click', function() {
        // get data from button edit
        const id_expedisi = $(this).data('id_expedisi');
        // Set data to Form Edit
        $('#IDexpedisi').val(id_expedisi);
        // Call Modal Edit
        $('#deleteModal').modal('show');
    });
</script>

<?= $this->endSection('isi') ?>