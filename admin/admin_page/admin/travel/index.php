

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AdminLTE 3 | DataTables</title>



  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="../../index3.html" class="nav-link">Home</a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="#" class="nav-link">Contact</a>

      </li>

    </ul>



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <!-- Navbar Search -->

      <li class="nav-item">

        <a class="nav-link" data-widget="navbar-search" href="#" role="button">

          <i class="fas fa-search"></i>

        </a>

        <div class="navbar-search-block">

          <form class="form-inline">

            <div class="input-group input-group-sm">

              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

              <div class="input-group-append">

                <button class="btn btn-navbar" type="submit">

                  <i class="fas fa-search"></i>

                </button>

                <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                  <i class="fas fa-times"></i>

                </button>

              </div>

            </div>

          </form>

        </div>

      </li>



      <!-- Messages Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-comments"></i>

          <span class="badge badge-danger navbar-badge">3</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  Brad Diesel

                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">Call me whenever you can...</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  John Pierce

                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">I got your message bro</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  Nora Silvester

                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">The subject goes here</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>

        </div>

      </li>

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-bell"></i>

          <span class="badge badge-warning navbar-badge">15</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <span class="dropdown-item dropdown-header">15 Notifications</span>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-envelope mr-2"></i> 4 new messages

            <span class="float-right text-muted text-sm">3 mins</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-users mr-2"></i> 8 friend requests

            <span class="float-right text-muted text-sm">12 hours</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-file mr-2"></i> 3 new reports

            <span class="float-right text-muted text-sm">2 days</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>

        </div>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="fullscreen" href="#" role="button">

          <i class="fas fa-expand-arrows-alt"></i>

        </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">

          <i class="fas fa-th-large"></i>

        </a>

      </li>

    </ul>

  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="../../index3.html" class="brand-link">

      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">AdminLTE 3</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info">

          <a href="#" class="d-block">Alexander Pierce</a>

        </div>

      </div>



      <!-- SidebarSearch Form -->

      <div class="form-inline">

        <div class="input-group" data-widget="sidebar-search">

          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

          <div class="input-group-append">

            <button class="btn btn-sidebar">

              <i class="fas fa-search fa-fw"></i>

            </button>

          </div>

        </div>

      </div>



      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">

           

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="../../index.php" class="nav-link ">

                  <i class="nav-icon fas fa-tachometer-alt"></i>

                  <p>Dashboard </p>

                </a>

              </li>





          <li class="nav-item">

            <a href="../travel/index.php" class="nav-link">

              <i class="far nav-icon"></i>

              <p>Data Travel </p>

            </a>

          </li>

              

          <li class="nav-item">

            <a href="../user/index.php" class="nav-link">

              <i class="far nav-icon"></i>

              <p>Data User </p>

            </a>

          </li>



          <li class="nav-item">

            <a href="../pesan/index.php" class="nav-link">

              <i class="far nav-icon"></i>

              <p>Data Pesan </p>

            </a>

          </li>  


          <li class="nav-item">

            <a href="../pesan/index.php" class="nav-link">

              <i class="far nav-icon"></i>

              <p>Data Karyawan </p>

            </a>

          </li>  

          

          

      </nav>



      <!-- Sidebar Menu -->

      </div>

    </aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>DataTables</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">DataTables</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    





            <!-- /.card -->



            <div class="card">

              <div class="card-header">

                

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" >Tambah 
                </button>


              </div>

              <!-- /.card-header -->

              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                  <tr>

                    <th>Id Travel</th>

                    <th>Tujuan</th>

                    <th>Harga</th>

                    <th>Deskripsi</th>

                    <th>waktu berangkat</th>

                    <th>gambar</th>                    

                    <th>Aksi</th>

                  </tr>

                  </thead>

                  <tbody>

                    <?php 
                        include '../../../koneksi.php';
                        $data = mysqli_query($conn,"select * from tbl_travel");
                        while($d = mysqli_fetch_array($data)){
                    ?>

                  <tr>

                    <td><?php echo $d['id_travel']; ?></td>

                    <td><?php echo $d['tujuan']; ?></td>

                    <td><?php echo $d['harga']; ?></td>

                    <td><?php echo $d['deskripsi']; ?></td>

                    <td><?php echo $d['waktu_berangkat']; ?></td>

                    <td><img src="../../dist/gambar/<?php echo $d['gambar']; ?>"></td>

                     

                    <td>
                        <a href="hapus.php?id=<?php echo $d['id_travel']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class="fas fa-trash"></i ></a>

                        <a href="" id="edit_travel" data-toggle="modal" data-target="#edit" data-id="<?php echo $d['id_travel']; ?>" data-tjn="<?php echo $d['tujuan']; ?>" data-hrg="<?php echo $d['harga']; ?>" data-desk="<?php echo $d['deskripsi']; ?>" data-wkt="<?php echo $d['waktu_berangkat']; ?>" data-gbr="<?php echo $d['gambar']; ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>

                        <button class="btn btn-primary"  ><i class="fas fa-eye"></i></button>

                    </td>

                  </tr>

                  <?php } ?>

                  

                  </tbody>

                  

                </table>

                <div class="modal fade" role="dialog" id="tambah">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                          <h4 class="modal-title" >Tambah data travel</h4>
                      </div>
                      <form method="post" enctype="multipart/form-data" class="form-user" action="tambah.php">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="">Tujuan travel</label>
                              <input type="text" class="form-control" id="" placeholder="Masukkan tujuan travel" name="tujuan" required>
                               </div>
                            <div class="form-group">
                              <label for="">Harga</label>
                              <input type="number" class="form-control" id="" placeholder="Masukkan Harga" name="harga" required>
                            </div>
                            <div class="form-group">
                              <label for="">Deskripsi</label>
                              <input type="text" class="form-control" id="" placeholder="Masukkan deskripsi" name="deskripsi">
                            </div>
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                              <label for="">Pilih tanggal keberangkatan</label>
                              <i class="fas fa-calendar input-prefix"></i>
                              <input placeholder="Pilih tanggal keberangkatan" type="datetime-local" id="" class="form-control" name="waktu_berangkat" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Gambar</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="" name="gambar">
                                  <label class="custom-file-label" for="exampleInputFile" >Pilih gambar</label>
                                </div>
                                
                              </div>
                            </div>

                            
                              
                        </div>
                        <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="tambah" value="simpan" class="simpan" >
                          </div>
                        </div>
                      </form> 
                  </div>
                </div>

              </div>


              <div class="modal fade" role="dialog" id="edit">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                          <h4 class="modal-title" >Edit data travel</h4>
                      </div>
                      <form  enctype="multipart/form-data" class="form-user"  id="form-edit">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="">Tujuan travel</label>
                              <input type="text" class="form-control" id="" placeholder="Masukkan tujuan travel" name="tujuan" required>
                               </div>
                            <div class="form-group">
                              <label for="">Harga</label>
                              <input type="number" class="form-control" id="" placeholder="Masukkan Harga" name="harga" required>
                            </div>
                            <div class="form-group">
                              <label for="">Deskripsi</label>
                              <input type="text" class="form-control" id="" placeholder="Masukkan deskripsi" name="deskripsi">
                            </div>
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                              <label for="">Pilih tanggal keberangkatan</label>
                              <i class="fas fa-calendar input-prefix"></i>
                              <input placeholder="Pilih tanggal keberangkatan" type="datetime-local" id="" class="form-control" name="waktu_berangkat" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Gambar</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="" name="gambar">
                                  <label class="custom-file-label" for="exampleInputFile" >Pilih gambar</label>
                                </div>
                                
                              </div>
                            </div>

                            
                              
                        </div>
                        <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="edit" value="simpan" class="simpan" >
                          </div>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              

              <div class="tampildata"></div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>



          <!-- /.col -->

        </div>

        <!-- /.row -->

      </div>

      <!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <div class="float-right d-none d-sm-block">

      <b>Version</b> 3.2.0

    </div>

    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="../../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->

<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="../../plugins/jszip/jszip.min.js"></script>

<script src="../../plugins/pdfmake/pdfmake.min.js"></script>

<script src="../../plugins/pdfmake/vfs_fonts.js"></script>

<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>

<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->

<script src="../../dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="../../dist/js/demo.js"></script>

<!-- Page specific script -->

<script>

  $(function () {

    $("#example1").DataTable({

      "responsive": true, "lengthChange": false, "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": false,

      "ordering": true,

      "info": true,

      "autoWidth": false,

      "responsive": true,

    });

  });

</script>

<script type="text/javascript">
  $(document).on("click", "#edit_travel", function(){
    var id_travel = $(this).data('id');
    var tujuan = $(this).data('tjn');
    var harga = $(this).data('hrg');
    var deskripsi = $(this).data('desk');
    var waktu = $(this).data('wkt');
    var gambar = $(this).data('gbr');
    $(".modal-body #tujuan").val(tjn);
    $(".modal-body #harga").val(harga);
    $(".modal-body #waktu_berangkat").val(waktu);
  })
</script>

</body>

</html>

