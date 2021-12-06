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
                        <li class="inline-block mr-2" style="color: #fff;">
                                <p><i id="icon"  class="far fa-user"></i></p>
                        </li>
                        <li class="inline-block" style="color: #fff;">
                            <p><i class="fas fa-cart-plus"></i></p>
                        </li>
                    </ul>
    
                </form>
            </div>
        </div>
    
    </div>
    <div class="banner">
        <div class="container-banner owl-carousel owl-theme">
            
    
            <div class="content2">
                <div class="img">
                    <img src="../image/banner4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-8 m-16  ">        
        <aside class="col-span-4  mx-auto">
            <form role="search" method="get" class="mb-4" action="product.html">
                
                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…"
                    value="" name="s">
                <button class="search-button" type="submit" value="Search"><a href="#"><i class="fa fa-search"></i></a></button>
                
                <input type="hidden" name="post_type" value="product">
            </form>
            <hr>
            <div class="my-8">
                <div class=""><span class="title">CATEGORIES</span></div>
                
                <ul class="product-categories">
                    <li class="cat-item cat-item-43"><a href="">HAIR CARE: <span
                                class="post_count">2</span></a></li>
                    <li class="cat-item cat-item-26"><a href="">MAKEUP: <span
                                class="post_count">2</span></a></li>
                    <li class="cat-item cat-item-45"><a href="">ORGANIC: <span
                                class="post_count">4</span></a></li>
                    <li class="cat-item cat-item-44"><a href="">SKINCARE: <span
                                class="post_count">3</span></a></li>
                </ul>
            </div>
            <div class="my-8">
                <div class="title-wrapper"><span class="title">PRICE RANGE</span></div>
                <form method="get" action="">
                    <div class="price_slider_wrapper">
                        <div class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" >
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span
                                tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span
                                tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <div class="price_slider_amount" data-step="10">
                            <!-- <input type="range" min="1" max="100" value="50" class="slider" id="myRange"> -->
                            <input type="range" id="min_price" name="min_price" value="20" data-min="20" class="slider" id="myRange" placeholder="Min price"
                                style="display: none;">
                            <input type="range" id="max_price" name="max_price" value="50" data-max="50" class="slider" id="myRange" placeholder="Max price"
                                style="display: none;">
                            <button type="submit" class="button">Filter</button>
                            <div class="price_label" >
                                Price: <span class="from">$20</span> — <span class="to">$50</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <div class="title-wrapper"><span class="title">BEST SELLERS</span></div>
                <ul class="product_list_widget">
                    <li class="wgl_mini-cart_flex">
                        <div class="wgl_mini-cart_image">
                            <a href="">
                                <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/08/estee-lauder-double-wear-140x140.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="wgl_mini-cart_contents">
                            <a href="">DOUBLE POWDER</a>
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:80%">Rated <strong
                                        class="rating">4.00</strong> out of
                                    5</span></div>
                            <p class="price">
                                <span class=""><bdi><span
                                            class="">$</span>50.00</bdi></span>
                            </p>
                        </div>
                    </li>
                    <li class="wgl_mini-cart_flex">
                        <div class="wgl_mini-cart_image">
                            <a href="">
                                <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-11-140x140.jpg" alt=""> </a>
                        </div>
                        <div class="wgl_mini-cart_contents">
                            <a href="">BURGUNDY
                                EYESHADOW</a>
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:80%">Rated <strong
                                        class="rating">4.00</strong> out of
                                    5</span></div>
                            <p class="price">
                                <span class=""><bdi><span
                                            class="">$</span>31.00</bdi></span>
                            </p>
                        </div>
                    </li>
                    <li class="wgl_mini-cart_flex">
                        <div class="wgl_mini-cart_image">
                            <a href="">
                                <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-9-140x140.jpg" alt=""> </a>
                        </div>
                        <div class="wgl_mini-cart_contents">
                            <a href="">BURGUNDY
                                EYESHADOW</a>
                            <div class="star-rating" role="img" aria-label="Rated 3.50 out of 5"><span style="width:70%">Rated <strong
                                        class="rating">3.50</strong> out of
                                    5</span></div>
                            <p class="price">
                                <span class=""><bdi><span
                                            class="">$</span>22.00</bdi></span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <div class=""><span class="title">POPULAR TAGS</span></div>
                <div class="grid grid-cols-3 ">
                    <div class=""><button class="btn default">Beauty</button></div>
                    <div class=""><button class="btn default">Cosmetic</button></div>
                    <div class="ml-4"><button class="btn default">Cream</button></div>
                    <div class=" ml-4 "><button class="btn default">Foundation</button></div>
                    <div class="col-span-2 ml-8"><button class="btn default">Makeup</button></div>
                    <div class=""><button class="btn default">Organic care</button></div>
                    <div class="col-span-2 ml-8"><button class="btn default">Skin Solution</button></div>
                </div>
                   
            </div>
            <div>
                <div class="mt-8"><span class="title">SHOPPING CART</span></div>
                <div class="widget_shopping_cart_content">
                    <div class="woo_mini_cart">
                
                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                
                
                    </div>
                </div>
            </div>

        </aside>
        <section class="col-span-8 -ml-20 ">
            <div class="grid grid-cols-2 gap-8 ">
                <p class="col-span-1 my-auto text-left">Showing 1–9 of 11 results</p>
                <form class="col-span-1 my-auto mx-auto" method="get">
                    <select name="orderby" class="mb-4" aria-label="Shop order">
                        <option value="menu_order" class="text-right" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by latest</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select> <hr>
                    <input type="hidden" name="paged" value="1">
                </form>
                
            </div>
            <div class="mt-8 grid grid-cols-3  " >
                <!-- <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/04/product-11-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">BURGUNDY EYESHADOW</h1>
                    <p class="price">$20.00</p>
                    <div class="text-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    </div>
                    
                    <div class="overlay">
                        <div class="text"><p><button>Add to Cart</button></p></div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-2-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">BURGUNDY EYESHADOW</h1>
                    <p class="price">$20.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-8-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">BURGUNDY EYESHADOW</h1>
                    <p class="price">$36.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-9-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">BURGUNDY EYESHADOW</h1>
                    <p class="price">$22.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-11-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">BURGUNDY EYESHADOW</h1>
                    <p class="price">$31.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/08/estee-lauder-double-wear-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">DOUBLE POWDER</h1>
                    <p class="price">$50.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-3-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">DOUBLE POWDER</h1>
                    <p class="price">$50.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-2-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">LE ROUGE LIPSTICK</h1>
                    <p class="price">$40.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/product-5-540x720.jpg" alt="Avatar" class="image">
                    <h1 class="text-center">MINERAL POWDER</h1>
                    <p class="price">$50.00</p>
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                
                    <div class="overlay">
                        <div class="text">
                            <p><button>Add to Cart</button></p>
                        </div>
                    </div>
                </div> -->
                <?php
                        $i=0;
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                                    <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                    <p>$'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                            $i+=1;
                        }
                        
                    ?>
                </div>
                
                
            </div>

        </section>
    </div>
    <p style="padding-top: 30px;"></p>
    <footer style="border: 1px solid #ccc; background-color: black; ">
        <div style="display: flex; justify-content: center; padding-top: 60px;">
            <img src="../image/logo.png" alt="">
        </div>
        <div class="formm p-4" style="display: flex;
                justify-content: center;">
            <form action="">
                <input type="text" style="padding: 10px 65px; border-radius: 5px; " placeholder="Your email ...">
                <div class="a1 " style="border-radius: 5px; padding: 10px 18px;background:black;border: 1px solid #fff;">
                    <a href="" class="itme p-2">
                        <span>Subscribe</span>
                    </a>
                </div>
            </form>
        </div>
    
        <nav>
            <ul class="text-center p-4">
                <li class="inline-block mr-16  " style="color: #fff; font-size: 20px;"><a href="">Home</a></li>
                <li class="inline-block mr-16 " style="color: #fff;font-size: 20px;"><a href="">About</a></li>
                <li class="inline-block mr-16" style="color: #fff;font-size: 20px;"><a href="">Contact</a></li>
                <li class="inline-block mr-16 " style="color: #fff;font-size: 20px;"><a href="">Blog</a></li>
                <li class="inline-block mr-16 " style="color: #fff;font-size: 20px;"><a href="">Products</a></li>
            </ul>
        </nav>
        <nav>
            <ul class="text-center ">
                <li class="inline-block mr-12 ">
                    <p style="color: #fff;"><i class="fab fa-facebook-f"></i></p>
                </li>
                <li class="inline-block mr-12 ">
                    <p style="color: #fff;"><i class="fab fa-twitter"></i></p>
                </li>
                <li class="inline-block mr-12 ">
                    <p style="color: #fff;"><i class="fab fa-invision"></i></p>
                </li>
                <li class="inline-block mr-12 ">
                    <p style="color: #fff;"><i class="fab fa-instagram"></i></p>
                </li>
            </ul>
        </nav>
    </footer>
    </div>
    <script src="./OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>