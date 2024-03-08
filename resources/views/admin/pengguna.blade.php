@include('template.head')
@include('template.sidebar')

<div class="container-fluid">
    <div class="container">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 mb-3 p-2 order-last">
                        <h3>Data Pengguna</h3>
                    </div>
                </div>
                <section class="section min-vh-100">
                    <div class="card">
                        <div class="card-header">
                            <ul class="d-flex justify-content-end">
                                <a href="{{ route('user.create') }}">
                                    <button type="button" class="btn btn-success d-flex"><i class="bi bi-plus-circle me-1"></i>
                                        Tambah
                                        Pengguna</button>
                                </a>
                            </ul>
                        </div>
                        <div class="card-body min-vh-100">
                            <table class="table table-striped table-bordered my-2" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ Str::title($item->name) }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ Str::title($item->role) }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-primary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('user.show', $item->id) }}"><i
                                                                    class="bi bi-eye"></i>
                                                                Detail</a></li>
                                                        {{-- <li><a class="dropdown-item"
                                                                href="{{ route('user.edit', $item->id) }}"><i
                                                                    class="bi bi-pencil"></i>
                                                                Edit</a>
                                                        </li> --}}
                                                        <form action="{{ route('user.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <li><button type="submit" class="dropdown-item" href="#"><i
                                                                        class="bi bi-trash"></i>
                                                                    Delete</button></li>
                                                        </form>
                                                    </ul>
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
</div>

