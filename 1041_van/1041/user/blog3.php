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
                                    href="../index.php">Home</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./about.php">About</a>
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
                                <p><i id="icon" class="far fa-user"></i></p>
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
                        <h1 style="padding-top:500px ; padding-left: 100px; color:rgb(3, 2, 2); font-size:bold;">HERBAL INGREDIENTS IN FRAGRANCE</h1>
                        

                    </div>
                    <div class="">
                        <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/07/front-view-healthy.jpg" alt=""  width="100%" style="max-height:600px ;" >
                    </div>
                </div>

            </div>
        </div>
        <div class="neww" style="padding-top: 30px;">
            <div class="row" style="display: grid;
            grid-template-columns: 2fr 550px;
            grid-gap: 10px;">
                <div class="left-col  " style="padding-left: 220px;">
                    <p>As we are preparing for these special seasons, I am as of now prepared for the unavoidably driest season. It’s so awful
                    in Utah that you need to put cream on your hands on various occasions a day just to shield them from breaking. Hands are
                    a certain something, yet I’m significantly more aware of my facial skincare routine so I needed to share a couple of
                    things I’ve realized as of late (that we basically all do) around the special seasons that is 100% drying out your skin,
                    and a portion of my number one items to help hydrate and hold in that dampness!</p>
                    <br>
                    <p >The busiest travel season of the year is just about to kick off and it also happens to coincide with the driest time of
                    year, so I think it’s safe to say we’re all on high skincare alert. In-flight skincare routines are all the rage, but I
                    actually read a story recently that it might be drying out your skin even more. When you apply sheet masks in-flight, it
                    can bring the remaining moisture in your skin to the surface and then the dry plane air will basically absorb it all.</p>
                    <br>
                    <div  class="">
                        <img class="inline-block mr-4" src="https://wgl-demo.net/nuage/wp-content/uploads/2021/04/blog-single-1.jpg" alt="" width="270px">
                        <img class="inline-block " src="https://wgl-demo.net/nuage/wp-content/uploads/2021/04/blog-single-2.jpg" alt="" width="270px">
                    </div>

                    <h2 class="my-4">CHOOSE LIPSTICK WITH ORGANIC OILS</h2>

                    <p>Am I the last individual to become familiar with this one?! I generally imagined that the more sweltering the water, the
                    better yet it’s really accomplishing more damage than anything else. At the point when you wash with boiling water, you
                    strip your skin of the regular oils and therefore your face feels dry/dried. No one needs to utilize cold water,
                    particularly in the colder time of year, however all things being equal, utilize tepid water at whatever point you wash
                    your face. At that point apply your saturating items following – there will in any case be some dampness on your skin,
                    and your items will help seal it in</p>
                    <br>
                     <img src="https://wgl-demo.net/nuage/wp-content/uploads/2021/04/blog-single-4.jpg" alt="">

                    <h2 class="my-4">USE PASTEL COLORS</h2>
                    <p>There’s nothing cozier than turning up the warmth in the fall and winter. (Does any other individual love the smell of
                    the warmer when it kicks on unexpectedly of the period?) It dries out the air, yet a simple fix is adding a humidifier.
                    In the event that you haven’t, it has a tremendous effect! A tip for any of you constructing a home at this moment – you
                    can really have them assemble a humidifier framework into the house! It’s not as costly as I would have suspected, so it
                    was an easy decision thinking about the amount we had our humidifiers going.</p>


                    <form class="  w3-container w3-card-4 w3-light-grey  relative ">
                        <h1>LEAVE A REPLY</h1>
                        <div class="grid grid-cols-2 gap-8">
                            <p class="col-spans-1">
                                <label>Your Name*</label>
                                <input class="w3-input" type="text">
                            </p>
                            <p class="col-spans-1">
                                <label>Your Email*</label>
                                <input class="w3-input" type="text">
                            </p>
                        </div>
                        <p>
                            <label>Website</label>
                            <input class="w3-input" type="text">
                        </p>
                        <p>
                            <label>Your Comment</label>
                            <br>
                            <input type="text" name="" id="" placeholder="" class="p-8 text-0.5xl w-full mb-4 ">
                    
                        </p>
                        <button class="w3-button w3-black w3-border mb-8">POST COMMENT</button>
                    </form>
                </div>
                <!-- end -->
                <div class="right-col" style="padding-right: 220px; padding-left: 40px; ">
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
                    <div class="right-blog-top2  ">
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
                                <li class="inline-block"><input
                                        style="padding: 5px ;border-radius: 5px; border: 1px solid;" type="text"
                                        placeholder="Search...."></li>
                                <li class="inline-block ml-2">
                                    <p><i id="icon" class="fas fa-search"></i></p>
                                </li>
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
                            <div class="column pl-2">
                                <p style="font-size: 16px;">THE SKINCARE INGREDIENT U NEED</p>
                                <p>July 19, 2021</p>
                            </div>
                        </div>
                        <div class="row" style="display: grid; grid-template-columns: 1fr 3fr;">
                            <div class="column">
                                <img src="../image/post2.jpg" width="100%" alt="">
                            </div>
                            <div class="column pl-2">
                                <p style="font-size: 16px;">THE SKINCARE INGREDIENT U NEED</p>
                                <p>July 18, 2021</p>
                            </div>
                        </div>
                        <div class="row" style="display: grid; grid-template-columns: 1fr 3fr;">
                            <div class="column">
                                <img src="../image/post3.jpg" width="100%" alt="">
                            </div>
                            <div class="column pl-2">
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
                                <ul>
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
                <img src="../image/logo.png" alt="">
            </div>
            <div class="formm p-4" style="display: flex;
            justify-content: center;">
                <form action="">
                    <input type="text" style="padding: 10px 65px; border-radius: 5px;  " placeholder="Your email ...">
                    <div class="a1 " style="border-radius: 5px; padding: 10px 10px;background:black;border: 1px solid #fff;">
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