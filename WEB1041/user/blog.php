<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
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
                                    href="./index.html">Home</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./about.html">About</a>
                            </li>
                            <li class="inline-block mr-12" style="color: #fff;font-size: 16px;"><a href="./contact.html">Contact</a>
                            </li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a
                                    href="./blog.html">Blog</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./product.html">Products</a>
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
                        <h1 style="text-align: center;">Blog</h1>
                        <nav>
                            <ul style="text-align: center;">
                                <li class="inline-block"><a href="./index.html">Home</a>></li>
                                <li class="inline-block"><a href="./about.html">About</a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="">
                        <img src="../image/m1.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="neww" style="padding-top: 30px;">
            <div class="row" style="display: grid;
            grid-template-columns: 3fr 350px;
            grid-gap: 10px;">
                <div class="left-col ">
                    <div class="blog">
                        <div style="display: flex; justify-content: center;">
                            <img src="../image/blog4.jpg" width="90%" alt="">
                        </div>

                        <h2 class="p-2" style="text-align: center;">HOW TO CHOOSE PERFECT MAKEUP BRUSHES</h2>
                        <p class="px-14">As we are preparing for these special seasons, I am as of now prepared
                            for the unavoidably driest season. It’s so awful in Utah that you need to put
                            cream on your hands on...</p>
                        <div class="pl-12" style="padding-bottom: 15px;">
                            <div class="a1">
                                <a href="" class="itme">
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="blog1">
                        <div style="display: flex; justify-content: center;">
                            <img src="../image/blog5 a.jpg" width="90%" alt="">
                        </div>
                        <h2 class="p-2" style="text-align: center;">THE ONLY TWO LIPSTICKS I NEED THIS WINTER</h2>
                        <p class="px-14">As we are preparing for these special seasons, I am as of now prepared
                            for the unavoidably driest season. It’s so awful in Utah that you need to
                            put cream on your hands on...</p>
                        <div class="pl-12" style="padding-bottom: 15px;">
                            <div class="a1">
                                <a href="" class="itme">
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;" >
                        <iframe width="840" height="450"  src="https://www.youtube-nocookie.com/embed/sBNy7Sykq0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="blog2">
                        <h2 class="p-2" style="text-align: center;">PRODUCTS TO MAKE YOUR MAKEUP PERFECT</h2>
                        <p class="px-14">As we are preparing for these special seasons, I am as of now prepared
                            for the unavoidably driest season. It’s so awful in Utah that you need to
                            put cream on your hands on...</p>
                        <div class="pl-12" style="padding-bottom: 15px;">
                            <div class="a1">
                                <a href="" class="itme">
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog3">
                        <div style="display: flex; justify-content: center;">
                            <img src="../image/blog6.jpg" width="90%" alt="">
                        </div>
                        <h2 class="p-2" style="text-align: center;">THE SKINCARE INGREDIENT U NEED</h2>
                        <p class="px-14">As we are preparing for these special seasons, I am as of now prepared
                            for the unavoidably driest season. It’s so awful in Utah that you need to
                            put cream on your hands on...</p>
                        <div class="pl-12" style="padding-bottom: 15px;">
                            <div class="a1">
                                <a href="" class="itme">
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog4">
                        <div style="display: flex; justify-content: center;">
                            <img src="../image/blog7.jpg" width="90%" alt="">
                        </div>
                        <h2 class="p-2" style="text-align: center;">HERBAL INGREDIENTS IN FRAGRANCE</h2>
                        <p class="px-14">As we are preparing for these special seasons, I am as of now prepared
                            for the unavoidably driest season. It’s so awful in Utah that you need to
                            put cream on your hands on...</p>
                        <div class="pl-12" style="padding-bottom: 15px;">
                            <div class="a1">
                                <a href="" class="itme">
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <div class="right-col" style="padding-right: 40px;">
                    <div class="right-blog-top">
                        <div class="img-top">
                            <img src="../image/makeup1.jpg" alt="">
                        </div>
                        <div style="border: 1px solid salmon; ">
                            <div class="img-bottom" style="display: flex; justify-content: center;">
                                <img src="../image/logo2.png" alt="">
                            </div>

                            <h4 style="text-align: center;">Hi! I`m the author of this blog. Read our post - be in
                                trend!</h4>
                            <nav>
                                <ul class="text-center pl-2 pt-2 ">
                                    <li class="inline-block mr-6 ">
                                        <p><i class="fab fa-facebook-f"></i></p>
                                    </li>
                                    <li class="inline-block mr-6 ">
                                        <p><i class="fab fa-twitter"></i></p>
                                    </li>
                                    <li class="inline-block mr-6 ">
                                        <p><i class="fab fa-invision"></i></p>
                                    </li>
                                    <li class="inline-block mr-6 ">
                                        <p><i class="fab fa-instagram"></i></p>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="p-2"></div>
                    <!-- end -->
                    <div class="right-blog-top2  " >
                        <h2 style="text-align: center;">CATEGORIES</h2>
                        <nav>
                            <ul>
                                <li class="pl-4" style="padding-top: 5px;"><a href="">Beauty</a>: 6</li>
                                <li class="pl-4" style="padding-top: 5px;"><a href="">Makeup</a>: 7</li>
                                <li class="pl-4" style="padding-top: 5px;"><a href="">Organic</a>: 9</li>
                                <li class="pl-4" style="padding-top: 5px;"><a href="">Skincare</a>: 12</li>
                                <li class="pl-4" style="padding-top: 5px;"><a href="">Mask</a>: 8</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="p-2"></div>
                    <div class="searchs">
                        <form action="">
                            <ul class="text-center">
                                <li class="inline-block" ><input style="padding: 5px ;border-radius: 5px; border: 1px solid;" type="text" placeholder="Search...." ></li>
                                <li class="inline-block ml-2" > <p><i  id="icon" class="fas fa-search"></i></p> </li>      
                            </ul> 
                        </form>
                    </div>
                    <div class="p-2"></div>
                    <!-- end -->
                    <div class="right-blog-top3">
                        <h2 style="text-align: center; padding-bottom: 10px;">RECENT POSTS</h2>
                        <div class="row" style="display: grid; grid-template-columns: 1fr 3fr;">
                            <div class="column">
                                <img src="../image/post1.jpg" width="100%" alt="">
                            </div>
                            <div class="column pl-2" >
                                <p style="font-size: 16px;">THE SKINCARE INGREDIENT U NEED</p>
                                <p>July 19, 2021</p>
                            </div>
                        </div>
                        <div class="row" style="display: grid; grid-template-columns: 1fr 3fr;">
                            <div class="column">
                                <img src="../image/post2.jpg" width="100%" alt="">
                            </div>
                            <div class="column pl-2" >
                                <p style="font-size: 16px;">THE SKINCARE INGREDIENT U NEED</p>
                                <p>July 18, 2021</p>
                            </div>
                        </div>
                        <div class="row" style="display: grid; grid-template-columns: 1fr 3fr;">
                            <div class="column">
                                <img src="../image/post3.jpg" width="100%" alt="">
                            </div>
                            <div class="column pl-2" >
                                <p style="font-size: 16px;">THE SKINCARE INGREDIENT U NEED</p>
                                <p>July 18, 2021</p>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="p-2"></div>
                    <div class="right-blog-top4">
                        <h2 style="text-align: center; padding-bottom: 10px;">POPULAR TAGS</h2>
                        <div>
                            <nav>
                                <ul >
                                    <li class="inline-block uppercase text-xs  pt-2  mr-2 "><a href="">
                                            <p class="tags">Beauty</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  pt-2  mr-2 "><a href="">
                                            <p class="tags">Cosmetic</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  pt-2  mr-2 "><a href="">
                                            <p class="tags">Cream</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  pt-2 mr-2"><a href="">
                                            <p class="tags">Foundation</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  pt-2 mr-2"><a href="">
                                            <p class="tags">Makeup</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs   pt-2  mr-2"><a href="">
                                            <p class="tags">Mask</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  pt-2 mr-2"><a href="">
                                            <p class="tags">Organic</p>
                                        </a></li>
                                    <li class="inline-block uppercase text-xs  mr-2"><a href="">
                                            <p class="tags">Skin Solution</p>
                                        </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end -->
                    <div style="padding: 5px;"></div>
                    <div class="right-blog-top5">
                        <h2 style="text-align: center; padding-bottom: 10px;">GALLERY</h2>
                        <div class="row1" style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
                            <div class="column1 mr-2" style="display: flex; justify-content: center;">
                                <img src="../image/gallery/gall1.jpg" width="100%" alt="">
                            </div>
                            <div class="column1 mr-2">
                                <img src="../image/gallery/gall2.jpg" width="100%" alt="">
                            </div>
                            <div class="column1 mr-2">
                                <img src="../image/gallery/gall3.jpg" width="100%" alt="">
                            </div>
                        </div>
                        <div class="row1" style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
                            <div class="column1 pt-2 mr-2" style="display: flex; justify-content: center;">
                                <img src="../image/gallery/gall4.jpg" width="100%" alt="">
                            </div>
                            <div class="column1 pt-2 mr-2">
                                <img src="../image/gallery/gall5.jpg" width="100%" alt="">
                            </div>
                            <div class="column1 pt-2 mr-2">
                                <img src="../image/gallery/gall6.jpg" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p style="padding-top: 30px;"></p>
        <footer style="border: 1px solid #ccc; background-color: black; ">
            <div style="display: flex; justify-content: center; padding-top: 60px;">
                <img src="image/logo.png" alt="">
            </div>
            <div class="formm p-4" style="display: flex;
            justify-content: center;">
                <form action="">
                    <input type="text" style="padding: 10px 65px; border-radius: 5px; " placeholder="Your email ...">
                    <div class="a1 " style="border-radius: 5px; padding: 10px 18px;">
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