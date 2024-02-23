<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
                <h3 class="card-title text-center text-light fw-bold mt-3">Register</h3>
                <div class="card-body">
                    <form action="{{ route('postregister') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Usernane</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                        >
                                    </div>
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                        >
                                    </div>
                                    <div class="mb-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password" >
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                                {{-- <div class="col-6">
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Usernane</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                        >
                                    </div>
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Usernane</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                        >
                                    </div>
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Usernane</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                        >
                                    </div>
                                    <div class="mb-3 my-3 text-light fw-bold">
                                        <label for="exampleFormControlInput1" class="form-label">Usernane</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                        >
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
