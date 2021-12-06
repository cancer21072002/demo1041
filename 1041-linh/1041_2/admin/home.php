<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <!-- <i class='bx bxl-c-plus-plus icon'></i> -->
            <div class="logo_name">ADMIN</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <!-- <input type="submit" name="listok" value="Search" id="ip"> -->
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="../index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Trang Chủ</span>
                </a>
                <span class="tooltip">Trang Chủ</span>
            </li>
            <li>
                
                <a href="index.php?act=dskh">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Người Dùng</a></span>
                </a>
                <span class="tooltip">Người Dùng</span>
            </li>
            <li>
                <a href="index.php?act=dsbl">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Bình Luận</span>
                </a>
                <span class="tooltip">Bình Luận</span>
            </li>
            <li>
                <a href="index.php?act=adddm">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Danh Mục</span>
                </a>
                <span class="tooltip">Danh Mục</span>
            </li>
            <li>
                <a href="index.php?act=addsp">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Sản Phẩm</span>
                </a>
                <span class="tooltip">Sản Phẩm</span>
            </li>
            <li>
                <a href="index.php?act=thongke">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Thống Kê</span>
                </a>
                <span class="tooltip">Thống Kê</span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        
    <div class="text">Quản Trị WebSite</div>
    </section>
    <!-- <section class="pad">
  
    </section> -->
  
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
            }
        }
    </script>
</body>

</html>