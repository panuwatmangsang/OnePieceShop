<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="/css/index.css">

    <!-- font fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>All Products</title>
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
            <h2>All Products</h2>
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
                <a href="{{ route('jinbe') }}"><img src="../images/model/jinbe/jinbe.jpg"></a>
                <h4>Jinbe</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
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
                <a href="{{ route('hancock') }}"><img src="/images/model/hancock/hancock.jpg"></a>
                <h4>Boa Hancock</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>550 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('accessories1') }}"><img src="/images/accessories/accessories1.jpg" height="240px"></a>
                <h4>Necklace</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150 THB</p>
            </div>
            <div class="col-4">
            <a href="{{ route('sundry8') }}"><img src="/images/sundry/sundry3.jpg"></a>
                <h4>Mattress set</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>400 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('accessories9') }}"><img src="/images/accessories/accessories9.jpg"></a>
                <h4>Bangle</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>130 THB</p>
            </div>
            <div class="col-4">
            <a href="{{ route('sundry3') }}"><img src="/images/sundry/bepo3/bepo31.jpg"></a>
                <h4>ฺBepo</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>250 THB</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('poster1') }}"><img src="/images/poster/poster1.jpg"></a>
                    <h4>God Usopp</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>300 THB</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('poster11') }}"><img src="/images/poster/poster11.jpg"></a>
                    <h4>Monkey D Luffy</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>350 THB</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('shirt10') }}"><img src="/images/shirt-shorts/shirt10.jpg"></a>
                    <h4>Luffy Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>200 THB</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('shirt4') }}"><img src="/images/shirt-shorts/shirt4.jpg"></a>
                    <h4>Luffy Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>199 THB</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('accessories8') }}"><img src="/images/accessories/accessories8.jpg"></a>
                    <h4>Hancock Earrings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>140 THB</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('accessories3') }}"><img src="/images/accessories/accessories3.jpg"></a>
                    <h4>Zoro Sword</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>125 THB</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('poster3') }}"><img src="/images/poster/poster3.jpg"></a>
                    <h4>Monkey D Dragon</h4>
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
                    <a href="{{ route('poster9') }}"><img src="/images/poster/poster9.jpg"></a>
                    <h4>Shank Coos</h4>
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
<script src="{{asset('/js/index.js')}}"></script>

</html>