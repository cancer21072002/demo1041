<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
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
    @media (max-width : 640px){
      .content{
        display: block;
      }  
    }
    @media (max-width : 1024px) and (min-width : 640px) {
      .content{
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
                            <li class="inline-block mr-12 pt-2 " style="color: #fff;font-size: 16px; "><a href="./index.html">Home</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="./about.html">About</a></li>
                            <li class="inline-block mr-12"style="color: #fff;font-size: 16px;"><a href="./contact.html">Contact</a></li>
                            <li class="inline-block mr-12 "style="color: #fff;font-size: 16px;"><a href="./blog.html">Blog</a></li>
                            <li class="inline-block mr-12 "style="color: #fff;font-size: 16px;"><a href="./product.html">Products</a></li>
                        </ul>
                    </nav>  
                </div>
                <div class="sea " style="margin-top: 30px;margin-left: -50px;">
                    <form action="">
                        <ul class="text-center">
                            <li class="inline-block" ><input style="padding: 5px ;border-radius: 5px;" type="text" placeholder="Search" ></li>
                            <li class="inline-block mr-2" style="color: #fff;" > <p><i  id="icon" class="fas fa-search"></i></p> </li>
                            <li class="inline-block" style="color: #fff;" > <p><i class="fas fa-cart-plus"></i></p> </li>
                        </ul>
                        
                    </form>
                </div>
            </div>
              
        </div>
        <div class="banner">
            <div class="container-banner owl-carousel owl-theme">
                <div class="content1">
                    <div class="img ">
                        <img src="../image/bn2.jpg" alt="">
                    </div>
                </div>

                <div class="content2">
                    <div class="img">
                        <img src="../image/bn1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="information" style="padding-top: 30px;">
            <div class="rows">
                <div class="column" style="padding-left: 10px;">
                    <h2 style="font-size: 28px;padding-top: 20px;">TAKE TIME FOR YOURSELF TODAY </h2>
                    <p style="padding-top: 15px;">Inspired by apothecary know-how, we always strive to source ingredients that respect 
                        the environment. We focus on quality to respect the skin, and priority is always given
                         to those that are made in France.</p>
                    <!-- <button>Learn more</button> -->
                    <div class="a1">
                        <a href="" class="itme">
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <img src="../image/m1.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
        <div class="title" style="text-align: center; padding-top: 30px;">
            <h1>WHAT`S NEW FOR YOU</h1>
        </div>
        <article>
            <div class="roww container-item owl-carousel owl-theme" style="padding-top: 30px;">
                <!-- <div class=" columnn border border-gray-50">
                </div> -->
                <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $hinh = $img_path . $img;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo '<div style=" margin-left: 45px;
                         5px;  justify-content:center" class="boxsp ' . $mr . '">
                                            <div class="row img">< a href="' . $linksp . '"><img max-width="400px" style="justify-content:center; margin-left: 45px; "  src="' . $hinh . '" alt=""></a></div>
                                            <p style="text-align: center;">$' . $price . '</p>
                                            <a style="text-align: center;font-size:16px;  margin-left: 45px; " href="' . $linksp . '">' . $name . '</a>
                                        </div>';
                        $i += 1;
                    }
                    ?>
            </div>
        </article>
        
        <div class="learn" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="a1" >
                <a href="" class="itme">
                    <span>Learn more</span>
                </a>
            </div>
        </div>
        <div class="new"  >
            <div class="roww">
                <div class="imagee">
                    <div class="headd">
                        <h1 style="text-align: center;padding: 20px;color: black;">TRY NEW FOUNDATION</h1>
                        <p style="color: black;">Inspired by apothecary know-how, we always strive to source.</p>
                        <div class="learn" style="padding: 20px;">
                            <div class="a1" >
                                <a href="" class="itme">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <img src="../image/m5.jpg" alt="">
                    </div>
                </div>
                <div class="columnn">
                    <img src="../image/m6.jpg" alt="">
                </div>
                <div class="imagee">
                    <div class="headd">
                        <h1 style="text-align: center;padding: 20px; color: black;">SHINE LIKE A DIAMOND</h1>
                        <p style="color: black;">Inspired by apothecary know-how, we always strive to source.</p>
                        <div class="learn" style="padding: 20px;">
                            <div class="a1" >
                                <a href="" class="itme">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div >
                        <img src="../image/m7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
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
        <div class="title2">
            <h1 style="text-align: center; padding:40px;">READ THE BLOG</h1>
        </div>
        <div class="blog">
          <div class="rowe">
            <div class="columne">
                    <img src="../image/blog1.jpg" alt="">
                <div>
                   <h2 style="text-align: center; padding-top: 8px; "><a href="/1041/user/blog1.php">How to choose perfect makeup brushes</a></h2>
                   <div class="learn" style="padding: 20px;">
                    <div class="a1" >
                        <a href="/1041/user/blog1.php" class="itme">
                            <span>Read more</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
              <div class="columne">
                  <img src="../image/blog2.jpg" alt="">
                 <h2 style="text-align: center;padding-top: 8px; "><a href="/1041/user/blog2.php">Top 10 hand creams for soft skin</a></h2> 
                  <div class="learn" style="padding: 20px;">
                    <div class="a1" >
                        <a href="/1041/user/blog2.php" class="itme">
                            <span>Read more</span>
                        </a>
                    </div>
                </div>
              </div>
              <div class="columne">
                <img src="../image/blog3.jpg" alt=""> 
                <h2 style="text-align: center;padding-top: 8px;  "><a href="/1041/user/blog3.php ">Herbal ingredients in fragrance</a></h2>
                <div class="learn" style="padding: 20px;">
                  <div class="a1" >
                      <a href="/1041/user/blog3.php" class="itme">
                          <span>Read more</span>
                      </a>
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
                    <input type="text" style="padding: 10px 65px; border-radius: 5px; " placeholder="Your email ..." >
                    <div class="a1 "  style="border-radius: 5px; padding: 10px 18px;" >
                        <a href="" class="itme p-2">
                            <span >Subscribe</span>
                        </a>
                    </div>
                </form>
            </div>
            
            <nav>
                <ul class="text-center p-4">
                    <li class="inline-block mr-16  " style="color: #fff; font-size: 20px;"><a href="./index.html">Home</a></li>
                    <li class="inline-block mr-16 " style="color: #fff;font-size: 20px;"><a href="./about.html">About</a></li>
                    <li class="inline-block mr-16"style="color: #fff;font-size: 20px;"><a href="./contact.html">Contact</a></li>
                    <li class="inline-block mr-16 "style="color: #fff;font-size: 20px;"><a href="./blog.html">Blog</a></li>
                    <li class="inline-block mr-16 "style="color: #fff;font-size: 20px;"><a href="./product.html">Products</a></li>
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