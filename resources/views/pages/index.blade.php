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

    <title>One Piece Shop</title>
</head>

<body>
    <div class="header">
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
            <div class="row">
                <div class="col-2">
                    <h1>One Piece Shop</h1>
                    <p>ยินดีต้อนรับสู่ One Piece Shop ร้านค้าที่มีสิ่งของเกี่ยวกับวันพีชให้คุณได้เลือกซื้อมากมาย <br>
                        ไม่ว่าจะเป็น โมเดลวันพีช โปสเตอร์วันพีช เสื้อผ้าวันพีช เครื่องประดับอีกมากมาย <br>
                        ที่เราคัดสรรมาให้คุณโดยเฉพาะ <br>
                        <a href="{{ route('products') }}" class="btn-explore">Explore Now &#8594;</a>
                    </p>
                </div>
                <div class="col-2">
                    <img src="/images/one-piece-bg.png">
                </div>
            </div>
        </div>
    </div>

    <a class="gotoTopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="/images/categories1.png">
                </div>
                <div class="col-3">
                    <img src="/images/categories2.png">
                </div>
                <div class="col-3">
                    <img src="/images/categories3.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--------------- featured products -------------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
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
                <a href="{{ route('luffy3') }}"><img src="/images/model/luffy3/luffy31.jpg"></a>
                <h4>Monkey D Luffy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>900 THB</p>
            </div>
            <div class="col-4">
                <a href="{{ route('jinbe') }}"><img src="/images/model/jinbe/jinbe.jpg"></a>
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
                <a href="{{ route('luffyKatakuri') }}"><img src="/images/model/luffy-catacuri/luffy-catacuri.jpg"></a>
                <h4>Luffy And Katakuri</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1250 THB</p>
            </div>
        </div>

        <h2 class="title">Latest Products</h2>
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
                    <i class="fa fa-star-half"></i>
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
                    <i class="fa fa-star-half"></i>
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
                    <i class="fa fa-star-half"></i>
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
        </div>
    </div>

    <!--------------- offer --------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="/images/model/model9.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on OnePieceShop</p>
                    <h1>Luffy Ace Sabo</h1>
                    <small>Commodity material: PVC, <br>
                        Condition: 100% NEW, <br>
                        Size: Approx 15-17cm, <br>
                        Package: With Box <br>
                    </small>
                    <a href="{{ route('LAS') }}" class="btn-explore">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ------ testimonial -------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>สินค้ามีคุณภาพ 100% ครับ ไม่มีตำหนิสักที่ครับ ดีมากครับ</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="/images/nut.jpg">
                    <h3>Nut Panuwat</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>สินค้ามีคุณภาพ 100% ครับ ไม่มีตำหนิสักที่ครับ ดีมากครับ</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="/images/pet.jpg">
                    <h3>Pet Kanchanakan</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>สินค้ามีคุณภาพ 100% ครับ ไม่มีตำหนิสักที่ครับ ดีมากครับ</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="/images/nut2.jpg">
                    <h3>Nut Mangsang</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- ------ testimonial -------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="/images/brands1.jpg">
                </div>
                <div class="col-5">
                    <img src="/images/brands2.jpg">
                </div>
                <div class="col-5">
                    <img src="/images/brands3.jpg">
                </div>
                <!-- <div class="col-5">
                <img src="/images/brands1.jpg">
            </div>
            <div class="col-5">
                <img src="/images/brands1.jpg">
            </div> -->
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
<script src="js/index.js"></script>

</html>