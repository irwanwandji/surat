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


<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/dist/css/adminlte.min.css"></script>
<script src="<?= base_url() ?>/dist/css/adminlte.css"></script>
<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url() ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<!-- <div class="row"> -->


<?= session()->getFlashdata('sukses'); ?>

<!-- <div class="row"> -->
<!-- <div class="col-md-3">
    <label>Date range:</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="far fa-calendar-alt"></i>
        </span>
      </div>
      <input type="text" class="form-control float-right" id="reservation">
    </div>
  </div> -->
<!-- <div class="col-md-2">
    <input type="date" name="tglawal" id="tglawal" class="form-control">
  </div>
  <div class="col-md-2">
    <input type="date" name="tglakhir" id="tglakhir" class="form-control">
  </div> -->
<!-- <div class="col-md-2">
    <button type="button" class="btn btn-md btn-primary" id="tombolTampil">
      Tampilkan
    </button>
    <label>
      <font color="#ffffff">.</font>
    </label>
  </div> -->
<!-- </div> -->


<!-- <marquee> -->
<!-- <div class="col-md-1">
        <button type="button" class="btn btn-info" id="tombolPrint" onclick="window.print()"><i class="fa fa-print">

            </i> Print
        </button>
    </div> -->
<!-- </marquee> -->
<!-- </div> -->

<!-- <div class="container"> -->
<table id="example1" class="table table-striped table-bordered">
  <!-- <table id="example1" class="table table-striped table-bordered" style="width:100%;"> -->
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
      <th style="width:5px;">Keterangan</th>
      <th style="width:10%;">Tgl. Kembali</th>
      <th style="width:10%;">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $nomor = 1;
    foreach ($suratmasuk as $row) :
    ?>

      <tr>
        <td><?= $nomor++; ?></td>
        <td><?= $row->expedisi; ?></td>
        <td><?= $row->jml_surat; ?></td>
        <td><?= $row->tujuan_surat; ?></td>
        <td><?= $row->asal_surat; ?></td>
        <td><?= $row->diterima; ?></td>
        <td><?= $row->jam_diterima; ?></td>
        <td><?= $row->penerima; ?></td>
        <td><?= $row->keterangan; ?></td>
        <td>
          <?= $row->tgl_kembali; ?>

        </td>
        <td>
          <a href="" class="btn btn-info btn-sm btn-edit" title="Kembalikan Surat" data-id_surat="<?= $row->id_surat; ?>" data-expedisi="<?= $row->expedisi; ?>" data-jml_surat="<?= $row->jml_surat; ?>" data-tujuan_surat="<?= $row->tujuan_surat; ?>" data-asal_surat="<?= $row->asal_surat; ?>" data-diterima="<?= $row->diterima; ?>" data-penerima="<?= $row->penerima; ?>" data-keterangan="<?= $row->keterangan; ?>" data-tgl_kembali="<?= $row->tgl_kembali; ?>">
            <i class="fa fa-arrow-right"></i>
          </a>
          <!-- <input type="hidden" value="DELETE" name="_method">
          <button type="button" class="btn btn-warning" title="Kembalikan Surat" data-toggle="modal" data-target="#modaledit">
            <i class="fa fa-arrow-right"></i>
          </button> -->

        </td>
      </tr>


    <?php endforeach; ?>
  </tbody>
</table>
<!-- </div> -->

<!-- <?= form_open('suratmasuk/kembalikansuratmasuk'); ?> -->

<div class="modal fade modaledit" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
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

      </div>
      <div class="modal-footer">
        <!-- <input type="hidden" name="id_surat" > -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Kembalikan Surat</button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- <?= form_close(); ?> -->


<script>
  $(document).ready(function() {
    $('.btn-edit').on('click', function() {
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

      $('.expedisi').val(expedisi);
      $('.jml_surat').val(jml_surat);
      $('.tujuan_surat').val(tujuan_surat);
      $('.asal_surat').val(asal_surat);
      $('.diterima').val(diterima);
      $('.jam_diterima').val(jam_diterima);
      $('.penerima').val(penerima);
      $('.keterangan').val(keterangan);
      $('.tgl_kembali').val(tgl_kembali);

      $('.modaledit').modal('show');
    })


  });

  // function edit(id_surat) {
  //   window.location = ('/suratmasuk/formedit/' + id_surat);


  // }

  function hapus(id_surat) {
    pesan = confirm('Yakin data surat dihapus?')

    if (pesan) {
      window.location.href = ("<?= site_url('suratmasuk/hapus/') ?>") + id_surat;
    } else {
      return false;
    }
  }

  function hapus2(id_surat) {
    Swal.fire({
      title: 'Hapus Surat',
      html: `Yakin data surat masuk ini di hapus?`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Tidak'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = ("<?= site_url('suratmasuk/hapus/') ?>") + id_surat;
        if (response.sukses) {
          Swal.fire({
            icon: 'success',
            title: 'Hapus Data',
            text: response.sukses
          });

        }
      } else {
        return false;
      }
    })
  }
</script>

<!-- jQuery -->
<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url() ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url() ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url() ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url() ?>/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/dist/js/demo.js"></script>
<script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": true,
      "buttons": ["excel", "pdf"]
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<?= $this->endSection('isi') ?>