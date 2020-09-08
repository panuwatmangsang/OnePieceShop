var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight = "0px";

function menuToggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }else{
        MenuItems.style.maxHeight = "0px";
    }
}
// document.getElementById("MenuImage").addEventListener("click",resetEmotes,false);



// ------------------------------- sticky navbar -------------------------------
// window.onscroll = function(){myFunctionSticky()};

// var navbar = document.getElementById("navbar");
// var sticky = navbar.offsetTop;

// function myFunctionSticky(){
//     if (window.pageYOffset >= sticky){
//         navbar.classList.add("sticky");
//     }else{
//         navbar.classList.remove("sticky");
//     }
// }
// $(window).on('scroll', function(){
//     if($(window).scrollTop()){
//         $('nav').addClass('black');
//     }
//     else{
//         $('nav').removeClass('black');
//     }
// })

// ---------------------- js for product gallery ---------------------- 
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function(){
    ProductImg.src = SmallImg[0].src;
}
SmallImg[1].onclick = function(){
    ProductImg.src = SmallImg[1].src;
}
SmallImg[2].onclick = function(){
    ProductImg.src = SmallImg[2].src;
}
SmallImg[3].onclick = function(){
    ProductImg.src = SmallImg[3].src;
}

// document.getElementById("ProDuctImg")

// ---------------------- js for toggle Form ---------------------- 

function register(){
    document.getElementById("LoginForm").style.transform = "translateX(0px)";
    document.getElementById("RegForm").style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}
function login(){
    document.getElementById("LoginForm").style.transform = "translateX(300px)";
    document.getElementById("RegForm").style.transform = "translateX(300px)";
    // document.getElementById("Indicator").style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(0px)";
}

// ---------------------- Option Redirect form one page to anoither page ----------------------
// function posterImages(){
//     // window.location.href = "{{ route('poster') }}";
//     console.log("ไปสักทีเหอะ ไอ้สัส");
// }