<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- banner -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
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
    </style>
    <script>
        $(document).ready(function () {
            $(".container-banner").owlCarousel({
                items: 1,
                loop: true,
                // autoplay: true
            });

            $(".container-item").owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true
            });
            $(".container-col").owlCarousel({
                items: 2,
                loop: true,
                margin: 10,
                // autoplay: true
            });
            $(".container-row").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                // autoplay: true
            });
        });
    </script>
</head>

<body>
    <div class="conatiner">
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
                                    href="../index.php">Home</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a
                                    href="./about.php">About</a>
                            </li>
                            <li class="inline-block mr-12" style="color: #fff;font-size: 16px;"><a href="./contact.php">Contact</a>
                            </li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a
                                    href="./blog.php">Blog</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./product.php">Products</a>
                            </li>
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
            <div class="banner">
                <div class="imga" style="position: relative;">

                    <div class="texts" style="position: absolute; text-align: center;">
                        <h1 style="text-align: center;">ABOUT</h1>
                        <nav>
                            <ul style="text-align: center;">
                                <li class="inline-block"><a href="./index.php">Home</a>></li>
                                <li class="inline-block"><a href="./blog.php">Blog</a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="">
                        <img src="../image/m1.jpg" alt="" width="100%">
                    </div>
                    <div class="" >
                        <h2  style="text-align: center;padding-top: 40px;font-weight: bold;font-size:40px">ABOUT US</h2>
                    </div>
                </div>

            </div>
        </div>
        <!-- end -->
        <div class="new1 p-8">
            <div class="row" style="display: grid; grid-template-columns: 1fr 1fr 1fr; grid-gap: 20px;">
                <div class="column" style="padding-top: 50px;" >
                    <img src="../image/ab1.jpg" alt="">
                </div>
                <div class="column" style="padding-top: 150px;">
                    <h2 style="text-align: center;">MORE THAN A SKINCARE BRAND</h2>
                    <p style="text-align: center;">As a skincare subject matter expert, we focus on furnishing ladies
                        with items that support their confidence and assist them with feeling
                        wonderful and agreeable in skin.</p>
                    <p style="text-align: center; padding-top: 10px;">Our situation: to offer ritualized magnificence, the ideal speculative
                        chemistry among care and development, a comprehensive way to deal with prosperity.</p>
                    <div class="imagee" style="display: flex; justify-content: center;">
                        <img src="../image/ab3.png" alt="">
                    </div>
                </div>
                <div class="column" style="padding-top: 120px;">
                    <img src="../image/ab2.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- end -->
        <h2 style="text-align: center;">CATEGORIES</h2>
        <article>
            <div class="roww container-item owl-carousel owl-theme" style="padding-top: 30px;">
                <div class=" columnn border border-gray-50">
                    <div class="column">
                        <div id="hover-img" style="padding-bottom: 10px;">
                            <img   src="../image/makeup/make.jpg" alt="">
                        </div>  
                        <div class="text-center">
                            <h2>
                            <a class="discoloration" href="">Mia Gonzales</a>
                        </h2>
                        </div>
                        <p class="text-center p-2">Photographer</p>
                    </div>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img" style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make1.jpg" alt="">
                    </div>  
                    <div class="text-center">
                        <h2>
                        <a class="discoloration" href="">Jill Thompson</a>
                    </h2>
                    </div>
                    <p class="text-center p-2">Makeup Artist</p>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img"style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make3.jpg" alt="">
                    </div>  
                    <div class="text-center">
                        <h2>
                        <a class="discoloration" href="">Amelia Wilson</a>
                    </h2>
                    </div>
                    <p class="text-center p-2">Makeup Model</p>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img" style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make4.jpg" alt="">
                    </div> 
                    <div class="text-center">
                        <h2>
                        <a class="discoloration" href="">Chelsea Clinton</a>
                    </h2>
                    </div>
                    <p class="text-center p-2">Makeup Artist</p>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img" style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make5.jpg" alt="">
                    </div>
                    <div class="text-center">
                        <h2><a class="discoloration p-2" href="">Claire redfield</a></h2>
                        
                    </div>
                    <p class="text-center p-2">Photographer</p>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img" style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make6.jpg" width="70%" alt="">
                    </div> 
                    <div class="text-center">
                        <h2>
                            <a class="discoloration p-2" href="">Chriss moore</a>
                        </h2>
                    </div>
                    <p class="text-center p-2">Photographer</p>
                </div>
                <div class="columnn border border-gray-50">
                    <div id="hover-img" style="padding-bottom: 10px;">
                        <img   src="../image/makeup/make7.jpg" width="70%" alt="">
                    </div>  
                    <div class="text-center">
                        <h2>
                            <a class="discoloration " href="">Katrin Perish</a>
                        </h2>
                    </div>
                    <p class="text-center p-2">Makeup Artist</p>
                </div>
            </div>
        </article>
        <!-- end -->

        <!-- end -->
        <div class="p-4"></div>
        <div class="other">
            <nav>
                <ul class="text-center ">
                    <li class="inline-block mr-12 "><img src="../image/other/logo1.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo2.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo3.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo4.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo5.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo6.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="../image/other/logo7.png" width="100px" alt=""></li>
                </ul>
            </nav>
        </div>
        <!-- end -->
        <div class="p-4"></div>
        <h2 style="text-align: center;">CLIENTS TESTIMONIALS</h2>
        <article>
            <div class="roww container-item owl-carousel owl-theme" style="padding-top: 30px;">
                <div class=" columnn border border-gray-50 p-4">
                    <div class="column">
                        <div class="text-center p-2">
                            <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                        </div>
                        <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                            <div class="columnn">
                                <div id="hover-img" style="padding-bottom: 10px;">
                                    <img class="p-2"  src="../image/makeup/make.jpg" width="100%" alt="">
                                </div> 
                            </div>
                            <div class="columnn pt-2">
                                <h2>
                                    <a class="discoloration " href="">Mia Gonzales</a>
                                </h2>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="columnn border border-gray-50 p-4">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                        <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                            <div class="columnn">
                                <div id="hover-img"style="padding-bottom: 10px;">
                                    <img  class="p-2" src="../image/makeup/make1.jpg" width="100%" alt="">
                                </div> 
                            </div>
                            <div class="columnn pt-2">
                                <h2>
                                    <a class="discoloration " href="">Jill Thompson</a>
                                </h2>
                            </div>
                        </div>
                        
                </div>
            </div>
                <div class="columnn border border-gray-50 p-4">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                    </div>
                    <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                        <div class="columnn">
                            <div id="hover-img"style="padding-bottom: 10px;">
                                <img class="p-2"  src="../image/makeup/make3.jpg" width="100%" alt="">
                            </div> 
                        </div>
                        <div class="columnn pt-2">
                            <h2>
                                <a class="discoloration " href="">Amelia Wilson</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="columnn border border-gray-50 p-4">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                    </div>
                    <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                        <div class="columnn">
                            <div id="hover-img" style="padding-bottom: 10px;">
                                <img class="p-2"  src="../image/makeup/make4.jpg" width="100%" alt="">
                            </div> 
                        </div>
                        <div class="columnn pt-2">
                            <h2>
                                <a class="discoloration " href="">Chelsea Clinton</a>
                            </h2>
                        </div>
                    </div>
                    
                </div>
                <div class="columnn border border-gray-50 p-4 ">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                    </div>
                    <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                        <div class="columnn">
                            <div id="hover-img" style="padding-bottom: 10px;">
                                <img class="p-2"  src="../image/makeup/make5.jpg" width="100%" alt="">
                            </div>
                        </div>
                        <div class="columnn pt-2 mr-2">
                            <h2>
                                <a class="discoloration " href="">Claire redfield</a>
                            </h2>
                        </div>
                    </div>
                    
                </div>
                <div class="columnn border border-gray-50 p-4">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                    </div>
                    <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                        <div class="columnn">
                            <div id="hover-img" style="padding-bottom: 10px;">
                                <img  class="p-2" src="../image/makeup/make6.jpg" width="100%" alt="">
                            </div> 
                        </div>
                        <div class="columnn pt-2 ">
                            <h2>
                                <a class="discoloration " href="">Chriss moore</a>
                            </h2>
                        </div>
                    </div>
                   
                </div>
                <div class="columnn border border-gray-50 p-4">
                    <div class="text-center p-2">
                        <h3>
                            <a class="discoloration m-4" href="">“Tony has is a really smart way to literally
                             set those fears aside… That to me, is unleashing the power within. Through his
                              work, I found my strength.”</a>
                        </h3>
                    </div>
                    <div class="roww" style="display: grid; grid-template-columns: 1fr 2fr;">
                        <div class="columnn">
                            <div id="hover-img" style="padding-bottom: 10px;">
                                <img class="p-2"  src="../image/makeup/make7.jpg" width="100%" alt="">
                            </div> 
                        </div>
                        <div class="columnn pt-4 mr-2">
                            <h2>
                                <a class="discoloration pt-6" href="">Katrin Perish</a>
                            </h2>
                        </div>
                    </div>
                     
                </div>
            </div>
        </article>
        <!-- end -->
        <p style="padding-top: 30px;"></p>
        <footer style="border: 1px solid #ccc; background-color: black; ">
            <div style="display: flex; justify-content: center; padding-top: 60px;">
                <img src="../image/logo.png" alt="">
            </div>
            <div class="formm p-4" style="display: flex;
            justify-content: center;">
                <form action="">
                    <input type="text" style="padding: 10px 65px; border-radius: 5px; " placeholder="Your email ...">
                    <div class="a1 "  style="border-radius: 5px; padding: 10px 18px;background:black;border: 1px solid #fff;" >
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
    <script src="../OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
</body>

</html>