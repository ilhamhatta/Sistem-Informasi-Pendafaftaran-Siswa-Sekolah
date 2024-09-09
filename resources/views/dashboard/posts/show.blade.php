<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <title>Kelola Postingan | AN App</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="/assets/assetsdashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/assetsdashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/assetsdashboard/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('dashboard.komponen_dashboard.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('dashboard.komponen_dashboard.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h5 class="mb-4">Detail Postingan</h5>
                                </div>
                                <div class="col-6 text-end mb-4">
                                    <a href="/dashboard/posts"><i
                                            class="material-icons ms-auto me-2 text-success cursor-pointer"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Kembali">arrow_back_ios</i></a>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit"><i
                                            class="material-icons ms-auto me-1 text-warning cursor-pointer"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit Postingan">edit</i></a>
                                    <button class="me-3" style="border: none; background-color:white"
                                        title="Hapus Postingan" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="material-icons ms-auto text-danger cursor-pointer"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Hapus Postingan">delete</i></button>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">
                                                            <strong>Perhatikan!</strong></h5>
                                                        <button type="button" class="btn-close text-dark"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        Yakin ingin menghapus postingan?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button class="btn bg-gradient-primary">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6 text-center">
                                        <img class="w-100 border-radius-lg shadow-lg mx-auto"
                                            src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}">
                                    </div>
                                    <div class="col-lg-5 mx-auto">
                                        <h3 class="mt-lg-0 mt-4">{{ $post->nama_baju }}</h3>
                                        <div class="rating">
                                            <h5 class="text-secondary">{{ $post->category->kategori_baju }}</h5>
                                        </div>
                                        <h6 class="mb-0 mt-3">Harga</h6>
                                        <h5>Rp {{ $post->harga }}</h5>
                                        <i class="material-icons text-info">fiber_manual_record</i>
                                        <i class="material-icons text-primary">fiber_manual_record</i>
                                        <i class="material-icons text-warning">fiber_manual_record</i>
                                        <i class="material-icons text-success">fiber_manual_record</i>
                                        <br>
                                        <h6 class="mt-2">Deskripsi</h6>
                                        <ul>
                                            <p class="text-dark">
                                                {!! $post->deskripsi !!}
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('dashboard.komponen_dashboard.setting')
    <!--   Core JS Files   -->
    <script src="/assets/assetsdashboard/js/core/popper.min.js"></script>
    <script src="/assets/assetsdashboard/js/core/bootstrap.min.js"></script>
    <script src="/assets/assetsdashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/assetsdashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=/assets/assetsdashboard/js/material-dashboard.min.js?v=3.0.0"> </script> @include('sweetalert::alert')
        </body> </html>
