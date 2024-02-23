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
                <h3>Peminjaman</h3>
            </div>
            <div class="page-content">
                <section class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="p-2">
                                        <a class="btn btn-primary" href="{{ route('create-peminjam') }}" role="button">Disini Minjam !!</a>
                                    </div>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                                <table class="table table-bordered table-responsive">
                                    <thead class="table-light">
                                      <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Tanggal Kembali</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Peminjam</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($minjam as $item)
                                        <tr>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->tgl_pinjam }}</td>
                                            <td>{{ $item->tgl_kembali }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->peminjam }}</td>
                                            <td>
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ route('edit-peminjam', $item->id) }}">Edit</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('destroy-peminjam', $item->id) }}">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            @endforeach
                                        </tbody>
                                  </table>
                            </div>
                        </div>
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
