<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="/css/index.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- font fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Account</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="/images/logo3.png" alt="logo one piece" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a class="active" href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('products') }}">Product</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('account') }}">Accout</a></li>
                </ul>
            </nav>
            <a href="{{ route('cart') }}"><i class="fa fa-cart-arrow-down" style="font-size: 30px;"></i></a>
            <img src="/images/menu.png" class="menu-icon" onclick="menuToggle()">
        </div>
    </div>

    <a class="gotoTopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

    <!-------- account -------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="/images/one-piece-bg.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn-explore">Login</button>
                            <a href="#">Forgot password</a>
                        </form>
                        <form id="RegForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn-explore">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------- footer -------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="/images/play-store.png">
                        <img src="/images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="/images/logo3.png">
                    <p>our Purpose Is To Sustainably Make the pleasure and <br>
                        Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Conpons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <p class="copyright">Copyright 2020 - One Piece Shop</p>
        </div>
    </div>
</body>
<script src="js/index.js"></script>

</html>