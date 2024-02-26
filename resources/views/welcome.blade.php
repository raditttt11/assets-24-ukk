<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        .font-a {
            font-family: "Inknut Antiqua", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed w-100" style="background-color: #ffffff">
        <div class="container">
            <span class="navbar-brand font-a fw-bold" href="/">BoBOO</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" name="about" href="#">About </a>
                        <a class="nav-link active" href="#"> Contact </a>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="collapse navbar-collapse" id="navbarSupported">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <a class="nav-link active" aria-current="page" href="{{ route('login')}}"> Login</a>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <a class="nav-link active" aria-current="page" href="{{ url('register') }}"> Register</a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- Home --}}
    <section class="home" id="home">
        <div class="container-fluid min-vh-100 text-light d-flex align-items-center" style="background-color: #0B0130">
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col">
                        <div class="text-mid">
                            <h1>BoBOO</h1>
                            <P class="mx-3">Temukan Berbagai Buku Hanya Di BoBOO</P>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <img src="{{ url('gambar/orang.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container-fluid min-vh-100 text-light d-flex align-items-center" style="background-color: #0B0130">
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col">
                        <div class="text-mid">
                            <h1>About US</h1>
                            <P class="mx-3">BoBOO Website Perpustakan Informasi Tentang Buku Yang Tersedia</P>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <img src="{{ url('gambar/paper.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-3 footer" style="background-color: #99C2FF">
        <div class="container">
            <div class="row">
                <h2 class="text-center fw-bold mt-3 mb-5">Kontak Kami</h2>
            </div>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item px-2 mx-3" style="">
                    <h1 class="bi bi-facebook"></h1>
                </li>
                <li class="nav-item px-2 mx-3">
                    <h1 class="bi bi-whatsapp"></h1>
                </li>
                <li class="nav-item px-2 mx-3">
                    <h1 class="bi bi-instagram"></h1>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
