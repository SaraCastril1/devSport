<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="{{ asset('/sass/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/sass/home/index.css') }}">


    <title>@yield('title', 'DevSport')</title>
</head>

<body>
    <!-- header -->
    <header class="container-title">
        <h1 class = "title"><a class="nav-link active" href="">@yield('subtitle', 'DevSport')</a></h1>

        <!-- <div class="container-myaccount">
            <a class="myaccount" href=""><i class="fa-solid fa-user"></i></a>
            <a class="myorders" href=""><i class="fa-solid fa-basket-shopping"></i></a>
        </div> -->
    </header>

    <nav class="container-navbar">

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="">Home</a>
            <a class="nav-link" href="">About</a>
            <a class="nav-link" href="">Products</a>
            <a class="nav-link" href="">Cart</a>
            
        </div>


    </nav>

    
    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>


    <footer class="footer">
			
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Contact Information</p>
                    <ul>
                        <li>
                            Address: 71 Pennington Lane Vernon Rockville, CT
                            06066
                        </li>
                        <li>Phone: 123-456-7890</li>
                        <li>Fax: 55555300</li>
                        <li>EmaiL: devsport@support.com</li>
                    </ul>
                    <div class="social-icons">
                        <span class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </span>
                        <span class="pinterest">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </span>
                        <span class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div class="information">
                    <p class="title-footer">Information</p>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Juan Esteban Castro</a></li>
                        <li><a href="#">Andres Prada</a></li>
                        <li><a href="#">Sara Castrillon</a></li>
                    </ul>
                </div>

                <div class="my-account">
                    <p class="title-footer">My account</p>

                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">My orders</a></li>
                        <li><a href="#">My routines</a></li>
                        <li><a href="#">My shopping cart</a></li>
                    </ul>
                </div>
            </div>		
		</footer>



    <script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>

</body>

</html>