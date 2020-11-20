<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Amalitech E-Commerce</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="assets/css/home-style.css" rel="stylesheet">

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>



    <style>
        .active-img{
            border: 1px solid #252950;
        }
        .button:hover,
        .size:hover{
            background-color: #252950 !important;
            color: #fff;
        }
        .button,
        .size{
            transition: 0.5s ease-in-out;
        }

        .active-size {
            background-color: #252950 !important;
            color: #fff;
        }

        .btn-primary{
            background-color: #252950 !important;
            border-radius: 0px !important;
            transition: 0.5ms ease-in-out;
        }

        .btn-primary :hover{
            background-color: #fff !important;
            color: #252950 !important;
        }

        .navbar-light .navbar-nav .nav-link{
            color: #252950;
        }

        .navbar-light .navbar-nav .nav-link .active{
            color: #eb376f;
        }
    </style>


</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top shadow-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">vineyard vine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarNav">
            <ul class="navbar-nav ml-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">GIFTS <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WOMEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BOYS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GIRLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MORE SIZES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TILES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MORE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">SALE</a>
                        <a class="dropdown-item" href="#">OUR STORY</a>

                    </div>
                </li>
            </ul>
            <a href="#" class="navbar-nav mr-auto">
                <span class="fa fa-shopping-cart"></span>
                <span class="badge badge-danger notification">*</span>
            </a>
        </div>
    </div>

</nav>

<main class="mt-5 pt-5">
    <section class="container">
        <section class="row">
            <h6 class="small">Home > Cart</h6>
        </section>
        <section class="row">
            <aside class="col-sm-3"></aside>
            <section class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 id="title"></h2>
                        <h1>GH&cent; <span id="amount">120</span></h1>
                        <div class="row mt-4">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mt-2 shadow-sm button remove" style="width: 30px; height: 30px; border-radius: 255px; border: 1px solid #252950; cursor: pointer">
                                            <p class="text-center" style="padding-top: 3px"><span class="fa fa-minus"></span> </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="width: 40px; height: 40px;  border: 1px solid #252950">
                                            <p class="text-center quantity" style="padding-top: 6px"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="mt-2 ml-2 shadow-sm button add" style="width: 30px; height: 30px; border-radius: 255px; border: 1px solid #252950; cursor: pointer">
                                            <p class="text-center" style="padding-top: 3px"><span class="fa fa-plus"></span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="coupon" placeholder="Coupon code">
                                    </div>
                                    <button class="btn btn-primary addCode">Add</button>
                                </form>
                            </div>
                            <div class="col-sm-2"></div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-block btn-danger clear" style="background-color: #ca0d47" id="delete">Clear cart</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-block btn-primary" id="proceed">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="col-sm-3"></aside>
        </section>
    </section>
</main>

</body>
</html>
<script>
    $(document).ready(function () {
        var item = window.localStorage.getItem('item');
        var size = window.localStorage.getItem('size');
        var color = window.localStorage.getItem('color');
        var quantity = window.localStorage.getItem('quantity');
        var amount = window.localStorage.getItem('amount');

        $('#title').html(item);
        $('.quantity').html(quantity);
        amount = parseFloat(amount) * parseInt(quantity);
        $('#amount').html(amount);

        $('.add').on('click', function () {
            if(quantity >= 10){
                alert('You can only buy 10 items');
            }
            else{
                quantity = parseInt(quantity) + 1;
                $('.quantity').html(quantity);
                var newAmt = parseFloat(amount) * parseInt(quantity);
                $('#amount').html(newAmt);
            }
        });

        $('.remove').on('click', function () {
            if(quantity > 1){
                quantity = parseInt(quantity) - 1;
                $('.quantity').html(quantity);
                var newAmt = parseFloat(amount) * parseInt(quantity);
                $('#amount').html(newAmt);
            }
        });

        $('.addCode').on('click', function (e) {
            e.preventDefault();
            var c = $('#coupon').val();
            if(c && c.length == 5 ){
                var amount = $('#amount').html();
                var newAmt = parseFloat(amount) * 0.5;
                $('#amount').html(newAmt);
            }
            else{
                alert('Enter 5 character coupon code');
            }
        })

        $('#title').on('click', function () {
            window.location.href='index.html';
        })

        $('.clear').on('click', function () {
            window.localStorage.clear();
            window.location.href='index.php';
        })
    })
</script>