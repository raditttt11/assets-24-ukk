@include('template.head')
@include('template.sidebar')


<div class="container-fluid">
    <div class="container">
        <div class="page-heading">
            <h3>Detail Buku</h3>
        </div>
        <div class="page-content">
            <section class="card">
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <ul>
                            <div class="row col-md-4 col-sm-12  position-absolute" style="left: 35px;">
                                <form action="{{ route('koleksi.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_buku" value="{{ $buku->id }}">
                                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                        <button type="submit" class="btn btn-primary position-absolute top-0 left-0">Tambah
                                            Koleksi</button>
                                    </form>
                            </div>
                        </ul>
                        <img src="{{ asset('storage/storage/image/' . $buku->gambar) }}" alt="" class="ms-3"
                            style="width:300px;">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <form action="" class="mx-2">
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">ID</label>
                                <input type="text" class="form-control" id="judul-buku" name="id_buku" placeholder=""
                                    readonly value="{{ $buku->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul-buku" name="judul" placeholder=""
                                    readonly value="{{ Str::title($buku->judul) }}">
                            </div>
                            <div class="mb-3">
                                <label for="jk" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder=""
                                    readonly value="{{ Str::title($buku->kategori->kategori) }}">
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" value="{{ Str::title($buku->penulis) }}"
                                    name="penulis" id="penulis" placeholder="" value="Budiono Siregar" readonly>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-12 px-sm-3">
                        <form action="" class="mx-2">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                    <input type="number" min="1900" max="2099" step="1" value="2005"
                                        class="form-control" value="{{ $buku->tahun_terbit }}" name="tahun_terbit"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" value="{{ $buku->stok }}"
                                        id="stok" placeholder="" value="20" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" style="height:120px" readonly>{{ $buku->deskripsi }}</textarea>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="d-flex d-flex justify-content-center mx-3">
                    @can('admin-pegawai')
                        <a href="{{ route('dashboard-admin.edit', $buku->id) }}" class="mx-2">
                            <button type="button" class="btn btn-warning text-white w-100 my-2  ">Edit</button>
                        </a>
                    @endcan
                </div>
            </section>

            <section class="ulasan min-vh-100">
                <div class="card min-vh-100">
                    <div class="card-header">
                        <ul class="d-flex justify-content-between">
                            <h3>Ulasan</h3>
                            <a href="{{ route('ulas.create', $buku->id) }}">
                                <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                                    Berikan
                                    Ulasan</button>
                            </a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered my-2" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Buku</th>
                                    <th>Ulasan</th>
                                    <th>Rating</th>
                                    <th>Pemberi Ulasan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ulas as $ulas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Str::title($ulas->buku->judul) }}</td>
                                        <td>{{ $ulas->ulasan }}</td>
                                        <td>{{ $ulas->rating }}</td>
                                        <td>{{ Str::title($ulas->user->name) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                @if ($ulas->id_user == Auth::user()->id)
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('ulas.edit', $ulas->id) }}"><i
                                                                    class="bi bi-pencil"></i>
                                                                Edit</a>
                                                        </li>
                                                        <form action="{{ route('ulas.destroy', $ulas->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <li><button type="submit" class="dropdown-item btn"
                                                                    href='ulas.destroy'><i class="bi bi-trash"></i>
                                                                    Delete</button></li>
                                                        </form>
                                                    </ul>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
