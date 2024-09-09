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
            <div class="row mt-1 mb-4">
                @forelse ($posts as $post)
                <div class="col-lg-3 col-md-6">
                    <div class="card mt-5" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->kategori_baju }}"
                                    class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow"
                                style="background-image: url(&quot;{{ asset('storage/' . $post->image) }}&quot;);"></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex mt-n6 mx-auto">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="Lihat Postingan">
                                    <i class="material-icons text-lg">visibility</i>
                                </a>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="Edit Postingan">
                                    <i class="material-icons text-lg">edit</i>
                                </a>
                            </div>
                            <h6 class="font-weight-normal mt-0 mb-0">
                                {{ $post->nama_baju }}
                            </h6>
                            <p class="mb-0">
                            {{ $post->excerpt }}
                            </p>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-primary mt-2 mb-0">Detail</a>
                        </div>
                        <hr class="dark horizontal my-0 mt-0">
                        <div class="card-footer d-flex">
                            <p class="font-weight-normal my-auto">{{ $post->category->kategori_baju }}</p>
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">sell</i>
                            <p class="text-sm my-auto">{{ $post->harga }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12">
                    <div class="card">
                        <h1 class="text-center mt-4 mb-4">Saat ini belum ada postingan. Silahkan tambah postingan!</h1>
                    </div>
                </div>
                @endforelse
                {{-- <div class="col-md-4 col-sm-12 mt-4">
            <div class="card">
                <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" >
                <div class="card-body">
                    <h5 class="card-title">{{ $post->nama_baju }}</h5>
                <a href="#" class="btn btn-primary">Baca Artikel</a>
            </div>
        </div>
        </div> --}}
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
</body>

</html>
