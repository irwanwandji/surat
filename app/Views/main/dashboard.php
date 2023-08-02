<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Dashboard
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<!-- Google Font: Source Sans Pro -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css"> -->
<!-- Theme style -->
<!-- <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css"> -->
<!-- <link rel="stylesheet" href="<?= base_url() ?>/dist/css/bootstrap.min.css"> -->
<!-- fullCalendar -->
<!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/fullcalendar/main.css"> -->

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <?php
          $db = \Config\Database::connect();
          $totalsuratditerimatoday = $db->table('tb_suratmasuk')->where('diterima', date('Y-m-d'))->countAllResults();
          // 
          ?>
          <h3>
            <?= $totalsuratditerimatoday; ?>

          </h3>
          <p>Surat Masuk yang Diterima Hari Ini</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <!-- <a href="<?= site_url('main/surathariini') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <?php

          // use CodeIgniter\I18n\Time;

          // $db = \Config\Database::connect();
          // $totalsurat = $db->table('tb_suratmasuk')->countAllResults();
          // $modelSuratMasuk = new ModelSuratMasuk();
          // $totalsurat = $modelSuratMasuk->select('sum(jml_surat) as jml_surat')->first();

          ?>
          <h3>
            <?= $sumAll; ?>

          </h3>
          <p>Total Surat Masuk yang Diterima</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <!-- <a href="http://10.255.45.100/suratmasuk/public/daftar" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->
      </div>
    </div>
  </div>
  <div class="row">
    <!-- ./col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <?php
          $db = \Config\Database::connect();
          $totalsuratkembalitoday = $db->table('tb_suratmasuk')->where('surat_kembali', '1')->like('tgl_kembali', date('Y-m-d'))->countAllResults();
          // 
          ?>

          <h3>
            <?= $totalsuratkembalitoday; ?>

          </h3>

          <p>Surat Masuk yang Dikembalikan Hari Ini </p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <!-- <a href="http://10.255.45.100/suratmasuk/public/daftar" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->
      </div>
    </div>

    <!-- ./col -->

    <div class="col-md-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <?php
          $db = \Config\Database::connect();
          $totalsuratkembali = $db->table('tb_suratmasuk')->where('surat_kembali', '1')->countAllResults();
          ?>
          <h3>
            <?= $totalsuratkembali; ?>

          </h3>
          <p>Total Surat Masuk yang Dikembalikan </p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <!-- <a href="http://10.255.45.100/suratmasuk/public/daftar" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a> -->

      </div>

    </div>

  </div>

</div>

<div class="row">
  <div class="col md-3">
    <!-- <h2>INI GRAFIK YAA</h2> -->
    <!-- <img src="<?= base_url() ?>/dist/img/grafik.jpeg" width="1200" height="600"> -->
  </div>
</div>


</div>


<!-- jQuery UI 1.11.4 -->
<!-- <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- ChartJS -->
<!-- <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script> -->
<!-- <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- jQuery -->
<!-- <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script> -->
<!-- FLOT CHARTS -->
<!-- <script src="<?= base_url() ?>/plugins/flot/jquery.flot.js"></script> -->
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<!-- <script src="<?= base_url() ?>/plugins/flot/plugins/jquery.flot.resize.js"></script> -->
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<!-- <script src="<?= base_url() ?>/plugins/flot/plugins/jquery.flot.pie.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>/dist/js/demo.js"></script> -->
<!-- fullCalendar 2.2.5 -->
<!-- <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script> -->
<!-- <script src="<?= base_url() ?>/plugins/fullcalendar/main.js"></script> -->



<!-- Page specific script -->
<script>
  $(function() {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function() {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0 //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [{
          title: 'All Day Event',
          start: new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor: '#f56954', //red
          allDay: true
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor: '#f39c12' //yellow
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          backgroundColor: '#0073b7', //Blue
          borderColor: '#0073b7' //Blue
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor: '#00c0ef' //Info (aqua)
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor: '#00a65a' //Success (green)
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor: '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function(e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color': currColor
      })
    })
    $('#add-new-event').click(function(e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color': currColor,
        'color': '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>

<!-- Page specific script -->
<script>
  $(function() {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [],
      totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
          y = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [{
      data: getRandomData(),
    }], {
      grid: {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor: '#f3f3f3'
      },
      series: {
        color: '#3c8dbc',
        lines: {
          lineWidth: 2,
          show: true,
          fill: true,
        },
      },
      yaxis: {
        min: 0,
        max: 100,
        show: true
      },
      xaxis: {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function() {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      } else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
      cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data: sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data: cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid: {
        hoverable: true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor: '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines: {
          show: true
        },
        points: {
          show: true
        }
      },
      lines: {
        fill: false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis: {
        show: true
      },
      xaxis: {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display: 'none',
      opacity: 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function(event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
          y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top: item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [
      [2, 88.0],
      [3, 93.3],
      [4, 102.0],
      [5, 108.5],
      [6, 115.7],
      [7, 115.6],
      [8, 124.6],
      [9, 130.3],
      [10, 134.3],
      [11, 141.4],
      [12, 146.5],
      [13, 151.7],
      [14, 159.9],
      [15, 165.4],
      [16, 167.8],
      [17, 168.7],
      [18, 169.5],
      [19, 168.0]
    ]
    $.plot('#area-chart', [areaData], {
      grid: {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: '#00c0ef',
        lines: {
          fill: true //Converts the line chart to area chart
        },
      },
      yaxis: {
        show: false
      },
      xaxis: {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [
        [1, 10],
        [2, 8],
        [3, 4],
        [4, 13],
        [5, 17],
        [6, 9]
      ],
      bars: {
        show: true
      }
    }
    $.plot('#bar-chart', [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis: {
        ticks: [
          [1, 'January'],
          [2, 'February'],
          [3, 'March'],
          [4, 'April'],
          [5, 'May'],
          [6, 'June']
        ]
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [{
        label: 'Series2',
        data: 30,
        color: '#3c8dbc'
      },
      {
        label: 'Series3',
        data: 20,
        color: '#0073b7'
      },
      {
        label: 'Series4',
        data: 50,
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
      label +
      '<br>' +
      Math.round(series.percent) + '%</div>'
  }
</script>


<?= $this->endSection('isi') ?>