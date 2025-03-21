
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trial Page For SNAP Project</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<!-- Custom CSS -->
<style>
    .animated-text {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
        font-family: 'Roboto', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    /* Fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @mixin gradient-bg($color: null) {
        background-color: $red: rgb(5, 6, 8);

            @if $enable-gradients {
                background-image: var(--#{$variable-prefix}gradient);
            }
        }
</style>


<body>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-sm navbar-light bg-danger">

            <a href="#" class="navbar-brand mb-0 h1">
                <img src="C:\xampp\htdocs\VistaBank_Screens\assets\vista-logo.png" class="logo-top1" width="50"
                    height="50">
                <span class="navbar-brand mb-0 h1 text-white"><b>Vista Bank</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link active text-white"><b>Search</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle text-white" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>About</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-white"><b>Contact IT</b></a>
                    </li>
                </ul>


            </div>

        </nav>
        <div class="row d-block">
            <div class="col" style="background-color: ">
                <!--Horizontal-->

                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">Customer</a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Customer Creation</a></li>

                                <li><a class="dropdown-item" href="#">Coorporate Customer Creation</a></li>
                                <li><a class="dropdown-item" href="#">Individual Customer</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>

                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">Funds
                                Transfer</a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href='FundsTransfer/BootStrapFTSMS.php'>FundsTransferSMS</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">Account</a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Account Creation</a></li>
                                <li><a class="dropdown-item" href="#">Dormant Account</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>

                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col" id="middlecarossoul">

                <div class="continer mt-4">
                    <!--Corousal-->
                    <div id="carousel-front" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <div style="
                                    background-image: url('images/pexels-kstupak-599982.jpg'); 
                                    height: 700px; 
                                    background-repeat: no-repeat; 
                                    background-size: cover; 
                                    background-position: center;" class="w-100 d-block">
                                    <div class="w-50 h-50 figure-img img-fluid rounded p-4 text-white"
                                        style="background-color:;">
                                        <p class="animated-text fs-1">Your Satisfaction Is Our
                                            Priority</p>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item" data-bs-interval="2000">
                                <div style="background-image:url('images/pexels-sliceisop-2529179.jpg'); height: 700px;height: 700px; 
                                background-repeat: no-repeat; 
                                background-size: cover; 
                                background-position: center" class="d-block w-100 ">

                                    <div class="w-50 h-50 figure-img img-fluid rounded  p-4 text-white"
                                        style="background-color: ">
                                        <p class="animated-text fs-1">Ubuntu - We Are Because You Are</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item" data-bs-interval="2000">
                                <div style="background-image:url('images/pexels-theonlyabdulla-29670295.jpg'); height: 700px;height: 700px; 
                                background-repeat: no-repeat; 
                                background-size: cover; 
                                background-position: center" class="d-block w-100 ">

                                    <div class="w-50 h-50 figure-img img-fluid rounded  p-4 text-white"
                                        style="background-color:">
                                        <p class="animated-text fs-1">Scale Your Business With The Right Bank
                                        <p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript"></script>
</body>

</html>