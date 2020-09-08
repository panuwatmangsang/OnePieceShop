<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="/css/index.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Products-details</title>
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

    <!------------- single product details ------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="/images/model/kaido/kaido.jpg" id="ProductImg" width="100%">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="/images/model/kaido/kaido.jpg" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/model/kaido/kaido2.jpg" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/model/kaido/kaido3.jpg" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/model/kaido/kaido4.jpg" class="small-img" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Models</p>
                <h1>สี่จักรพรรดิโจรสลัด KAIDO</h1>
                <h4>1500 baht</h4>
                <input type="number" value="1">
                <a href="#" class="btn-explore">Add To Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>สืนค้าใหม่100% <br>
                    วัสดุ Commodity:PVC <br>
                    ขนาดประมาณ: สูง 20 X กว้าง 16 cm <br>
                    น้ำหนัก: ประมาณ1.6กก <br>
                    บรรจุภัณฑ์ : KAIDO+กล่อง
                </p>
            </div>
        </div>
    </div>

    <!----------------- title ----------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>


    <!----------------- products ----------------->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="/images/model/model2.jpg">
                <h4>Kaido</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1500 baht</p>
            </div>
            <div class="col-4">
                <img src="/images/model/model8.jpg">
                <h4>Kaido</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1500 baht</p>
            </div>
            <div class="col-4">
                <img src="/images/model/model1.jpg">
                <h4>Kaido</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>1500 baht</p>
            </div>
            <div class="col-4">
                <img src="/images/model/model6.jpg">
                <h4>Kaido</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1500 baht</p>
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