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
                            <h3>Edit Peminjaman</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-minjam', $pmjm->id) }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" name="judul" id="judul" value="{{ $pmjm->judul }}">
                                  <label for="floatingInput">Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="{{ $pmjm->tgl_pinjam }}">
                                    <label for="floatingInput">Tanggal Pinjam</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="{{ $pmjm->tgl_kembali }}">
                                    <label for="floatingInput">Tanggal Kembali</label>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                                        <option {{ $pmjm->status == "Dipinjam" ? 'selected' : '' }} name="status" value="Dipinjam">Dipinjam</option>
                                        <option {{ $pmjm->status == "Dikembalikan" ? 'selected' : '' }} name="status" value="Dikembalikan">Dikembalikan</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="peminjam" id="peminjam" value="{{ $pmjm->peminjam }}">
                                    <label for="floatingInput">Peminjam</label>
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






