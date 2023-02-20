 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="background-color: #4B0082;;">
                	
                	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
		                <div class="sidebar-brand-icon">
		                    <img style="width: 40px; height: 40px;" class="img-profile "
		                        src="<?php echo base_url('assets/img/profile/surat.png'); ?>">
		                </div>
		                <div class="sidebar-brand-text mx-3" style="color: white; font-weight: bold; ">PROPAGANDA SI JUANDA(Protokol Pimpinan dan Agenda Bandara Imigrasi Juanda)</div>
		            </a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link " href="<?php echo base_url('auth') ?>" id="userDropdown" 
                                aria-haspopup="true" aria-expanded="false">
                                <span class=" mr-2 d-none d-lg-inline " style=" color: white;">Login</span>
                                
                            </a>
                            
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


 				<div class="container">

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-70 col-lg-50">

                        	 <div class="row">

                        <div class="col-xl-70 col-lg-50">
                        	<div class="card">
                <div class="card-header">
                   DEPARTURE
                </div>
                <div class="card-body">
                  <table class="table table-hover" id="tak">
                          <thead>
                          <tr>
                               <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">ETD</th>
                              <th scope="col">Jabatan</th>
                              <th scope="col">Kode Penerbangan</th>
                              <th scope="col">Rute</th>
                              <th scope="col">Tempat Duduk</th>
                              <th scope="col">Contact Person</th>
                              <th scope="col">Petugas</th>
                              <th scope="col">Keterangan</th>
                             
                          </tr>
                          </thead>
                          <tbody>

                              <?php $i=1; ?>

                              <?php foreach ($departure as $t) : ?>

                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $t['nama']; ?></td>
                                  <td><?php echo $t['tgl_l']; ?></td>
                                  <td><?php echo $t['pasal']; ?></td>
                                  <td><?php echo $t['jabatan']; ?></td>
                                  <td><?php echo $t['alamat']; ?></td>
                                  <td><?php echo $t['paspor']; ?></td>
                                  <td><?php echo $t['niora']; ?></td>
                                  <td><?php echo $t['kebangsaan']; ?></td>
                                  <td><?php echo $t['jenis_doc']; ?></td>
                                  <td><?php echo $t['pelanggaran']; ?></td>
                                  

                                  <?php $i++; ?>

                                  <?php endforeach; ?>

                          </tbody>
                      </table>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                   ARRIVAL
                </div>
                <div class="card-body">
                  <table class="table table-hover" id="projust">
                          <thead>
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">ETA</th>
                              <th scope="col">Jabatan</th>
                              <th scope="col">Kode Penerbangan</th>
                              <th scope="col">Rute</th>
                              <th scope="col">Tempat Duduk</th>
                              <th scope="col">Contact Person</th>
                              <th scope="col">Petugas</th>
                              <th scope="col">Keterangan</th>
                              
                          </tr>
                          </thead>
                          <tbody>

                              <?php $i=1; ?>

                              <?php foreach ($projustisia as $t) : ?>

                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $t['nama']; ?></td>
                                  <td><?php echo $t['tgl_l']; ?></td>
                                  <td><?php echo $t['pasal']; ?></td>
                                  <td><?php echo $t['jabatan']; ?></td>
                                  <td><?php echo $t['alamat']; ?></td>
                                  <td><?php echo $t['paspor']; ?></td>
                                  <td><?php echo $t['niora']; ?></td>
                                  <td><?php echo $t['kebangsaan']; ?></td>
                                  <td><?php echo $t['jenis_doc']; ?></td>
                                  <td><?php echo $t['pelanggaran']; ?></td>
                                  

                                  <?php $i++; ?>

                                  <?php endforeach; ?>

                          </tbody>
                      </table>
                </div>
              </div>
              <!-- <div class="card">
                <div class="card-header"> -->
                  <!--  Data Deportasi Masuk
                </div>
                <div class="card-body">
                  <table class="table table-hover" id="projust">
                          <thead>
                          <tr>
                               <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Aksi</th>
                          </tr>
                          </thead>
                          <tbody>

                              <?php $i=1; ?>

                              <?php foreach ($dep as $d) : ?>

                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $d['nama']; ?></td>
                                  <td>
                                    <a href="<?php echo base_url(); ?>kegiatan/detail_deportasi/<?php echo$d['id_deportasi']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/edit_deportasi/<?php echo$d['id_deportasi']; ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                    <a href="<?php echo base_url(); ?>kegiatan/delete_deportasi/<?php echo$d['id_deportasi']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                  </td>

                                  <?php $i++; ?>

                                  <?php endforeach; ?>

                          </tbody>
                      </table>
                </div>
              </div> -->
                        	<!-- <div class="card shadow mb-4">
                                <div class="card-header py-3 " style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold" style="color: purple;">BAP</h6>
                                </div>
                                <div class="card-body" >
                                    <div class="chart-area">
                                        <canvas id="myBAPChart"></canvas>
									    <?php
									    //Inisialisasi nilai variabel awal
									    $bap_jk= "";
									    $jumlah_bap=null;
									    foreach ($bap as $b)
									    {
									        $jk_bap=$b->jk;
									        $bap_jk .= "'$jk_bap'". ", ";
									        $jum_bap=$b->total;
									        $jumlah_bap .= "$jum_bap". ", ";
									    }
									    ?>
                                    </div>
                                    
                                </div>
                            </div>
 -->
                            <!-- Bar Chart -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3" style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold" style="color: purple;">TAK</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myChart"></canvas>
									    <?php
									    //Inisialisasi nilai variabel awal
									    $tak_jk= "";
									    $jumlah_tak=null;
									    foreach ($tak as $t)
									    {
									        $jk_tak=$t->jk;
									        $tak_jk .= "'$jk_tak'". ", ";
									        $jum_tak=$t->total;
									        $jumlah_tak .= "$jum_tak". ", ";
									    }
									    ?>
                                    </div>
                                    
                                </div>
                            </div> -->

                            <!-- Bar Chart -->
                           <!--  <div class="card shadow mb-4">
                                <div class="card-header py-3" style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold" style="color: purple;">Projustisia</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                        <?php
									    //Inisialisasi nilai variabel awal
									    $projus_jk= "";
									    $jumlah_projus=null;
									    foreach ($projus as $p)
									    {
									        $jk_projus=$p->jk;
									        $projus_jk .= "'$jk_projus'". ", ";
									        $jum_projus=$p->total;
									        $jumlah_projus .= "$jum_projus". ", ";
									    }
									    ?>
                                        
                                    </div>
                                   
                                </div>
                            </div>

                        </div> -->

                        
                       <!--  <div class="col-xl-5 col-lg-5">
                        	<?php echo $this->session->flashdata('message'); ?>
                        	<div class="card shadow mb-4"> -->
                                <!-- Card Header - Dropdown -->
                                <!-- <div class="card-header py-3" style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold" style="color: purple;">Anggaran</h6>
                                </div> -->
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                	
                                	<?php $i=1; ?>

                              		<?php foreach ($anggaran as $a) : ?>

                                    <div class="form-group row">
			                          <label for="nama" class="col-sm-5 col-form-label"><?php echo $a['nama'] ?></label>
			                          <label for="nama" class="col-sm-5 col-form-label">Rp. <?php echo number_format($a['jumlah'], 0, ".", ".")  ?></label>
			                          
			                          

			                      	</div>

			                      	<?php $i++; ?>
                                  <?php endforeach; ?>
                                </div>
                            </div> -->

                            <!-- Donut Chart -->
                            <div class="card shadow mb-4" >
                                <!-- Card Header - Dropdown -->
<!--                                 <div class="card-header py-3"style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold" style="color: purple;">Deportasi</h6>
                                </div> -->
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                    <div class="chart-pie">
                                        <canvas id="myDognutChart"></canvas>
                                        <?php
									    //Inisialisasi nilai variabel awal
									    $deportasi_jk= "";
									    $jumlah_deportasi=null;
									    foreach ($deportasi as $d)
									    {
									        $jk_deportasi=$d->jk;
									        $deportasi_jk .= "'$jk_deportasi'". ", ";
									        $jum_deportasi=$d->total;
									        $jumlah_deportasi .= "$jum_deportasi". ", ";
									    }
									    ?>
                                    </div>
                                    
                                </div>
                            </div> -->

                            <!-- pie Chart -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <!-- <div class="card-header py-3" style="border-top: solid; border-top-color: purple;">
                                    <h6 class="m-0 font-weight-bold " style="color: purple;">Deteni</h6>
                                </div> -->
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                    <div class="chart-pie">
                                        <canvas id="myPieChart"></canvas>
                                        <?php
									    //Inisialisasi nilai variabel awal
									    $deteni_jk= "";
									    $jumlah_deteni=null;
									    foreach ($deteni as $det)
									    {
									        $jk_deteni=$det->jk;
									        $deteni_jk .= "'$jk_deteni'". ", ";
									        $jum_deteni=$det->total;
									        $jumlah_deteni .= "$jum_deteni". ", ";
									    }
									    ?>
                                    </div>
                                    
                                </div> -->
                            </div>
                        </div>

                        
                        
                    </div>
			</div>
                    
		
		<script>
		    var ctx = document.getElementById('myChart').getContext('2d');
		    var chart = new Chart(ctx, {
		        // The type of chart we want to create
		        type: 'bar',
		        // The data for our dataset
		        data: {
		            labels: [<?php echo $tak_jk; ?>],
		            datasets: [{
		                label:'Data TAK ',
		                backgroundColor: ['#36b9cc', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
		                borderColor: ['rgb(255, 99, 132)'],
		                data: [<?php echo $jumlah_tak; ?>]
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

		<script>
		

		// Bar Chart Example
		// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';
		var ctx = document.getElementById("myBarChart");
		var myBarChart = new Chart(ctx, {
		  type: 'bar',
		  data: {
		    labels: [<?php echo $projus_jk; ?>],
		    datasets: [{
		      label: "Data Projustisia",
		      backgroundColor: "#1cc88a",
		      hoverBackgroundColor: "#1cc88a",
		      borderColor: "#4e73df",
		      data: [<?php echo $jumlah_projus; ?>],
		    }],
		  },
		  // Configuration options go here
		        options: {
		            scales: {
		            	xAxes: [{
					        time: {
					          unit: 'jk'
					        },
					        gridLines: {
					          display: false,
					          drawBorder: false
					        },
					        ticks: {
					          maxTicksLimit: 10
					        },
					        maxBarThickness: 50,
					      }],
		                yAxes: [{
		                    ticks: {
		                        beginAtZero:true
		                    }
		                }]
		            }
		        }
		});

		</script>


		<script>
			// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';

		// Pie Chart Example
		var ctx = document.getElementById("myDognutChart");
		var myPieChart = new Chart(ctx, {
		  type: 'doughnut',
		  data: {
		    labels: [<?php echo $deportasi_jk; ?>],
		    datasets: [{
		      data: [<?php echo $jumlah_deportasi; ?>],
		      backgroundColor: ['#1cc88a', '#36b9cc'],
		      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
		      hoverBorderColor: "rgba(234, 236, 244, 1)",
		    }],
		  },
		  options: {
		    maintainAspectRatio: false,
		    tooltips: {
		      backgroundColor: "rgb(255,255,255)",
		      bodyFontColor: "#858796",
		      borderColor: '#dddfeb',
		      borderWidth: 1,
		      xPadding: 15,
		      yPadding: 15,
		      displayColors: false,
		      caretPadding: 10,
		    },
		    legend: {
		      display: true
		    },
		    cutoutPercentage: 60,
		  },
		});

		</script>

		<script>
	    var ctx = document.getElementById('myPieChart').getContext('2d');
	    var chart = new Chart(ctx, {
	        // The type of chart we want to create
	        type: 'pie',
	        // The data for our dataset
	        data: {
	            labels: [<?php echo $deteni_jk; ?>],
	            datasets: [{
	                label:'',
	                backgroundColor: ['rgb(255, 99, 132)', 'rgb(60, 179, 113)'],
	                borderColor: ['rgb(255, 99, 132)'],
	                data: [<?php echo $jumlah_deteni; ?>]
	            }]
	        },
	        // Configuration options go here
	        options: {
		    maintainAspectRatio: false,
		    tooltips: {
		      backgroundColor: "rgb(255,255,255)",
		      bodyFontColor: "#858796",
		      borderColor: '#dddfeb',
		      borderWidth: 1,
		      xPadding: 15,
		      yPadding: 15,
		      displayColors: false,
		      caretPadding: 10,
		    },
		    legend: {
		      display: true
		    },
		    
		  },
		});
	</script>

	<script>
            var ctx = document.getElementById("myBAPChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $bap_jk; ?>],
                    datasets: [{
                            label: 'Data BAP',
                            data: [<?php echo $jumlah_bap; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>