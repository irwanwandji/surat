<!-- <!DOCTYPE html>
<html lang="en">
<body> -->
<!-- <head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-3">
				<label for="">Pilih Bulan</label>
				<select id="bulan" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4" selected="">4</option>
				</select>
			</div>
		</div>
	</div>
	<div id="container"></div>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
	<script>
	// Chart
	const options = {
	  chart: {
	    type: 'spline',
	    events: {
	    	load: getData(4)
	    }
	  },
	  title: {
	    text: 'Statistik'
	  },
		 xAxis: {
		        type: 'datetime',
		        dateTimeLabelFormats: {
		            day: '%e of %b'
		        }
		},
	  series: [
	  	{
	  		name:'Surat',
	  		data:[],
	  		pointStart: Date.UTC(2020, 3, 1),
	        pointInterval: 24 * 3600 * 1000 // one day
	  	}
	  ]
	};
	const chart = Highcharts.chart('container', options)

	// Data
	$("#bulan").change(function(){
		const val = $(this).val();
		getData(val);
	})
	function getData(bulan) {
	  	const url = `/home/apiData/${bulan}`;
	    $.getJSON(url,function(data) {
	    	const p =[];
			data.map((obj) => {
			    p.push(parseInt(obj.jml_surat))
		    });
			chart.series[0].update({
				data:p,
				pointStart: Date.UTC(2020, bulan-1, 1)
			})
			chart.redraw(); 
		})
	}
	</script>	 -->





<!DOCTYPE html>
<html>
<head>
    <script src="js/Chart.js"></script>
</head>
<body>
    <br>
    <h4>Cara Membuat Grafik (Chart) di PHP dengan Chart.js</h4>
    <canvas id="myChart"></canvas>
    <?php
    $kon = mysqli_connect("localhost","root","","akademik");

    $jenis_kelamin= "";
    $jumlah=null;
    $sql="select jk,COUNT(*) as 'total' from mahasiswa GROUP by jk";
    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        if ($data['jk']==1){
            $jk="Laki-laki";
        }else {
            $jk="Perempuan";
        }
        $jenis_kelamin .= "'$jk'". ", ";

        $jum=$data['total'];
        $jumlah .= "$jum". ", ";
    }
?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php echo $jenis_kelamin; ?>],
            datasets: [{
                label:'Data Mahasiswa berdasarkan jenis kelamin',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>