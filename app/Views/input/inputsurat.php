<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Input Penerimaan Surat Masuk
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>


<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<section class="content">

    <?= session()->getFlashdata('sukses'); ?>
    <?= form_open('input/simpan'); ?>
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">

            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Expedisi</label>
                            <font color="red">*</font>
                            <select id="expedisi" name="expedisi" class="form-control select2" style="width: 100%;" required>
                                <option selected value="">Pilih...</option>
                                <?php foreach ($tampilexpedisi as $ex) : ?>
                                    <option value="<?= $ex['nama_expedisi'] ?>"><?= $ex['nama_expedisi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Jumlah Surat</label>
                            <font color="red">*</font>
                            <input type="number" class="form-control" id="jml_surat" name="jml_surat" placeholder="..." required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Tanggal Diterima</label>
                            <font color="red">*</font>
                            <input type="date" class="form-control" name="diterima" value="<?= date('Y-m-d') ?>">
                            <!-- <input type="date" name="diterima" id="diterima" class="form-control" value="<?= date('Y-m-d') ?>"> -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jam Diterima</label>
                            <font color="red">*</font>
                            <br>
                            <input type="time" id="jam_diterima" name="jam_diterima" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tujuan Surat</label>
                            <font color="red">*</font>
                            <!-- <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" placeholder="Tujuan Surat"> </input> -->
                            <select id="tujuan_surat" name="tujuan_surat" class="form-control select2" style="width: 100%;" required>
                                <option selected value="">Tujuan Surat</option>
                                <?php foreach ($tampilsatker as $sat) : ?>
                                    <option value="<?= $sat['nama_satker'] ?>"><?= $sat['nama_satker'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Asal Surat</label>
                            <font color="red">*</font>
                            <textarea class="form-control" rows="4" id="asal_surat" name="asal_surat" placeholder="..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Penerima Surat</label>
                            <font color="red">*</font>
                            <select id="penerima" name="penerima" class="form-control select2" style="width: 100%;" required>
                                <option selected value="">Penerima Surat</option>
                                <?php foreach ($tampilpenerima as $pe) : ?>
                                    <option value="<?= $pe['nama_penerima'] ?>"><?= $pe['nama_penerima'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="status_surat" name="status_surat" value="Terkirim"> -->
                        </div>
                    </div>
                </div>
                <style>
                    .blink {
                        animation: blinker 1.5s linear infinite;
                        color: red;
                        font-family: sans-serif;
                    }

                    @keyframes blinker {
                        80% {
                            opacity: 0;
                        }
                    }
                </style>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="4" id="keterangan" name="keterangan" placeholder="..."></textarea>
                            <font color="red">
                                <p>Harap mengisi kolom keterangan jika masih ada informasi yang penting.</p>
                            </font>
                            <!-- <input type="hidden" name="status_surat" value="Terkirim"> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary btn-lg w-100 br-7">Simpan</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="content">
    <?= form_open('input/simpan'); ?>
    <div class="container-fluid">
        <div class="card card-default">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label>Expedisi</label>
                            <select id="expedisi" name="expedisi" class="form-control select2" style="width: 100%;">
                                <option selected value="">Pilih Expedisi</option>
                                <?php foreach ($tampilexpedisi as $ex) : ?>
                                    <option value="<?= $ex['nama_expedisi'] ?>"><?= $ex['nama_expedisi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-2">
                            <label>Jumlah Surat</label>
                            <input type="number" class="form-control" id="jml_surat" name="jml_surat" placeholder="Jumlah Surat">
                        </div>
                        <br>
                        <div class="col-md-2">
                            <label>Tanggal Diterima</label>
                            <input type="date" name="diterima" id="diterima" class="form-control">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <label>Jam Diterima</label>
                            <br>
                            <input type="time" id="jam_diterima" name="jam_diterima" required>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label>Tujuan Surat</label>
                            <select id="tujuan_surat" name="tujuan_surat" class="form-control select2" style="width: 100%;">
                                <option selected value="">Tujuan Surat</option>
                                <?php foreach ($tampilsatker as $sat) : ?>
                                    <option value="<?= $sat['nama_satker'] ?>"><?= $sat['nama_satker'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label>Asal Surat</label>
                            <textarea class="form-control" rows="3" id="asal_surat" name="asal_surat" placeholder=""> </textarea>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <label>Penerima Surat</label>
                            <select id="penerima" name="penerima" class="form-control select2" style="width: 100%;">
                                <option selected value="">Penerima Surat</option>
                                <?php foreach ($tampilpenerima as $pe) : ?>
                                    <option value="<?= $pe['nama_penerima'] ?>"><?= $pe['nama_penerima'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder=""> </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <center>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section> -->


<?= form_close(); ?>

<script>
    function clear() {
        $('#expedisi').val('');
        $('#jml_surat').val('');
        $('#tujuan_surat').val('');
        $('#asal_surat').val('');
        $('#diterima').val('');
        $('#penerima').val('');
        $('#keterangan').val('');
        // $('#tgl_kembali').val('');
    }

    $(document).ready(function() {
        clear();

        $('#btnClear').click(function(e) {
            clear();
        });
    });
</script>
<?= $this->endSection('isi') ?>