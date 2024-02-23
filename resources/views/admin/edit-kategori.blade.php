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
                            <form action="{{ route('update-kategori', $ktgri->id) }}" method="POST">
                                @csrf
                                    <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="kategori" id="kategori" value="{{ $ktgri->kategori }}">
                                            <label for="floatingPassword">Kategori</label>
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






