<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body>
    @include('template.sidebar')
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="card p-2">
                                <div class="card-header">
                                    <h3>Tambah Buku</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="name@example.com">
                                        <label for="floatingInput">Judul</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="name@example.com">
                                            <label for="floatingPassword">Penulis</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" name="thn_terbit" id="thn_terbit" placeholder="name@example.com">
                                            <label for="floatingPassword">Tahun Terbit</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <select class="form-select" aria-label="Default select example" name="id_kategori">
                                                @foreach ($kategori as $kategorii)
                                                    <option value="{{ Str::title($kategorii->id) }}">
                                                        {{ Str::title($kategorii->kategori) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Comments</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="stok" id="stok" placeholder="name@example.com">
                                            <label for="floatingPassword">Stok</label>
                                        </div>
                                                <div class="mb-3">
                                                    <input type="file" class="form-control" aria-label="file example" name="gambar" id="gambar">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>

    <script src="{{ asset('dist/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('dist/assets/compiled/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>






