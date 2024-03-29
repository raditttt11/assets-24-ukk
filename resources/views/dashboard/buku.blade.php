<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
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
                    <h3>BUKU KUU</h3>
                </div>
            </div>
            <div class="page-content">
                <section class="container">
                    <div class="d-flex justify-content-end mb-3">
                        @if (Auth::user()->role !== 'peminjam')
                            <a class="btn btn-primary" href="{{ route('create') }}" role="button">Tambah Buku</a>
                        @endif
                    </div>
                    <form action="">
                        <table class="table table-bordered table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $item)
                                    <tr>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->thn_terbit }}</td>
                                        <td>{{ $item->kategori->kategori }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>
                                            <img class="gambar" name="gambar"
                                                src="{{ asset('storage/storage/image/' . $item->gambar) }}">
                                        </td>
                                        <td>
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('detail', $item->id) }}">detail</a></li>
                                                    @if (Auth::user()->role !== 'peminjam')
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('edit', $item->id) }}">Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('destroy', $item->id) }}">Hapus</a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </section>
            </div>
        </div>
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
