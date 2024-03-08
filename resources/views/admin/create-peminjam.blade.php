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
                <h3></h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store-peminjam') }}" method="POST">
                    @csrf
                    <select class="form-select" name="id_buku" aria-label="Default select example">
                        @foreach ($book as $item)
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                        @endforeach
                    </select>
                    <input type="text" hidden value="{{Auth::user()->id}}" class="form-control" name="id_user" id="tgl_minjam"
                            placeholder="name@example.com">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="tgl_pinjam" id="tgl_minjam"
                            placeholder="name@example.com">
                        <label for="floatingPassword">Tanggal Pinjam</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali"
                            placeholder="name@example.com">
                        <label for="floatingPassword">Tanggal Kembali</label>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="status" id="status">
                            <option selected>- Pilih Status -</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="jml_pinjam" id="peminjam"
                            placeholder="name@example.com">
                        <label for="floatingPassword">Jumlah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="peminjam" id="judul" value="{{Auth::user()->name}}" readonly>
                        <label for="floatingInput">Peminjam</label>
                      </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn-close" aria-label="Close"></button>
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
