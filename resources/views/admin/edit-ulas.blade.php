@include('template.head')
@include('template.sidebar')
<div class="container-fluid">
    <div class="container">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Ulasan</h3>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('ulas.update', $ulas->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" hidden name="id_user" value="{{ Auth::user()->id }}" id="">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="" readonly
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Judul Buku</label>
                                    <select class="form-select" name="id_buku" aria-label="Default select example">
                                        @foreach ($buku as $buku)
                                            <option
                                                value="{{ $buku->id }}"{{ $buku->id == $ulas->buku->id ? 'selected' : '' }}>
                                                {{ $buku->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Beri Rating</label>
                                    <select class="form-select" name="rating" aria-label="Default select example">
                                        <option value="1"{{ $ulas->rating == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2"{{ $ulas->rating == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3"{{ $ulas->rating == '3' ? 'selected' : '' }}>3</option>
                                        <option value="4"{{ $ulas->rating == '4' ? 'selected' : '' }}>4</option>
                                        <option value="5"{{ $ulas->rating == '5' ? 'selected' : '' }}>5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Komentar</label>
                                    <textarea name="ulasan" id="ulasan" cols="30" rows="10" maxlength="255" class="w-100 form-control">{{ $ulas->ulasan }}</textarea>
                                </div>
                                {{-- <a href="{{ route('dashboard.show', $buku->id) }}">
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
