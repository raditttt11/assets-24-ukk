@include('template.sidebar')
@include('template.head')
{{-- @section('content') --}}
<div class="container-fluid">
    <div class="container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Buat Ulasan</h3>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('ulas.store') }}" method="POST">
                                @csrf
                                <input type="text" hidden name="id_user" value="{{ Auth::user()->id }}" id="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="name" placeholder=""
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class= "mb-3">
                                    <label for="nama" class="form-label">Judul Buku</label>
                                    <select class="form-select" name="id_buku" aria-label="Default select example">
                                        @foreach ($buku as $bukus)
                                            <option value="{{ $bukus->id }}">{{ $bukus->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Beri Rating</label>
                                    <select class="form-select" aria-label="Default select example" name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ulasan" class="form-label">Komentar</label>
                                    <textarea name="ulasan" id="ulasan" cols="30" rows="10" maxlength="255" class="w-100 form-control"></textarea>
                                </div>
                                {{-- <a href={{ route('dashboard-admin.show', $buku->id) }}>
                                    <button type="button" class="btn btn-danger my-2 ">Batal </button>
                                </a> --}}
                                <a href="">
                                    <button type="reset" class="btn btn-warning my-2 text-white">Reset </button>
                                </a>
                                <a href="">
                                    <button type="submit" class="btn btn-primary my-2 ">Simpan </button>
                                </a>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
