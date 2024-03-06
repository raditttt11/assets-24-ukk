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
                            <h3>KOLEKSI BUKU KAMU</h3>
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
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($koleksi as $koleksi )
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td style="width: 150px; height: 200px"><img
                                                src="{{ asset('storage/storage/image' . $koleksi->buku->cover) }}" alt=""
                                                class="w-100">
                                        </td>
                                        <td class="text-center">{{ Str::title($koleksi->buku->judul) }}</td>
                                        <td class="text-center">{{ Str::title($koleksi->buku->penulis) }}</td>
                                        <td>
                                            <div class="dropdown text-center">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dashboard-admin.show', $koleksi->buku->id) }}"><i
                                                                class="bi bi-eye"></i>
                                                            Detail</a></li>
                                                    <form action="{{ route('koleksi.destroy', $koleksi->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <li><button type="submit" class="dropdown-item" href="#"><i
                                                                    class="bi bi-trash"></i>
                                                                Delete</button></li>
                                                    </form>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
