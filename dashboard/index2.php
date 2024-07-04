<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TA ALI SK 2024</title>
  <link rel="icon" type="image/png" href="../data/images/icons/favicon.ico" />
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Memasukkan library ECharts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.0.2/dist/echarts.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
  <style>
    html {
      font-family: Arial;
      display: inline-block;
      margin: 0px auto;
      text-align: center;
    }

    h1 {
      font-size: 2.0rem;
      color: #2980b9;
    }

    h2 {
      font-size: 1.25rem;
      color: #2980b9;
    }

    .buttonON {
      display: inline-block;
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px #999;
    }

    .buttonON:hover {
      background-color: #3e8e41
    }

    .buttonON:active {
      background-color: #3e8e41;
      box-shadow: 0 1px #666;
      transform: translateY(4px);
    }

    .buttonOFF {
      display: inline-block;
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #e74c3c;
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px #999;
    }

    .buttonOFF:hover {
      background-color: #c0392b
    }

    .buttonOFF:active {
      background-color: #c0392b;
      box-shadow: 0 1px #666;
      transform: translateY(4px);
    }
    .toggle-container {
      display: inline-block;
      position: relative;
    }

    .toggle-input {
      display: none;
    }

    .toggle-label {
      display: flex;
      align-items: center;
      width: 80px;
      height: 30px;
      background-color: #27ae60; /* Warna hijau yang lebih terang */
      border-radius: 15px;
      position: relative;
      cursor: pointer;
    }

    .toggle-text {
      margin: 0 10px;
      color: #ffffff;
      font-weight: bold; /* Teks lebih tebal */
    }

    .toggle-indicator {
      content: '';
      width: 30px;
      height: 30px;
      background-color: #ffffff;
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 0;
      transition: transform 0.3s;
    }

    .toggle-input:checked + .toggle-label .toggle-indicator {
      transform: translateX(50px);
    }
    .btn-success {
            color: #ffffff;
            background-color: #CD0069;
            border-color: #CD0069;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #7a0240;
            border-color: #7a0240;
        }

        .btn-outline-danger {
            color: #7a0240;
            border-color: #7a0240;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #7a0240;
            border-color: #7a0240;
        }

        .img-fluid {
            width: auto;
            height: 195px;
        }
        #clock {
            font-size: 50px;
            font-weight: bold;
        }


  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/dashboard_iot_kelas/dashboard/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HOME IOT ALI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Status Lampu</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kontrol IoT</span></a>
      </li>
               
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">MOH. ALI MAKHRUS</span>
                <img class="img-profile rounded-circle" src="../data/images/admin.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Page Heading -->
        <div class="col-md">
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-0 h-100">
                <div class="card-header border-0">Kontrol <strong>Kondisi Lampu Ruangan 1</strong></div>
                <div class="card-body">
                    
                    <div class="d-grid gap-2">
                    <p class="mt-3">Status Lampu: <strong style="color:red" id="relay_status">OFF</strong></p>
                    <button onclick="publish_led('ON')" class="btn btn-success p-4 mt-3"><i class="bi bi-lightbulb"></i> HIDUPKAN LAMPU</button>
                    <button onclick="publish_led('OFF')" class="btn btn-outline-danger p-4 mt-3"><i class="bi bi-lightbulb-off"></i> MATIKAN LAMPU</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-0 h-100">
                <div class="card-header border-0">Kontrol <strong>Kondisi Lampu Ruangan 2</strong></div>
                <div class="card-body">
                   
                    <div class="d-grid gap-2">
                    <p class="mt-3">Status Lampu: <strong style="color:red" id="relay_status2">OFF</strong></p>
                    <button onclick="publish_led2('ON')" class="btn btn-success p-4 mt-3"><i class="bi bi-lightbulb"></i> HIDUPKAN LAMPU</button>
                    <button onclick="publish_led2('OFF')" class="btn btn-outline-danger p-4 mt-3"><i class="bi bi-lightbulb-off"></i> MATIKAN LAMPU</button>
                  </div>
                </div>
            </div>
        </div></div></div>
        <div class="col-md">
               <div class="card shadow border-0 rounded-0">
                    <div class="card-header border-0"> LAMPU <strong>RUANGAN</strong></div>
                    <div class="card-body">
                        <div id="line-chart1" class="chart-container-line"></div>
                    </div>
               </div></div>
              <div class="col-md">
                <div class="card shadow border-0 rounded-0 h-100">
                    <div class="card-header border-0">Judul <strong>Tugas Akhir</strong></div>
                    <div class="card-body text-center">
                        <img src="img/logo.png" class="img-fluid" alt="...">
                        <h3>Implementasi Internet of Things (IoT) Dengan Protokol Komunikasi MQTT Pada Sistem Kontrol Lampu Ruangan</h3>
                        <p>Status Koneksi Broker MQTT:
                            <strong id="status" style="color:red">
                                DISCONNECTED
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card shadow border-0 rounded-0 h-100">
                    <div class="card-header border-0">Monitoring <strong>Sensor Waktu</strong></div>
                    <div class="card-body text-center">
                        <div id="main" ></div>
                        <div id="clock" ></div>
                    </div>
                </div>
               
               
            
  <!-- End of Main Content -->
  
  

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; TUGAS AKHIR 2024 MOH. ALI MAKHRUS 20202152 SISTEM KOMPUTER ASIA</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form method="post">
            <button class="btn btn-primary" type="submit" name="logout">Logout</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts 
  <script src="js/demo/datatables-demo.js"></script>
  
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery/moment.min.js"></script>
  <!-- Page level custom scripts 
  <script src="js/demo/chart-area-demo.js"></script> -->

  <script type="text/javascript">
    $(document).ready(function () {
      var table = $('#dataTable').DataTable({
        ajax: {
          url: 'http://localhost/arducoding_tutorial/nodemcu_log/webapi/api/read.php',
          dataSrc: 'data_log'
        },
        columns: [
          { data: null },
          { data: 'created_at' },
          { data: 'suhu' },
          { data: 'kelembaban' }
          //defaultContent: '<button type="button" name="edit" id="1" class="btn btn-success btn-sm edit"><span class="fa fa-edit"></span> Edit</button>&nbsp;<button type="button" name="delete" id="1" class="btn btn-danger btn-sm delete"><span class="fa fa-trash"></span> Delete</button>'}
        ],
        columnDefs: [{
          searchable: false,
          orderable: false,
          targets: 0
        }],
        order: [[1, 'asc']]
      });
      table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
          cell.innerHTML = i + 1;
        });
      }).draw();
      //renderDataTable()
      getChartData();
      setInterval(function () {
        table.ajax.reload();
      }, 60000);

      setInterval(getChartData, 60000);

    });

    function renderChart1(data, labels) {
      var ctx = document.getElementById("myAreaChartSuhu").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [
            {
              label: 'Suhu',
              data: data[0],
              borderColor: 'rgba(75, 192, 192, 1)',
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
            }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                suggestedMin: 15,
                suggestedMax: 40
              }
            }]
          },
        }
      });
    }

    function renderChart2(data, labels) {
      var ctx = document.getElementById("myAreaChartKelembaban").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [
            {
              label: 'Kelembaban',
              data: data[1],
              borderColor: 'rgba(13, 124, 236, 1)',
              backgroundColor: 'rgba(13, 124, 236, 0.2)',
            }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                suggestedMin: 50,
                suggestedMax: 100
              }
            }]
          },
        }
      });
    }
    function getChartData() {
      $.ajax({
        url: "http://localhost/arducoding_tutorial/nodemcu_log/webapi/api/read.php",
        method: "GET",
        dataType: 'JSON',
        success: function (result) {
          var labels = result.data_log.map(function (e) {
            var a = moment(e.created_at).format('HH:mm');
            //return e.created_at;
            return a;
          });
          var data1 = result.data_log.map(function (e) {
            return e.suhu;
          });
          var data2 = result.data_log.map(function (e) {
            return e.kelembaban;
          });
          var data = [];
          data[0] = data1;
          data[1] = data2;
          //console.log(result);		
          renderChart1(data, labels);
          renderChart2(data, labels);
        },
        error: function (err) {
          console.log('Get data Error', err);
        }
      });
    }

    function float2dollar(value) {
      return "U$ " + (value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }

  </script>
  <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    <script src="mqtt-library.js"></script>
    <script src="scripts.js"></script>
    
</body>

</html>