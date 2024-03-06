@include('template.head')
@include('template.sidebar')

<div class="container-fluid">
    <div class="container">
        <div class="page-heading">
            <h3></h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="container">
                    <div class="">
                        <div class="col">
                            <h3 class="mt-3">Selamat Datang di Detail Profile </h3>
                            <div class="card">
                                <div class="card-body d-flex row ">
                                    <div class="col-6 position-relative d-flex align-items-center justify-content-center">
                                        <div class="">
                                            <div class="avatar avatar-2x1 ">
                                                <img src="{{ asset('storage/storage/image' . $user->gambar) }}" alt="avatar"
                                                    style="width: 200px; height:200px;">
                                            </div>
                                            <h3 class="mt-3 d-flex  justify-content-center ">{{ Str::title($user->name) }}</h3>
                                            <p class="text-small d-flex  justify-content-center">{{ Str::title($user->role) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" d-flex mt-5 col-6">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="judul-buku" class="form-label">Nama Lengkap</label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" readonly value="{{ $user->name }}"
                                                            id="name" name="name" placeholder="Nama Lengkap">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="penulis" class="form-label">Email</label>
                                                        <input type="email" value="{{ $user->email }}" class="form-control"
                                                            id="email" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Judul" class="form-label">Nomor Telepon</label>
                                                        <input type="text" max="13" class="form-control" id="nomor-telepon"
                                                            name="no_telepon" value="{{ $user->no_telepon }}"
                                                            placeholder="Nomor Telepon">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Judul" class="form-label">Alamat</label>
                                                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">{{ $user->alamat }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Role" class="form-label">Role</label>
                                                        <input type="text" class="form-control" id="role" placeholder=""
                                                            value="{{ Str::title($user->role) }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <a href="{{ route('user.index') }}" class="btn btn-primary ">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
