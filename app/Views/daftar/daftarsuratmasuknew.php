<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Daftar Surat Masuk
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
<button type="button" class="btn btn-sm btn-primary" onclick="location.href=('input')">
  <i class="fa fa-plus-circle"></i> Input Surat
</button>

<?= $this->endSection('subjudul') ?>
<?= $this->section('isi') ?>
<?= session()->getFlashdata('sukses'); ?>



<table id="example1" class="table table-striped table-bordered" width: 100%>
  <thead>
    <tr>
      <th>No</th>
      <th>Expedisi</th>
      <th>Jumlah Surat</th>
      <th>Tujuan Surat</th>
      <th>Asal Surat</th>
      <th style="width:10%;">Tgl. Diterima</th>
      <th>Jam Diterima</th>
      <th style="width:5%;">Petugas</th>
      <th>Keterangan</th>
      <!-- <th style="width:10%;">Tgl. Kembali</th> -->
      <!-- <th style="width:10%;">Ket. Pengembalian</th> -->
      <th style="width:10%;">Status</th>
      <th style="width:10%;">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $nomor = 1;
    foreach ($suratmasuk as $row) :
      $kembali = $row->surat_kembali;
      if ($kembali == 1) {
        $status = "<span class=\"badge bg-danger\">Dikembalikan</span>";
      } else {
        $status = "<span class=\"badge bg-success\">Diterima</span>";
      }
    ?>

      <tr>
        <td><?= $nomor++; ?></td>
        <td><?= $row->expedisi; ?></td>
        <!-- <td><?= htmlspecialchars($row->jml_surat); ?></td> -->
        <td><?= $row->jml_surat; ?></td>
        <td><?= $row->tujuan_surat; ?></td>
        <!-- <td><?= $row->asal_surat; ?></td> -->
        <td><?= htmlspecialchars($row->asal_surat); ?></td>
        <td><?= $row->diterima; ?></td>
        <td><?= $row->jam_diterima; ?></td>
        <td><?= $row->penerima; ?></td>
        <td><?= htmlspecialchars($row->keterangan); ?></td>
        <!-- <td><?= $row->keterangan; ?></td> -->
        <!-- <td><?= $row->tgl_kembali; ?></td> -->
        <!-- <td><?= $row->ket_pengembalian; ?></td> -->
        <td>
          <a href="#" class="btn-detail" data-id_surat="<?= $row->id_surat; ?>" data-tgl_kembali="<?= $row->tgl_kembali; ?>" data-ket_pengembalian="<?= $row->ket_pengembalian; ?>"><?= $status ?></a>
        </td>
        <td>
          <a href="#" class="btn btn-info btn-sm" id="btn-edit" title="Kembalikan Surat" data-id_surat="<?= $row->id_surat; ?>" data-expedisi="<?= $row->expedisi; ?>" data-jml_surat="<?= $row->jml_surat; ?>" data-tujuan_surat="<?= $row->tujuan_surat; ?>" data-asal_surat="<?= $row->asal_surat; ?>" data-diterima="<?= $row->diterima; ?>" data-jam_diterima="<?= $row->jam_diterima ?>" data-penerima="<?= $row->penerima; ?>" data-keterangan="<?= $row->keterangan; ?>" data-tgl_kembali="<?= $row->tgl_kembali; ?>">
            <i class="fa fa-arrow-right"></i>
          </a>
          <a href="#" class="btn btn-danger btn-sm btn-delete" title="Hapus Surat" data-id_surat="<?= $row->id_surat; ?>">
            <i class="fa fa-trash-alt"></i>
          </a>
        </td>
      </tr>


    <?php endforeach; ?>
  </tbody>
</table>

</div>



<!-- Modal Edit Product-->
<?= form_open('suratmasuk/suratkembali'); ?>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Kembalikan Surat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="expedisi">Expedisi</label>
          <input type="text" class="form-control expedisi" name="expedisi" readonly>
        </div>
        <div class="mb-3">
          <label for="jml_surat">Jumlah Surat</label>
          <input type="text" class="form-control jml_surat" name="jml_surat" readonly>
        </div>
        <div class="mb-3">
          <label for="tujuan_surat">Tujuan Surat</label>
          <input type="text" class="form-control tujuan_surat" name="tujuan_surat" readonly>
        </div>
        <div class="mb-3">
          <label for="asal_surat">Asal Surat</label>
          <input type="text" class="form-control asal_surat" name="asal_surat" readonly>
        </div>
        <div class="mb-3">
          <label for="diterima">Tgl. Diterima</label>
          <input type="text" class="form-control diterima" name="diterima" readonly>
        </div>
        <div class="mb-3">
          <label for="jam_diterima">Jam Diterima</label>
          <input type="text" class="form-control jam_diterima" name="jam_diterima" readonly>
        </div>
        <div class="mb-3">
          <label for="penerima">Petugas</label>
          <input type="text" class="form-control penerima" name="penerima" readonly>
        </div>
        <div class="mb-3">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control keterangan" name="keterangan" readonly>
        </div>
        <div class="mb-3">
          <label for="tgl_kembali">Tgl. Kembali</label>
          <input type="date" class="form-control" value="<?= date('Y-m-d') ?>" name="tgl_kembali">
        </div>
        <div class="mb-3">
          <label for="keterangan">Keterangan Pengembalian</label>
          <input type="text" class="form-control ket_pengembalian" name="ket_pengembalian" required>
        </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_surat" id="id_surat">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Kembalikan Surat</button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<?= form_close(); ?>
<!-- End Modal Edit Product-->

<!-- Modal Delete Product-->
<form action="suratmasuk/delete" method="post">
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

          <h2>Surat ini akan di hapus ??</h2>

        </div>
        <div class="modal-footer">
          <input type="hidden" name="id_surat" id="IDsurat">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- End Modal Delete Product-->
<form action="" method="post">
  <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Dikembalikan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" readonly>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="tgl_kembali">Tgl. Kembali</label>
            <input type="date" class="form-control tgl_kembali" name="tgl_kembali" readonly>
          </div>

          <div class="mb-3">
            <label for="keterangan">Keterangan Pengembalian</label>
            <input type="area" class="form-control ket_pengembalian" name="ket_pengembalian" readonly>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>


<!-- jQuery -->
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- BS JavaScript -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
<!-- <script src="<?= base_url() ?>/plugins/jquery/js/jquery.min.js"></script> -->
<!-- <script src="<?= base_url() ?>/plugins/jquery/js/bootstrap.bundle.min.js"></script> -->


<!-- <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>  -->
<!-- <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": true,
      "buttons": ["excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>
<script>
  $(document).ready(function() {

    // get Edit Product
    $('#btn-edit').on('click', function() {
      const id_surat = $(this).data('id_surat');
      const expedisi = $(this).data('expedisi');
      const jml_surat = $(this).data('jml_surat');
      const tujuan_surat = $(this).data('tujuan_surat');
      const asal_surat = $(this).data('asal_surat');
      const diterima = $(this).data('diterima');
      const jam_diterima = $(this).data('jam_diterima');
      const penerima = $(this).data('penerima');
      const keterangan = $(this).data('keterangan');
      const tgl_kembali = $(this).data('tgl_kembali');

      $('#id_surat').val(id_surat);
      $('.expedisi').val(expedisi);
      $('.jml_surat').val(jml_surat);
      $('.tujuan_surat').val(tujuan_surat);
      $('.asal_surat').val(asal_surat);
      $('.diterima').val(diterima);
      $('.jam_diterima').val(jam_diterima);
      $('.penerima').val(penerima);
      $('.keterangan').val(keterangan);
      $('.tgl_kembali').val(tgl_kembali);

      $('#editModal').modal('show');
    })

    // get Delete 
    $('.btn-delete').on('click', function() {
      // get data from button edit
      const id_surat = $(this).data('id_surat');
      // Set data to Form Edit
      $('#IDsurat').val(id_surat);
      // Call Modal Edit
      $('#deleteModal').modal('show');
    });

    $('.btn-detail').on('click', function() {
      // get data from button edit
      // const id_surat = $(this).data('id_surat');
      const tgl_kembali = $(this).data('tgl_kembali');
      const ket_pengembalian = $(this).data('ket_pengembalian');
      // Set data to Form Edit
      $('.tgl_kembali').val(tgl_kembali);
      $('.ket_pengembalian').val(ket_pengembalian);
      // Call Modal Edit
      $('#infoModal').modal('show');
    });

  });
</script>



<?= $this->endSection('isi') ?>