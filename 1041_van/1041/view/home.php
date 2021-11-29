<div class="banner">
            <div class="container-banner owl-carousel owl-theme">
                <div class="content1">
                    <div class="img ">
                        <img src="image/banner3.jpg" alt="">
                    </div>
                </div>

                <div class="content2">
                    <div class="img">
                        <img src="image/banner2.jpg" alt="">
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
                    <img src="image/m1.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
        <div class="title" style="text-align: center; padding-top: 30px;">
            <h1>WHAT`S NEW FOR YOU</h1>
        </div>
        <article>
            <div class="roww container-item owl-carousel owl-theme" style="padding-top: 30px;">
                <div class=" columnn border border-gray-50">
                    <!-- <div class="column">
                        <div id="hover-img">
                            <img   src="../image/product/sp1.jpg" alt="">
                        </div>  
                       
                        <ul class="text-center pt-4">
                            <li class="inline-block "><a class="yellow discoloration" href=""><i
                                        class="fas fa-star"></i></a></li>
                            <li class="inline-block "><a class="yellow discoloration" href=""><i
                                        class="fas fa-star"></i></a></li>
                            <li class="inline-block "><a class="yellow discoloration" href=""><i
                                        class="fas fa-star"></i></a></li>
                            <li class="inline-block "><a class="yellow discoloration" href=""><i
                                        class="fas fa-star-half-alt"></i></a></li>
                            <li class="inline-block "><a class="yellow discoloration" href=""><i
                                        class="far fa-star"></i></a></li>
                        </ul>
                        <div class="text-center">
                            <a class="discoloration" href="">Carrots Group Scal</a>
                        </div>
                        <p class="text-center">$32.00</p>
                    </div> -->
                  
                </div>
            </div>
        </article>
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
                        echo '<div style="border: 2px solid;
                        border-radius: 5px;" class="boxsp ' . $mr . '">
                                            <div class="row img"><a href="' . $linksp . '"><img width="50%" src="' . $hinh . '" alt=""></a></div>
                                            <p style="text-align: center;">$' . $price . '</p>
                                            <a style="text-align: center;font-size:16px;" href="' . $linksp . '">' . $name . '</a>
                                        
                                        </div>';
                        $i += 1;
                    }
                    ?>
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
                        <img src="image/m5.jpg" alt="">
                    </div>
                </div>
                <div class="columnn">
                    <img src="image/m6.jpg" alt="">
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
                    <li class="inline-block mr-12 "><img src="image/other/logo1.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo2.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo3.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo4.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo5.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo6.png" width="100px" alt=""></li>
                    <li class="inline-block mr-12 "><img src="image/other/logo7.png" width="100px" alt=""></li>
                </ul>
            </nav>
        </div>
        <div class="title2">
            <h1 style="text-align: center; padding:40px;">READ THE BLOG</h1>
        </div>
        <div class="blog">
          <div class="rowe">
            <div class="columne">
                    <img src="image/blog1.jpg" alt="">
                <div>
                   <h2 style="text-align: center; padding-top: 8px; "><a href="/1041/user/blog1.php">How to choose perfect makeup</a></h2>
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
                  <img src="image/blog2.jpg" alt="">
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
                <img src="image/blog3.jpg" alt=""> 
                <h2 style="text-align: center;padding-top: 8px;  "><a href="/1041/user/blog3.php">Herbal ingredients in fragrance</a></h2>
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