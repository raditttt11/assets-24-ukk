<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #0B0130">
    <div class="container-fluid d-flex align-items-center min-vh-100">
        <div class="container d-flex justify-content-center">
            <div class="card card-login " style="width: 500px; height: 500px; background-color: #0E0044">
                <a href="/" class="text-light my-2 d-flex justify-content-start">
                    <h3 class="bi bi-arrow-left-circle-fill ms-3 mt-3"></h3>
                </a>
                <h3 class="card-title text-center text-light fw-bold mt-3">Login</h3>
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('postlogin') }}" method="POST">
                            @csrf
                            <div class="mb-3 my-3 text-light fw-bold" style="height: 100px">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    name="email">
                            </div>
                            <div class="mb-3 text-light fw-bold">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control"
                                    name="password">
                            </div>

                            <div class="d-flex justify-content-center mt-5">
                                <button class="btn btn-primary" type="submit">Login</button>
                                {{-- <a class="nav-link" aria-current="page" href="{{ route('postlogin') }}">Login</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
