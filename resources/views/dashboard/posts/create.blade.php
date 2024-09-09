<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <title>Tambah Postingan | AN App</title>
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
    {{-- Text Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
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
                                <h6 class="text-white text-capitalize ps-3">Tambah Postingan</h6>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group input-group-dynamic my-4">
                                        <label class="form-label">Nama Baju</label>
                                        <input type="text" class="form-control" name="nama_baju" id="nama_baju"
                                            value="{{ old('nama_baju') }}" required>
                                    </div>
                                    <div class="input-group input-group-dynamic my-4">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug"
                                            value="{{ old('slug') }}" required readonly>
                                    </div>
                                    <div class="input-group input-group-static">
                                        <label for="jenis_baju">Jenis Baju:</label>
                                        <select class="form-control" name="category_id" id="jenis_baju">
                                            @foreach ($categories as $category)
                                            @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->kategori_baju }}
                                            </option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->kategori_baju }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="form-label mt-4">Foto Baju</label>
                                    <img src="" class="img-preview img-fluid mb-1 col-sm-5 d-block" id="frame">
                                    @error('image')
                                    <div class="alert alert-warning text-white" role="alert">
                                        <span class="alert-icon align-middle">
                                            <span class="material-icons text-md">
                                                warning
                                            </span>
                                        </span>
                                        <span class="alert-text"><strong>Warning!</strong> {{ $message }}</span>
                                    </div>
                                    @enderror
                                    <div class="input-group input-group-outline @error('image') is-invalid @enderror">
                                        <input type="file" class="form-control mb-2" name="image" id="image" onchange="preview()" required>
                                    </div>
                                    
                                    <div class="my-4">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        @error('deskripsi')
                                        <div class="alert alert-warning text-white" role="alert">
                                            <span class="alert-icon align-middle">
                                                <span class="material-icons text-md">
                                                    warning
                                                </span>
                                            </span>
                                            <span class="alert-text"><strong>Warning!</strong> {{ $message }}</span>
                                        </div>
                                        @enderror
                                        <input id="deskripsi" type="hidden" name="deskripsi"
                                            value="{{ old('deskripsi') }}">
                                        <trix-editor input="deskripsi"></trix-editor>
                                    </div>
                                    <div class="input-group input-group-dynamic my-4">
                                        <label class="form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control"
                                            value="{{ old('harga') }}" required>
                                    </div>
                                    <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                </form>
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
    <script>
        const nama_baju = document.querySelector('#nama_baju');
        const slug = document.querySelector('#slug');

        nama_baju.addEventListener('change', function () {
            fetch('/dashboard/posts/checkSlug?title=' + nama_baju.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        })

        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/assetsdashboard/js/material-dashboard.min.js?v=3.0.0"> </script>
</body>

</html>
