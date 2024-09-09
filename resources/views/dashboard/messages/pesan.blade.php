<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <title>Dashboard | AN App</title>
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
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Pesan/Pertanyaan</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-center text-dark text-xxs font-weight-bolder opacity-7">No</th>
                          <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Pengirim</th>
                          <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                          <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Subject</th>
                          <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Kelola</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($messages as $message)                
                        <tr>
                          <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                          </td>
                          <td>
                            <h6 class="text-sm">{{ $message->name }}</h6>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $message->email }}</p>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $message->subject }}</p>
                          </td>
                          <td class="align-middle text-center">
                            <a class="btn btn-link text-info px-3 mb-0" href="/dashboard/messages/{{ $message->id }}"><i class="material-icons ms-auto text-info cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">visibility</i></a>
                            <button class="btn btn-link text-danger px-3 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="material-icons ms-auto text-danger cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">delete</i></button>
                            <form action="/dashboard/messages/{{ $message->id }}" method="POST" class="d-inline">
                              @csrf
                              @method('delete')
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel"><strong>Perhatikan!</strong></h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-start">
                                            Yakin ingin menghapus pesan?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button class="btn bg-gradient-primary">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <div class="card-body">
                            <h1 class="text-center">Belum ada pesan masuk</h1>
                          </div>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
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
    <script src="/assets/assetsdashboard/js/material-dashboard.min.js?v=3.0.0"></script>
    @include('sweetalert::alert')
</body>

</html>
