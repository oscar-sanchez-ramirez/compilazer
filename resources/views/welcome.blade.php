<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Copiláser</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">


    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <!-- jquery-ui -->
    <!-- <link rel="stylesheet" href="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.css') }}"> -->


    <!-- Dateselectmultiple -->
    <!-- <link rel="stylesheet" href="{{ asset('Multiple/jquery-multiple.css') }}"> -->



    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @toastr_css




</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                    <a href="" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-navy navbar-dark elevation-4">

            <h2 class="text-center text-white mt-2">Copiláser</h2>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active bg-info">
                                <i class="fas fa-cart-arrow-down"></i>
                                <p>
                                    Productos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('ftp') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Catálogo CT</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ctExport') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Excel CT</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ftpCo') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Catálogo Copiláser   </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('excel') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Excel Copiláser</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </aside>
        <div class="content-wrapper portada">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5">
                            <img src="{{ asset('logos/LOGOTIPO.png') }}" alt="">
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <aside class="control-sidebar sidebar-dark-info navbar-light elevation-2">

        </aside>
        <footer class="main-footer">

            <div class="text-center">

                <p>&copy; <?= date('Y') ?> <strong>Copiláser</strong></p>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- AdminLTE App -->



    <!-- jquery-validation -->
    <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>


    <!-- SweetAlert2 -->
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- jquery-ui -->
    <!-- <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Multiple/jquery-multiple.js') }}"></script> -->

    @yield('scripts')

    <!-- page script -->

    <script type="text/javascript">
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        });
    </script>


    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    type: 'success',
                    title: '<h4 style="color: green">URL de la encuesta copiada</h4>'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    type: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    type: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    type: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    type: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });


        });
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $("#example11").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example3').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "order": [
                    [0, 'desc']
                ],
                language: {
                    search: "Buscar:",
                    "lengthMenu": "Recorrer _MENU_ registros por página",
                    "zeroRecords": "No hay resultados",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles ",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    paginate: {
                        first: "Primera",
                        previous: "Primera",
                        next: "Última",
                        last: "Último"
                    },
                }
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "order": [
                    [0, 'desc']
                ],
                language: {
                    search: "Buscar:",
                    "lengthMenu": "Recorrer _MENU_ registros por página",
                    "zeroRecords": "No hay resultados",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles ",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    paginate: {
                        first: "Primera",
                        previous: "Primera",
                        next: "Última",
                        last: "Último"
                    },
                }
            });
            $('#example4').DataTable({
                "lengthMenu": [
                    [20, 50, 100, -1],
                    [20, 50, 100, "Todos"]
                ],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "order": [
                    [0, 'asc']
                ],
                language: {
                    search: "Buscar:",
                    "lengthMenu": "Recorrer _MENU_ registros por página",
                    "zeroRecords": "No hay resultados",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles ",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    paginate: {
                        first: "Primera",
                        previous: "Primera",
                        next: "Última",
                        last: "Último"
                    },
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>





</body>

@toastr_js
@toastr_render

</html>
