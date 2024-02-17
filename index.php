<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElecStore</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style/owl_slider.css">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- OwlCarouse css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>
<style>
  


a {
  text-decoration: none;
  color: #243B55;
  transition: 0.5;
}

ul {
  list-style: none;
}




.flash .item {
  background: white;
  padding: 20px;
  border-radius: 5px;
}

.flash .img span {
  background: #E94560;
  padding: 5px 10px;
  border-radius: 50px;
  font-size: 12px;
  color: white;
}


.flash .star i {
  color: #f7d833;
  font-size: 15px;
  margin-right: 5px;
  margin-top: 5px;
  margin-bottom: 5px;
}

.flash p {
  color: #E94560;
}

.flash p label {
  text-decoration: line-through;
  color: grey;
  margin-left: 10px;
}




/*----------product_page--------*/
/*----------trending--------*/
.trending .right_one {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 30px;
}

.trending img {
  width: 100%;
  height: 100%;
}

.trending .left_one {
  position: relative;
}

.trending .right_one .item {
  position: relative;
  cursor: pointer;
}

/*----------trending--------*/
/*----------shipping--------*/
.grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-gap: 10px;
}

.delivery .container {
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.15);
  padding: 30px 10px 20px 10px;
  opacity: 0.7;
}

.delivery .box {
  padding: 5px;
}

.delivery .img i {
  font-size: 40px;
  margin-right: 20px;
  margin-top: 5px;
}

.delivery span {
  color: grey;
  font-size: 13px;
}

/*----------shipping--------*/
/*----------newsletter--------*/
.newsletter {
  text-align: center;
}

.newsletter .container {
  max-width: 50%;
  margin: auto;
}

.newsletter i {
  font-size: 50px;
  margin-bottom: 10px;
}

.input {
  background: white;
  border-radius: 5px;
  margin-top: 20px;
}

input {
  outline: none;
  background: none;
  border: none;
  padding: 0px 0px 0 20px;
}

/*----------newsletter--------*/
/*----------footer--------*/
footer {
  background: #0F3460;
  color: white;
}

footer .grid {
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
}

footer .item {
  margin-top: 50px;
}

footer .app {
  background: rgba(0, 0, 0, 0.2);
  margin: 5px;
  padding: 5px;
  border-radius: 5px;
}

footer h3 {
  font-size: 20px;
  margin-bottom: 30px;
}

footer li {
  margin-bottom: 20px;
  opacity: 0.5;
}

footer .icon i {
  background: rgba(0, 0, 0, 0.2);
}

/*----------footer--------*/
@media only screen and (max-width:768px) {

  /*----------home_product--------*/
  .left,
  .right {
    width: 100%;
  }

  .left_one {
    width: 100%;
    margin: 0;
    margin-bottom: 20px;
  }

  .right_one {
    width: 100%;
    margin: 0;
  }

  .home_product .box {
    margin-top: 20px;
  }

  .trending .content,
  .offer .container,
  .home_product .container {
    flex-direction: column;
  }

  /*----------home_product--------*/
  /*----------deal--------*/
  .owl-carousel3 .owl-prev i {
    left: 83%;
  }

  .deal .box {
    flex-direction: column;
  }

  .deal .left,
  .deal .right {
    width: 100%;
  }

  /*----------deal--------*/
  /*----------trending--------*/
  .trending .right_one {
    grid-template-columns: repeat(1, 1fr);
  }

  /*----------trending--------*/
  /*----------shipping--------*/
  .grid {
    grid-template-columns: repeat(3, 1fr);
  }

  /*----------shipping--------*/
  /*----------newsletter--------*/
  .newsletter .container {
    max-width: 80%;
  }

  /*----------newsletter--------*/
  /*----------footer--------*/
  footer .grid {
    grid-template-columns: repeat(2, 1fr);
  }

  /*----------footer--------*/
}
  .category_shop {
    background-color: #ddd;
    cursor: pointer;
  }
  .category_shop:hover {
    /* border: 1px solid red; */
    box-shadow: 10px  5px 7px grey;
    transition: all 0.3s;
  }
  .category_shop:hover img{
    transition: all 0.3s;
    transform: scale(1.3);
  }
  .title_product a{
    font-size: 20px;
    text-decoration: #03a3ba;
    color: #03a3ba;
  }
  /* card */
  .section_laptop {
            margin-top: -50px;
            padding: 0px 50px;
        }
        .color-price{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .color-price .color-option .color{
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin-right: 8px;
        }
        .color-option  .circles{
            display: flex;
        }
        .color-option  .circles .circle{
            height: 18px;
            width: 18px;
            background: #0071C7;
            border-radius: 50%;
            margin: 0 4px;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        .color-option .circles .circle.blue.active{
             box-shadow: 0 0 0 2px #fff,
                    0 0 0 4px #0071C7;
        }
        .color-option .circles .circle.pink{
            background: #FA1795;
        }
        .color-option .circles .circle.pink.active{
            box-shadow: 0 0 0 2px #fff,
                    0 0 0 4px #FA1795;
        }
        .color-option .circles .circle.yellow{
            background: #F5DA00;
        }
        .color-option .circles .circle.yellow.active{
            box-shadow: 0 0 0 2px #fff,
                    0 0 0 4px #F5DA00;
        }
        
        /* .cate_product .col-2:hover img{
          transform: scale(1.1);
          transition: all 0.5s;
        } */
        /* .cate_product .col-2:hover .img-front{
          display: none;
        }
        .cate_product .col-2:hover .img-back{
          display: block;
        } */
        .product_img_container{
          display: flex;
          object-fit: contain;
          justify-content: center;
          position: relative;
          overflow: hidden;
        }
        .product_img_container img{
          width: 100%;
          height: 100%;
          display: flex;
          object-fit:contain;
          object-position: center;
          animation: fade 0.6s;
        }
        .product_img_container .img-back{
          display: none;
        }
        .product_cart:hover .img-back{
          display: block;
          height: 250px;
          z-index: -1;
          transition: all 0.7s;
        }
        .product_cart:hover .img-front{
          transition: all 0.7s;
          display: none;
        }
        @keyframes fade{
          0%{
              opacity: 0;
          }
          100%{
              opacity: 1;
          }
      }
        .cate_product h3{
            padding-left: 20px;
            font-size: 16px;
            font-weight: 600;
            color: gray;
        }
        .cate_product p{
            padding-left: 20px;
            font-size: 15px;
        } 
        .cate_product ul{
            margin-top: -10px;
            padding-left: 20px;
            font-size: 15px;
        }
        .cate_product h4{
            padding-left: 20px;
            font-size: 15px;
        }
        .cate_product .color-price{
            padding-left: 20px;
        }
        .cate_product .price{
            color: #03a3ba;
            padding-left: 20px;
            font-size: 20px;
            font-weight: 600;
        }
        .cate_product .product_cart .btn{
            background-color: #03a3ba;
            height: 50px;
            transition: all .3s;
            border-radius: 30px;
            font-weight: 600;
            /* opacity: 0; */
        } 
        /* .cate_product .col-2:hover .btn {
            opacity: 1;
            color: #fff;
        }  */
        .icon_abs {
          /* background-color: #F5DA00; */
          width: 300px;
          transition: all 0.7s;
          opacity: 0;
          z-index: -1;
          /* margin-top: -500px; */
         
        }
        .icon_abs i{
            font-size: 15px;
            padding: 0px 12px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-top: 5px;
            background-color: rgba(169, 169, 169, 0.729);
            border-radius: 50%;
            color: #fff;
            align-items: center;
            opacity: 1;
            margin-left: 35px;
        }
        .cate_product .product_cart:hover .img-front{
          z-index: -1;
        }
        .cate_product .product_cart:hover .icon_abs{
          opacity: 1;
          z-index: 1;
          /* margin-top: -200px; */
        }
        .cate_product .product_cart:hover .group_icon_abs {
          opacity: 1;
          margin-top: 170px;
          transition: all 0.7s;

        }
        .ads-display{
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            padding: 0px 50px;
        }
        .banner img{  
          border-radius: 10px;
        }
        /* best product */
        .left_best{
          background-color: #ddecee;
        }
        .left_best a i{
          color: #fff;
          padding: 17px;
          font-size: 25px;
          width: 60px;
          height: 60px;
          background-color: #03a3ba;
          border-radius: 50%;
        }
        .left_best a{
          font-size: 30px;
          color: black;
        }
        .left_card_deal img:hover{
          transform: scale(1.2);
          transition: all 0.5s;
        }
</style>
<body>
    <!-- include header -->
    <?php include "header.php"; ?>

    <!-- main section start here -->
    
  <section class="home">
    <div class="slider">
      <div class="slide active">
        <div class="container_slide">
          <div class="caption text-light">
            <h1>iPhone 12 Pro and iPhone 12 Pro Max</h1>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="#">shop now</a>
          </div>
        </div>
      </div>
      <div class="slide ">
        <div class="container_slide">
          <div class="caption">
            <h1>iPhone 12 Pro and iPhone 12 Pro Max</h1>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="#">shop now</a>
          </div>
        </div>
      </div>
      <div class="slide ">
        <div class="container_slide">
          <div class="caption text-light">
            <h1>iPhone 12 Pro and iPhone 12 Pro Max</h1>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="#">shop now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- control -->
    <div class="control">
      <div class="prev">
        <i class="fa fa-arrow-circle-left"></i>
      </div>
      <div class="next">
        <i class="fa fa-arrow-circle-right"></i>
      </div>
    </div>
  </section>
  <!-- info -->
  <section class="info-box mt-5" style="padding: 1rem 3rem;">
    <div class="row rounded d-flex justify-content-between p-2" style="border: 2px solid #03a3ba; height: 150px;">
        <div class="col-lg-2 d-flex align-items-center justify-content-between " style="border-right: 1px solid #ddd;">
            <img width="90" class="rounded-circle p-2" src="../Webappli/images/customer-service.png" alt="">
            <div class="left-info_box">
                <h5 style="font-size: 17px; font-weight: 600;" class="mt-4">24 X 7 Free Support</h5>
                <p style="font-size: 15px;"> Online Support 24/7</p>
            </div>
            
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-xml-6 d-flex align-items-center justify-content-between " style="border-right: 1px solid #ddd;">
            <img width="90" class="rounded-circle p-2" src="../Webappli/images/giftbox.png" alt="">
            <div class="left-info_box">
                <h5 style="font-size: 16px; font-weight: 600;" class="mt-4">Money Back Guarantee</h5>
                <p style="font-size: 15px;">100% Secure Payment</p>
            </div>
            
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-xml-6 d-flex align-items-center justify-content-between " style="border-right: 1px solid #ddd;">
            <img width="90" class="rounded-circle p-2" src="../Webappli/images/deposit.png" alt="">
            <div class="left-info_box">
                <h5 style="font-size: 17px; font-weight: 600;" class="mt-4">Special Gift Cards</h5>
                <p style="font-size: 15px;">Give The Perfect Gift</p>
            </div>
            
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-xml-6 d-flex align-items-center justify-content-between " style="border-right: 1px solid #ddd;">
            <img width="90" class="rounded-circle p-2" src="../Webappli/images/delivery-truck.png" alt="">
            <div class="left-info_box">
                <h5 style="font-size: 17px; font-weight: 600;" class="mt-4">Worldwide Shipping</h5>
                <p style="font-size: 15px;">On Order Over $99</p>
            </div>
            
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-xml-6 d-flex align-items-center justify-content-between ">
            <img width="90" class="rounded-circle p-2" src="../Webappli/images/payment-method.png" alt="">
            <div class="left-info_box">
                <h5 style="font-size: 17px; font-weight: 600;" class="mt-4">Secured Payment</h5>
                <p style="font-size: 15px;">Payment By QR</p>
            </div>
            
        </div>
    </div>
  </section>
  <!-- shop_by_category -->
  <section class="shop_by_category mt-5" style="padding: 1rem 3rem;">
    <h1 class="text-center">Shop By Category</h1>
    <div class="row mt-5 p-3 d-flex justify-content-between">
      <div class="col-2 category_shop d-flex justify-content-center align-items-center position-relative rounded-circle p-3" style="width: 300px; height: 300px;">
        <img width="170" height="170" src="../Webappli/./images/desktop_no_bg.png" alt="">
      </div>
      <div class="category_shop d-flex justify-content-center align-items-center position-relative rounded-circle p-3" style="width: 300px; height: 300px;">
        <img width="170" height="170" src="../Webappli/./images/laptop-no-bg-1.png" alt="">
      </div>
      <div class="category_shop d-flex justify-content-center align-items-center position-relative rounded-circle p-3" style="width: 300px; height: 300px;">
        <img width="170" height="170" src="../Webappli/./images/laptop-no-bg-2.png" alt="">
      </div>
      <div class="category_shop d-flex justify-content-center align-items-center position-relative rounded-circle p-3" style="width: 300px; height: 300px;">
        <img width="170" height="170" src="../Webappli/./images/laptop-no-bg-3.png" alt="">
      </div>
      <div class="category_shop d-flex justify-content-center align-items-center position-relative rounded-circle p-3" style="width: 300px; height: 300px;">
        <img width="170" height="170" src="../Webappli/./images/laptop-no-bg-4.png" alt="">
      </div>
    </div>
  </section>
  <!-- banner -->
  <section class="banner mt-5 " style="padding: 1rem 3rem;" >
    <div class="row d-flex justify-content-between">
      <div class="col-6">
        <img width="100%" height="300px" src="../Webappli//images/9811937.jpg" alt="">
      </div>
      <div class="col-6">
        <img width="100%" height="300px" src="../Webappli/images/10242499.jpg" alt="">
      </div>
    </div>
  </section>
  <section class="lasted_product mt-5" style="padding: 1rem 3rem;">
    <div class="title_product d-flex justify-content-between">
      <h1>Lasted Products</h1>
      <a href="#">View All</a>
    </div>
    <div class="main_lasted_pro mt-3">
      <div class="row mt-3 cate_product d-flex justify-content-between">
        <div class="position-relative col-2 p-3 shadow product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 shadow product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 shadow product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 shadow product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 shadow product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
      </div>
    </div>
  </section>
  <!-- banner -->
  <section class="banner shadow mt-2" style="padding: 1rem 3rem;" >
    <div class="row d-flex justify-content-between">
      <div class="col-6 ">
        <img width="100%" height="300px" src="../Webappli//images/pic_banner_rog.jpg" alt="">
      </div>
      <div class="col-6 ">
        <img width="100%" height="300px" src="../Webappli/images/pic_banner_desktop.jpg" alt="">
      </div>
    </div>
  </section>
  <!-- best-seller -->
  <section class="best_seller mt-5" style="padding: 1rem 3rem;">
    <div class="title_product d-flex justify-content-between">
      <h1>Best Products</h1>
      <a href="#">View All Product</a>
    </div>
    <div class="row mt-3">
      <div class="col-4 p-3 left_best rounded">
        <img src="./images/laptop-no-bg-3.png" alt="">
        <h3 class="text-center text-warning">Laptop Dell Inspiron i15 Gaming </h3>
        <h4 class="text-center mt-2">From</h4>
        <h3 class="text-info text-center mt-2" style="font-size: 30px;">$1900</h3>
        <a href="#" class="d-flex justify-content-center">
          <i class="fa-solid fa-arrow-right me-3"></i>
          Shop Now
        </a>

      </div>
      <div class="col-8">
        <div class="main_lasted_pro mt-3">
          <div class="row mt-3 cate_product d-flex justify-content-between">
            <div class="position-relative col-3 p-3 product_cart">
              <div class="product_img_container ">
                <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
                <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
              </div>
              <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
                <div class="col-8 color-price" style="margin-top: 400px;">
                  <div class="color-option d-flex">
                    <div class="circles">
                      <span class="circle blue active" id="blue"></span>
                      <span class="circle pink " id="pink"></span>
                      <span class="circle yellow " id="yellow"></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 group_icon_abs p-3">
                  <i class="fa-solid fa-layer-group me-4"></i>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div> 
              <h3 class="mt-2">Model</h3>
              <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-unstyled text-warning">
                  <li>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </li>
              </ul>
              <span class="price mt-3">$100.00</span><br>
              <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
            </div>
            <div class="position-relative col-3 p-3 product_cart">
              <div class="product_img_container ">
                <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
                <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
              </div>
              <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
                <div class="col-8 color-price" style="margin-top: 400px;">
                  <div class="color-option d-flex">
                    <div class="circles">
                      <span class="circle blue active" id="blue"></span>
                      <span class="circle pink " id="pink"></span>
                      <span class="circle yellow " id="yellow"></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 group_icon_abs p-3">
                  <i class="fa-solid fa-layer-group me-4"></i>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div> 
              <h3 class="mt-2">Model</h3>
              <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-unstyled text-warning">
                  <li>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </li>
              </ul>
              <span class="price mt-3">$100.00</span><br>
              <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
            </div>
            <div class="position-relative col-3 p-3 product_cart">
              <div class="product_img_container ">
                <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
                <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
              </div>
              <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
                <div class="col-8 color-price" style="margin-top: 400px;">
                  <div class="color-option d-flex">
                    <div class="circles">
                      <span class="circle blue active" id="blue"></span>
                      <span class="circle pink " id="pink"></span>
                      <span class="circle yellow " id="yellow"></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 group_icon_abs p-3">
                  <i class="fa-solid fa-layer-group me-4"></i>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div> 
              <h3 class="mt-2">Model</h3>
              <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-unstyled text-warning">
                  <li>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </li>
              </ul>
              <span class="price mt-3">$100.00</span><br>
              <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
            </div>
            <div class="position-relative col-3 p-3 product_cart">
              <div class="product_img_container ">
                <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
                <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
              </div>
              <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
                <div class="col-8 color-price" style="margin-top: 400px;">
                  <div class="color-option d-flex">
                    <div class="circles">
                      <span class="circle blue active" id="blue"></span>
                      <span class="circle pink " id="pink"></span>
                      <span class="circle yellow " id="yellow"></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 group_icon_abs p-3">
                  <i class="fa-solid fa-layer-group me-4"></i>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div> 
              <h3 class="mt-2">Model</h3>
              <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-unstyled text-warning">
                  <li>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </li>
              </ul>
              <span class="price mt-3">$100.00</span><br>
              <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
            </div>
      </div>
    </div>
  </section>
   <!-- banner -->
   <section class="banner mt-5 " style="padding: 1rem 3rem;" >
    <div class="row d-flex justify-content-between">
      <div class="col-6">
        <img width="100%" height="300px" src="./images/pic_banner_rog.jpg" alt="">
      </div>
      <div class="col-6">
        <img width="100%" height="300px" src="../Webappli/images/10242499.jpg" alt="">
      </div>
    </div>
  </section>

  <!-- features -->
  <section class="feature_pro mt-5 "style="padding: 1rem 3rem;">
    <div class="title_product d-flex justify-content-between">
      <h1>Featured Products</h1>
      <a href="#">View All Product</a>
    </div>
    <div class="main_lasted_pro mt-3">
      <div class="row mt-3 cate_product d-flex justify-content-between">
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
      </div>
      <div class="row mt-3 cate_product d-flex justify-content-between">
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
        <div class="position-relative col-2 p-3 mb-3 product_cart">
          <div class="product_img_container ">
            <img class="img-front" height="200" src="../Webappli/./images/pic_com1.jpg" alt="">
            <img class="img-back" height="200"  src="../Webappli/./images/pic_com2.jpg" alt="">
          </div>
          <div class="row icon_abs position-relative d-flex justify-content-between "style="margin-top: -400px;">
            <div class="col-8 color-price" style="margin-top: 400px;">
              <div class="color-option d-flex">
                <div class="circles">
                  <span class="circle blue active" id="blue"></span>
                  <span class="circle pink " id="pink"></span>
                  <span class="circle yellow " id="yellow"></span>
                </div>
              </div>
            </div>
            <div class="col-4 group_icon_abs p-3">
              <i class="fa-solid fa-layer-group me-4"></i>
              <i class="fa-solid fa-heart me-4"></i>
            </div>
          </div> 
          <h3 class="mt-2">Model</h3>
          <p class="des">Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-unstyled text-warning">
              <li>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </li>
          </ul>
          <span class="price mt-3">$100.00</span><br>
          <input type="submit" class="btn text-light form-control mt-3" name="add_to_cart" value="Add to Cart"/>
        </div>
      </div>
    </div>
  </section>
   
  <!-- banner -->
  <section class="banner mt-5 " style="padding: 1rem 3rem;" >
    <div class="row d-flex justify-content-between">
      <div class="col-6">
        <img width="100%" height="400px" src="./images/pic_banner_rog.jpg" alt="">
      </div>
      <div class="col-6">
        <img width="100%" height="400px" src="../Webappli/images/10242499.jpg" alt="">
      </div>
    </div>
  </section>

  <!-- treding -->
  <section class="flash trending mt-3" style="padding: 1rem 3rem;">
    <div class="title_product mt-2 d-flex justify-content-between">
      <h1>Trending Products</h1>
      <a href="#">View All Product</a>
    </div>
      <div class="content d-flex p-3">
        <div class="left_one col-4 d-flex justify-content-center align-items-center" style="background-color: #fff; border-right: 1px solid #ddd;">
          <div class="item">
            <div class="img">
              <img src="./images/laptop-no-bg-3.png" alt="">
            </div>

            <div class="text mt-3 text-center">
              <h5>Smart Watch Black</h5>
              <div class="star d-flex justify-content-center">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price ">
                <p> $110.00 </p>
                <a href="#" class="d-flex justify-content-center">
                  <i class="fa-solid fa-arrow-right me-3"></i>
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="right_one d-flex flex-column col-8" style="padding-left: 40px;">
          <div class="row d-flex justify-content-between">
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-between">
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                  <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                 <i class="fa-solid fa-layer-group me-4"></i><br>
                  <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex1">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="item col-3 p-3 product_cart">
              <div class="img">
                <span>50% off</span>
                <img src="./images/laptop-no-bg-1.png" alt="">
                <div class="view">
                 <i class="fa-solid fa-layer-group me-4"></i><br>
                <i class="fa-solid fa-heart me-4"></i>
                </div>
              </div>
  
              <div class="text">
                <h5>Smart Watch Black</h5>
                <div class="star d-flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price d-flex">
                  <p> $110.00<label> $250.00</label></p>
                  <i class="fas fa-plus"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- deal of day  -->
 <section class="deal_of_day p-3">
    <div class="title_deal_of_day d-flex justify-content-between" style="padding: 10px 40px;">
        <h2>Deal Of The Week</h2>
        <a href="#">View All Products</a>
    </div>
    <div class="row product_deal mx-3 mt-3 d-flex justify-content-between" style="padding: 0px 30px;">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xml-12 product_deal_info d-flex" style="width: 30%;">
            <div class="left_card_deal d-flex align-items-center justify-content-center p-3" style="height: 400px;">
                <img width="200" height="200" src="./images/pic_com1.jpg" alt="">
            </div>
            <div class="right_card_deal d-flex justify-content-center p-3" style="flex-direction: column;">
                <div class="description_deal p-2">
                    <h5 style="font-weight: 600;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                </div>
                <div class="rating_deal p-2">
                    <span>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </span>
                </div>
                <div class="price_deal d-flex p-2 ">
                    <div class="origin_price_deal mx-3">
                        <span><del>$599.99</del></span>
                    </div>
                    <div class="discount_price_deal">
                        <span style="font-size: 17px ; font-weight: 600; color: #03a3ba;">Now $499.99</span>
                    </div>
                </div>
                <div class="countdown_deal rounded d-flex justify-content-between p-2" style="height: 80px; background-color: #ddd;">
                    <div class="day">
                      <h4 id="days">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Days</span> 
                    </div>
                    <div class="hour">
                      <h4 id="hrs">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Hours</span> 
                    </div>
                    <div class="minute">
                      <h4 id="mn">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Minutes</span> 
                    </div>
                    <div class="second">
                      <h4 id="s">00</h4>
                      <span style="font-size: 14px;">Seconds</span> 
                    </div>
                </div>
                <div class="add_to_cart_deal p-2 mt-3 rounded-3">
                    <a href="#" class="btn text-light d-flex align-items-center justify-content-center " style="background-color: #03a3ba; height: 65px; font-size: 20px; font-weight: 600;">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xml-12 product_deal_info d-flex" style="width: 30%;">
            <div class="left_card_deal d-flex align-items-center justify-content-center p-3" style="height: 400px;">
                <img width="200" height="200" src="./images/laptop-no-bg-3.png" alt="">
            </div>
            <div class="right_card_deal d-flex justify-content-center p-3" style="flex-direction: column;">
                <div class="description_deal p-2">
                    <h5 style="font-weight: 600;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                </div>
                <div class="rating_deal p-2">
                    <span>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </span>
                </div>
                <div class="price_deal d-flex p-2 ">
                    <div class="origin_price_deal mx-3">
                        <span><del>$599.99</del></span>
                    </div>
                    <div class="discount_price_deal">
                        <span style="font-size: 17px ; font-weight: 600; color: #03a3ba;">Now $499.99</span>
                    </div>
                </div>
                <div class="countdown_deal rounded d-flex justify-content-between p-2" style="height: 80px; background-color: #ddd;">
                    <div class="day">
                      <h4 id="days">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Days</span> 
                    </div>
                    <div class="hour">
                      <h4 id="hrs">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Hours</span> 
                    </div>
                    <div class="minute">
                      <h4 id="mn">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Minutes</span> 
                    </div>
                    <div class="second">
                      <h4 id="s">00</h4>
                      <span style="font-size: 14px;">Seconds</span> 
                    </div>
                </div>
                <div class="add_to_cart_deal p-2 mt-3 rounded-3">
                    <a href="#" class="btn text-light d-flex align-items-center justify-content-center " style="background-color: #03a3ba; height: 65px; font-size: 20px; font-weight: 600;">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xml-12 product_deal_info d-flex" style="width: 30%;">
            <div class="left_card_deal d-flex align-items-center justify-content-center p-3" style="height: 400px;">
                <img width="200" height="200" src="./images/laptop-no-bg-2.png" alt="">
            </div>
            <div class="right_card_deal d-flex justify-content-center p-3" style="flex-direction: column;">
                <div class="description_deal p-2">
                    <h5 style="font-weight: 600;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                </div>
                <div class="rating_deal p-2">
                    <span>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </span>
                </div>
                <div class="price_deal d-flex p-2 ">
                    <div class="origin_price_deal mx-3">
                        <span><del>$599.99</del></span>
                    </div>
                    <div class="discount_price_deal">
                        <span style="font-size: 17px ; font-weight: 600; color: #03a3ba;">Now $499.99</span>
                    </div>
                </div>
                <div class="countdown_deal rounded d-flex justify-content-between p-2" style="height: 80px; background-color: #ddd;">
                    <div class="day">
                      <h4 id="days">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Days</span> 
                    </div>
                    <div class="hour">
                      <h4 id="hrs">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Hours</span> 
                    </div>
                    <div class="minute">
                      <h4 id="mn">00 &nbsp;:</h4>
                      <span style="font-size: 14px;">Minutes</span> 
                    </div>
                    <div class="second">
                      <h4 id="s">00</h4>
                      <span style="font-size: 14px;">Seconds</span> 
                    </div>
                </div>
                <div class="add_to_cart_deal p-2 mt-3 rounded-3">
                    <a href="#" class="btn text-light d-flex align-items-center justify-content-center " style="background-color: #03a3ba; height: 65px; font-size: 20px; font-weight: 600;">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
  </section>









    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
  <script src="../Webappli/js/slider_main.js"></script>
  <script>
    var countDownDate = new Date("20 july, 2024 00:00:00").getTime();
    var x = setInterval(function() {
      // Get today's date and time
      var now = new Date().getTime();
      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60  * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60  * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 *  60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerText = days.toString().padStart(2, '0');
      document.getElementById("hrs").innerText = hours.toString().padStart(2, '0') ;
      document.getElementById("mn").innerText = minutes.toString().padStart(2, '0');
      document.getElementById("s").innerText = seconds.toString().padStart(2, '0');

      if(distance < 0){
        clearInterval(x);
       
        document.getElementById("days").innerText  = "00";
        document.getElementById("hrs").innerText  = "00" ;
        document.getElementById("mn").innerText  = "00";
        document.getElementById("s").innerText  = "00";

      }
    },1000);
  </script>
</html>