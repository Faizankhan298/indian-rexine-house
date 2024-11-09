<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #222;
        }
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            background-color: orange;
        }
        .navbar-custom .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            color: orange;
        }
        .footer h5 {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: orange;">Indian Rexine House</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(session('owner_logged_in'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Manage Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('owner.logout') }}">Logout</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('owner.login') }}">Owner Login</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="footer mt-5">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-md-4 col-sm-12 mb-4 mb-md-0">
                    <h5>Indian Rexine House<span style="color: orange;">.</span></h5>
                    <p>"Comfort Redefined, Quality Delivered."</p>
                    <p><strong>Got Questions? Call us 24/7:</strong><br>
                        <a href="tel:+91 9414327009" class="font-weight-bold" style="color: orange;">+91 9414327009</a>
                    </p>
                </div>
                <div class="col-md-2 col-sm-6 mb-4 mb-md-0">
                    <h5 style="color: orange;">Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4 mb-md-0">
                    <h5 style="color: orange;">Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Payment Methods</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h5 style="color: orange;">Get In Touch</h5>
                    <p>Shop No-3, Indian Rexine House, Chetak Housing Society, Dahod Road,
Office, Shriram Colony, Banswara, Rajasthan 327001
</p>
                    <p>Email: <a href="mailto:zahirahmadkhan31@gmail.com">zahirahmadkhan31@gmail.com</a></p>
                    <p>Phone: <a href="tel:+91 9414327009">+91 9414327009</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>