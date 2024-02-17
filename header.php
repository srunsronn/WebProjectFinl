<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Store</title>
    <!-- <link rel="stylesheet" href="/Webappli/style/header.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
</head>
<style>
     *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        html{

        }
        :root{
            --color-nav: #03a3ba;
            --wbbase-font: Rubik;
            --font-size-header: 22;
            --font-size-base: 14;
            
            --gradient-base-accent-1: #d01418;
            --color-base-solid-button-labels: #ffffff;

            --gradient-base-accent-2: #000000;
            --color-wb-hovercolor-button-text: #ffffff;

            --color-wbmaincolors-text: #d01418;
            --color-base-text: 0, 0, 0;
            --color-wbbordercolor: #e4e4e4;
            
            --color-background: 255, 255, 255;
            --gradient-background: #ffffff;

            --payment-terms-background-color: #ffffff;

            --color-wbprodct-background: #ffffff;
      }
        
        a{
            text-decoration: none;
        }
        .navigation {
            height: 100px;
            padding-right: 30px;
            padding-top: 2rem;
            z-index: 999;
        }
        .search-box{
            transform: translate(-1px);
            border: 1px solid var(--color-nav);
            border-radius: 0;
            height: 50px;
        }
        .search-box:focus{
            outline: none;
            -webkit-box-shadow: none;
            border: 1px solid var(--gradient-base-accent-2);
        }
        .input-group-btn{
            border-radius: 0;
            background: var(--color-wbmaincolors-text);
            width: 50px;
        }
        .login_singup {
            font-size: 23px;
            padding-top: 15px;
            padding-left: 5rem;
        }
        .login_singup a{
            text-decoration: none;
        }
        .group_icon_nav i{
            font-size: 30px;
            padding-top: 20px;
            position: relative;
            padding-left: 2rem;
        }
        .my_cart{
            font-size: 20px;
        }
        .group_icon_nav span{
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            padding: 2px 4px;
            background-color: var(--color-nav);
            transform: translate(60px, 8px);
            z-index: 200;
            font-size: 12px;
            color: #fff;
        }
        .menu{
            height: 60px;
            background-color: var(--gradient-base-accent-2);
            color: #ddd;
            font-weight: 600;
            z-index: 999;
        }
        .dropdown :focus{
            outline: none;
            -webkit-box-shadow: none;
        }
        .navbar-nav .nav-item{
            margin-right: 30px;
            color: #fff;
        }
        .nav-link{
            font-weight: 500;
        }
</style>
<body>

    <!-- Navigation -->
    <div class="navigation ">
        <div class="container-fluid d-flex justify-content-between align-content-center">
            <div class="logo_store col-2">
                <img width="70" class="mx-4" src="https://img.freepik.com/free-vector/creative-computer-logo-template_23-2149213537.jpg" alt="">
            </div>
            <div class="col-md-5 col-lg-5 mx-auto my-auto d-flex align-content-center">
                <div class="input-group form-container">
                    <input type="text" name="search" class="form-control search-box" placeholder="Search..." 
                    autofocus="autofocus" autocomplete="off">
                    <span class="input-group-btn  d-flex justify-content-center align-content-center">
                        <button class="btn btn-search text-light">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="login_singup col-2">
                <a href="login.php" class="me-3 text-dark">Log in </a>
                <a href="signup.php" class="me-3 text-dark">Sign up</a>
            </div>
            <div class="group_icon_nav col-2">
                <span>10</span>
                <i class="fa-solid fa-layer-group me-4"></i>
                <span>30</span>
                <i class="fa-solid fa-heart me-4"></i>
                <span>15</span>
                <i class="fa-solid fa-cart-shopping me-4"></i>
            </div>
            <div class="my_cart col-1" style="font-weight: 600;">
                <span>My Cart is </span><br>
                <span class="mx-4 text-warning">10$</span>
            </div>
        </div>    
    </div>
    <nav class="menu d-flex align-items-center mt-5 justify-content-between">
        <div class="category-filter col-3 d-flex align-items-center text-light mx-5">
            <i class="fa-solid fa-list me-3"></i>
            <div class="dropdown">
                <a style="font-weight: 500;" class="btn dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  All Categories Computer
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light col-9 container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Product Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Product Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact US</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</body>
</html>
