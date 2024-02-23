<!DOCTYPE html>
<html lang="en">

<head>
@include('template.head')
</head>
<style class="">
    .gambar {
    width: 100px;
    height: 100px;
    }
</style>
<body>
    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
       @include('template.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading my-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3>BUKU KUU</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <section class="container">
                    <div class="row">
                        <div class="d-flex justify-content-end mb-3">
                            <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <table class="table table-bordered table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <img class="gambar" src="{{ url('gambar/orang.png') }}" alt="">
                                        </td>
                                        <td>
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>
                            Crafted with
                            <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://saugi.me">Saugi</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('dist/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('dist/assets/compiled/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>
