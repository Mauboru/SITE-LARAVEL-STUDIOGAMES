<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAC - TECNOMAUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .navbar-brand {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .navbar-nav {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .nav-link {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        span {
            color: #8A2BE2;
        }
    </style>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex flex-column align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('logo.png') }}" alt="Logo" width="350" height="350">
                </a>
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8B008B" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                            </svg>
                            <span class="ms-1 align-middle">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8B008B" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                            <span class="ms-1 align-middle">Registro</span>
                        </a>
                    </li>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>