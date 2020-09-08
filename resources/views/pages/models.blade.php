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

    <title>All Products | Poster Images</title>
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

    <div class="small-container">
        <div class="row row-2">
            <h2>Models</h2>
            <select onchange="location = this.value;">
                <option>All</option>
                <option value="{{ route('models') }}">Medels</option>
                <option value="{{ route('poster') }}">Poster Images</option>
                <option value="{{ route('clothes') }}">Clothes</option>
                <option value="{{ route('accessories') }}">Accessories</option>
                <option value="{{ route('sundry') }}">Sundry</option>
            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="{{ route('kaido') }}"><img src="/images/model/kaido/kaido.jpg"></a>
                <h4>Kaido</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>650 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('jinbe') }}"><img src="/images/model/jinbe/jinbe.jpg"></a>
                <h4>Jinbe</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1300 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('luffy3') }}"><img src="/images/model/luffy3/luffy31.jpg"></a>
                <h4>Monkey D Luffy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>900 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('zoro') }}"><img src="/images/model/solo/solo.jpg"></a>
                <h4>Roronoa Zoro</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>450 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('marco') }}"><img src="/images/model/mulgo/mulgo.jpg"></a>
                <h4>Marco</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>400 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('luffyKatakuri') }}"><img src="/images/model/luffy-catacuri/luffy-catacuri.jpg"></a>
                <h4>Charlotte Katakuri</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1250 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('franky') }}"><img src="/images/model/frankky/frankky.jpg"></a>
                <h4>Frankky</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>450 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('hancock') }}"><img src="/images/model/hancock/hancock.jpg"></a>
                <h4> Boa Hancock</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>550 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('hancockShip') }}"><img src="/images/model/hancock-ship/hancock-ship.jpg"></a>
                <h4>Hancock Ship</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>300 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('luffy') }}"><img src="/images/model/luffy/luffy.jpg"></a>
                <h4>Monkey D Luffy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>500 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('luffy2') }}"><img src="/images/model/luffy2/luffy21.jpg"></a>
                <h4>Monkey D Luffy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>490 THB</p>
            </div>
            <div class="col-4">
            <a href="{{ route('miniLuffy') }}"><img src="/images/model/mini-luffy/mini-luffy.jpg"></a>
                <h4>Mini Luffy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>440 THB</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

    <!-- ------ footer -------->
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