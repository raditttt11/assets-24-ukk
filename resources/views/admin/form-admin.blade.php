@include('template.head')
@include('template.sidebar')

<div class="container">
    <div class="container-fluid">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Pengguna</h3>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        @if ($errors->any())
                            <h3>{{ $errors }}</h3>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="name"
                                                placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="jk">
                                                <option selected>Pilih jenis kelamin</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="password" name="tgl_lahir"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" id="telepon" name="no_telepon"
                                                placeholder="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="********">
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="role">
                                                <option selected>Pilih Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Pegawai</option>
                                                <option value="3">Peminjam</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="d-block w-100 form-control"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Foto Profile</label>
                                            <input type="file" class="form-control" name="gambar" id="gambar">
                                        </div>


                                    </div>
                                    <div>
                                        <div class="d-flex d-flex justify-content-start">

                                            <a href="" class="mx-2">
                                                <button type="button"
                                                    class="btn btn-danger text-white w-100 my-2  ">Batal</button>
                                            </a>
                                            <a href="" class="mx-2">
                                                <button type="reset"
                                                    class="btn btn-warning text-white w-100 my-2  ">Reset</button>
                                            </a>
                                            <a href="" class="mx-2">
                                                <button type="submit"
                                                    class="btn btn-success text-white w-100 my-2  ">Tambah</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>
</div>
