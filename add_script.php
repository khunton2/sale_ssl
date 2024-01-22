<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSL Sale</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/script.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
                <div class="sidebar-brand-text mx-3">SSL Sale </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Adddata
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">

                    <i class="fa-solid fa-image-portrait"></i>
                    <span>port</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">port:</h6>
                        <!-- <a class="collapse-item" href="add.php" >addata</a> -->
                        <a class="collapse-item" href="saler_port.php">portlist</a>




                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages">

                    <i class="fa-solid fa-video"></i>
                    <span>script</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">script:</h6>
                        <a class="collapse-item" href="script_text.php">view script</a>
                        <a class="collapse-item" href="add_script.php">add script</a>

                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
                    aria-expanded="true" aria-controls="collapsePages">

                    <i class="fa-solid fa-money-check-dollar"></i>
                    <span>avg_price</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">avg_price:</h6>
                        <!-- <a class="collapse-item" href="add.php" >addata</a> -->
                        <a class="collapse-item" href="add_avg_price.php">avg price</a>
                    </div>
                </div>
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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">table script</h6>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#addexcel"><i
                                    class="fa-solid fa-plus"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="table table-striped">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>id</th>
                                            <th>name</th>
                                            <th>link</th>
                                            <th>add by</th>
                                            <th></th>



                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            //คิวรี่ข้อมูลมาแสดงในตาราง
                                            require_once 'connectDB/connectDB.php';
                                            $stmt = $conn->prepare("SELECT tbl_script.*,tbl_user.name as useradd FROM `tbl_script` JOIN tbl_user on tbl_script.user = tbl_user.id where tbl_script.script_status=1");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $k) {
                                            ?>

                                        <tr>

                                            <td><?= $k['id'];?></td>
                                            <td><?= $k['name'];?></td>
                                            <td><?= $k['script_youtube'];?></td>
                                            <td><?= $k['useradd'];?></td>
                                            <td>
                                                <button class="btn btn-primary viewBtn" data-toggle="modal"
                                                    data-target="#viewModal"
                                                    data-youtube="<?= $k['script_youtube']; ?>">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#editModal" data-id="<?= $k['id']; ?>"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <a class="btn btn-danger"
                                                    href="query/script_delete.php?id=<?= $k['id'];?>"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการที่จะออกจากระบบ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">กดปุ่มยืนยัน เพื่อออกจากระบบ</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">YouTube Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Embed YouTube video using iframe -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="youtubeFrame" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- add Modal-->
    <div class="modal fade" id="addexcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">add Video</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form class="" action="query/script_add.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputname" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <input id="script_youtube" name="name" class="form-control"
                                    placeholder="name" aria-label="Disabled input example">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputscript_youtube" class="col-sm-2 col-form-label">linkyoutube</label>
                            <div class="col-sm-10">
                                <input id="script_youtube" name="script_youtube" class="form-control"
                                    placeholder="linkyoutube" aria-label="Disabled input example">
                            </div>
                        </div>
                        <input type="hidden" value="1" id="user" name="user">


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="import">import</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Edit model-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">add video</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form class="" action="query/script_edit.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                            <label for="inputname" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <input id="name" name="name" class="form-control"
                                    placeholder="name" aria-label="Disabled input example">
                            </div>
                        </div>   
                    <div class="mb-3 row">
                            <label for="inputscript_youtube" class="col-sm-2 col-form-label">linkyoutube</label>
                            <div class="col-sm-10">
                                <input id="script_youtube" name="script_youtube" class="form-control"
                                    placeholder="linkyoutube" aria-label="Disabled input example">
                            </div>
                        </div>
                        <input type="hidden" value="1" id="user" name="user">
                        <input type="hidden" id="editId" name="edit_id">


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="import">import</button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <script>
    //data-id
    function submitEditForm() {
        var editId = document.getElementById('editId').value;

        document.getElementById('editId').value = editId;

        document.getElementById('editForm').submit();
    }


    var editButtons = document.querySelectorAll('.btn-warning[data-toggle="modal"]');
    editButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            document.getElementById('editId').value = id;
        });
    });

    //data-youtube

    $(document).ready(function() {
        // When clicking the view button, update modal content with YouTube video link
        $('.viewBtn').click(function() {
            var youtubeLink = $(this).data('youtube');
            var iframe = '<iframe width="560" height="315" src="' + youtubeLink +
                '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            $('#youtubeFrame').attr('src', youtubeLink);
        });
    });
    </script>




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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>