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
                <h3>BUKU KUU</h3>
            </div>
            <div class="page-content">
                <section class="container">
                    <div class="d-flex justify-content-end mb-3">
                        <a class="btn btn-primary" href="{{ route('create') }}" role="button">Tambah Buku</a>
                    </div>
                        <form action="">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                  <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $item )
                                  <tr>
                                    <td>{{  $item->judul }}</td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>{{ $item->thn_terbit }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>
                                        {{ $item->image }}
                                        {{-- <img {{ asset('storage/' . $item->image) }}> --}}
                                    </td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Detail</a></li>
                                            <li><a class="dropdown-item" href="{{ route('edit', $item->id) }}">Edit</a></li>
                                            <li><a class="dropdown-item" href="{{ route('destroy', $item->id) }}">Hapus</a></li>
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
