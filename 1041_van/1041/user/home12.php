<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
    .title{
        font-size: 30px;
        text-align: center;
        font-family: Montserrat;
    }
</style>
<div >
    <div class="boxtrai mr">
        <div >
            <div class="banner mb">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 4</div> -->
                        <img src="view/image/bannerjordan1.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                    </div>

                    <div class="mySlides fade">
                        <!-- <div class="numbertext">2 / 4</div> -->
                        <img src="view/image/bannerjordan2.png" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                    </div>

                    <div class="mySlides fade">
                        <!-- <div class="numbertext">3 / 4</div> -->
                        <img src="view/image/bannerjordan1.jpg" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        </div>
        <div>
                        <h2 class="title">Products</h3>
                    </div>
        <div class="row">
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
                                    <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                                    <p style="text-align: center;">$' . $price . '</p>
                                    <a style="text-align: center;font-size:16px;" href="' . $linksp . '">' . $name . '</a>
                                </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
    
</div>