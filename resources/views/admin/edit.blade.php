<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body>
    @include('template.sidebar')
                <div class="container">
                    <div class="card p-2">
                        <div class="card-header">
                            <h3>Edit Buku</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update', $adm->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" name="judul" id="judul" value="{{ $adm->judul }}">
                                  <label for="floatingInput">Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="penulis" id="penulis" value="{{ $adm->penulis }}">
                                    <label for="floatingPassword">Penulis</label>
                                </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" name="thn_terbit" id="thn_terbit" value="{{ $adm->thn_terbit }}">
                                            <label for="floatingPassword">Tahun Terbit</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            {{-- <input type="text" class="form-control" name="kategori" id="kategori" value="{{ $adm->kategori }}"> --}}
                                            <select class="form-select" name="id_kategori" aria-label="Default select example">
                                                @foreach ($kategori as $item)
                                                <option value="{{$item->id}}">{{$item->kategori}}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingPassword">Kategori</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="stok" id="stok" value="{{ $adm->stok }}">
                                            <label for="floatingPassword">Stok</label>
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" aria-label="file example" name="gambar" id="gambar">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/storage/image/'.$adm->gambar) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
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






