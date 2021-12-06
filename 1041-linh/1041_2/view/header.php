<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--  -->
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

        .container {
  padding: 2rem 0rem;
}

.table-image {
  
  thead {
    td, th {
      border: 0;
      color: #666;
      font-size: 0.8rem;
    }
  }
  
  td, th {
    vertical-align: middle;
    text-align: center;
    
    &.qty {
      max-width: 2rem;
    }
  }
}

.price {
  margin-left: 1rem;
}

.modal-footer {
  padding-top: 0rem;
}
    </style>
    <script>
         $('#cartModal').modal('show');
        $(document).ready(function() {
           
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
                    <img src="image/logo.png" alt="logo" style="width:100px;">
                </div>
                <div class="columnss">
                    <nav>
                        <ul class="text-center p-4">
                            <li class="inline-block mr-12 pt-2 " style="color: #fff;font-size: 16px; "><a href="index.php">Home</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="/1041/user/about.php">About</a></li>
                            <li class="inline-block mr-12" style="color: #fff;font-size: 16px;"><a href="/1041/user/contact.php">Contact</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="/1041/user/blog.php">Blog</a></li>
                            <li class="inline-block mr-12 " style="color: #fff;font-size: 16px;"><a href="index.php?act=sanpham">Products</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="sea " style="margin-top: 30px;margin-left: -50px;">
                    <form action="">
                        <ul class="text-center">
                            <li class="inline-block"><input style="padding: 5px ;border-radius: 5px;" type="text" placeholder="Search"></li>
                            <li class="inline-block mr-2" style="color: #fff;">
                                <!-- <p><i id="icon" class="fas fa-search"></i></p> -->
                                <a href="./view/taikhoan.php"><i id="icon" class="fas fa-search"></i></a>
                            </li>
                             <li class="inline-block mr-2" style="color: #fff;">
                                <p><i id="icon"  class="far fa-user"></i></p>
                            </li>
                            <li data-toggle="modal" data-target="#cartModal" class="inline-block" style="color: #fff;">
                                <p><i class="fas fa-cart-plus"></i></p>
                            </li>
                           
                        </ul>

                    </form>
                </div>
            </div>
            <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Your Shopping Cart
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-image">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="w-25">
                                                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" class="img-fluid img-thumbnail" alt="Sheep">
                                                        </td>
                                                        <td>Vans Sk8-Hi MTE Shoes</td>
                                                        <td>89$</td>
                                                        <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
                                                        <td>178$</td>
                                                        <td>
                                                            <a href="#" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-end">
                                                <h5>Total: <span class="price text-success">89$</span></h5>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0 d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>