<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/products.css">
    <title>Document</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @media (max-width : 640px) {
            .content {
                display: block;
            }
        }

        @media (max-width : 1024px) and (min-width : 640px) {
            .content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 10px;
            }

        }
        *{
    padding: 0;
    margin: 0;
}
    
        .btn {
            margin-left: -22px;
            margin-top: 5px;
  border: 1px solid black;
  background-color: white;
  color: black;
  padding: 8px 12px;
  font-size: 13px;
  cursor: pointer;
}
        .default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #353232;
}
        .slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
.title{
    font-size: 25px;
}
.container {
  position: relative;
  width: 70%;
 
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
.price {
    text-align: left;
  color: grey;
  
}
.checked {
    
  color: orange;
}
.overlay button {
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
}

.overlay button:hover {
  opacity: 0.5;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: gainsboro;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
  
  
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
   border: black;
    opacity: 0.7;
   transform: none;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;

}
    </style>
    
</head>
<body>
    <div class="header" style="border: 1px solid #ccc; background-color: black;">
        <div class="rowss" style="display: grid;
                           grid-template-columns: 120px 1fr 350px;">
            <div class="columnss" style="padding-left: 20px;">
                <img src="../image/logo.png" alt="logo" style="width:100px;">
            </div>
            <div class="columnss">
                <nav>
                    <ul class="text-center p-4">
                        <li class="inline-block mr-12 pt-2 " style="color: #fff;font-size: 16px; "><a
                                href="./index.html">Home</a></li>
                        <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./about.html">About</a></li>
                        <li class="inline-block mr-12" style="color: #fff;font-size: 16px;"><a href="./contact.html">Contact</a></li>
                        <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./blog.html">Blog</a>
                        </li>
                        <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./product.html">Products</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sea " style="margin-top: 30px;margin-left: -50px;">
                <form action="">
                    <ul class="text-center">
                        <li class="inline-block"><input style="padding: 5px ;border-radius: 5px;" type="text"
                                placeholder="Search"></li>
                        <li class="inline-block mr-2" style="color: #fff;">
                            <p><i id="icon" class="fas fa-search"></i></p>
                        </li>
                        <li class="inline-block" style="color: #fff;">
                            <p><i class="fas fa-cart-plus"></i></p>
                        </li>
                    </ul>
    
                </form>
            </div>
        </div>
    
    </div>