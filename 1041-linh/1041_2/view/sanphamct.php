<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row1">
            <?php
            extract($onesp);
            ?>
            
            <div class="products " style="display: grid; grid-template-columns: 1fr 2fr;">
                <div class="abc" style="display: flex; justify-content: center;">
                <h2><div  style="text-align: center;"><?= $name ?></div></h2>
                
                    <?php
                    $img = $img_path . $img;
                    echo '<div style="display: flex; justify-content: center;" "><img width="60%" src="' . $img . '"></div>';
                    // echo '<div>.$mota</div>';

                    ?>
                </div>

                <div>
                    <h2 style="font-size: 18px;">[ Jordan panda ] Giày jordan cổ cao 🌟FULL BOX BILL🌟 Giầy thể thao nam nữ, Giày sneaker nam nữ</h2>
                    <p style="font-size: 18px;"> <?php echo $price ?>đ</p>
                    <input type="submit" name="addtocart" id="" value="Thêm vào giỏ hàng">
                        <?php echo $mota; ?>
                    </p>
                </div>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="row" id="binhluan">
         <?php  ?>
        <div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn" >Gửi</button>
			</div>
            <?php ?>
		</form>
		<div class="prev-comments">
			<?php 
            if()
			?>
			<div class="single-item">
				<p><?php echo $row['comment']; ?></p>
				<p><?php
				echo $row['']
				?></p>
			</div>
			<?php  ?>
		</div>
	</div>
        </div>
        
        <div class="row mb">
            <div class="boxtitle " style="text-align: center;">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php

                foreach ($sp_cung_loai as $sp_cung_loai) {
                    // $hinh=$img_path.$img;
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $img = $img_path . $img;
                    echo '<div >
                                        <a href="' . $linksp . '"><img  style="width:40%;" src="' . $img . '" alt=""></a>
                                      <br>  <a style="margin-left:40px;font-size:16px;" href="' . $linksp . '">' . $name . '</a>
                                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>