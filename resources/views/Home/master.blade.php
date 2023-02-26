<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Laravel Pkg</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg  nav-fixed navbar-dark bg-dark mb-5" style="position:fixed;width:100%">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">PKG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-between">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">op1</a>
                            <a class="dropdown-item" href="#">op2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">0p3</a>
                        </div>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 rounded-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-sm btn-outline-success rounded-0" type="submit">Search</button>
                </form>
                <img src="" alt="" class="m-2 rounded-circle" style="height:2ch; width:20px"
                    srcset="">
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @include('Home.partial.sidebar')
            <div class="col-md-10" style="margin-left:225px;">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @stack('js')
</body>

</html>
