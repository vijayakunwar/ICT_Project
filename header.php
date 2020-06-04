<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    
    <!-- cdn for fontawesome icons -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- cdn for fontawesome icons
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
   -->
    
    <link rel="stylesheet" type="text/css" href="custom-css/my-style-index.css">


    <title>EatFruit.com.au</title>
  </head>
  <body>

    <div class="contact-at-top " >
      <span class="top-icon" ><a href="contact.php"><i class="fa fa-envelope fa-lg">admin@eatfruit.com</i> </a></span>
     
      <span class="top-icon" > <i class="fa fa-phone fa-lg">0414040287</i> </span>
    </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo/logo.png" width="70" height="70" class="d-inline-block align-top" alt="">
        <span><h5>EatFruit</h5></span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarText">
        <!-- mx-auto = for center display, ml-auto = for left , mr-auto for right -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><span class="menu-text">Home</span> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="how-it-works.php"><span class="menu-text">How it works</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php"><span class="menu-text">Products</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="delivery.php"><span class="menu-text">Delivery</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><span class="menu-text">About</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><span class="menu-text">Contacts</span></a>
          </li>

        </ul>

                  
        <!-- for cart button, icon and drop dwon -->
        <ul class="nav navbar-nav navbar-right">

          <!-- schopping cart button -->
          <div   >
            <li class="dropdown ">
              <button  type="button" class="btn btn-danger dropdown-toggle mr-sm-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret mr-sm-2"> <i class="fa fa-shopping-cart fa-2x"></i></span>
                   4 <span class="caret"></span>
                      
              </button>
              
              <ul class="dropdown-menu dropdown-cart" role="menu">
                  <li>
                          <span class="item">
                            <span class="item-left">
                                <img src="http://lorempixel.com/50/50/" alt="" />
                                <span class="item-info">
                                    <span>Item name</span>
                                    <span>23$</span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-xs btn-danger pull-right">x</button>
                            </span>
                        </span>
                      </li>

                      <li>
                          <span class="item">
                            <span class="item-left">
                                <img src="http://lorempixel.com/50/50/" alt="" />
                                <span class="item-info">
                                    <span>Item name</span>
                                    <span>23$</span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-xs btn-danger pull-right">x</button>
                            </span>
                        </span>
                      </li>
                
              </ul>
            </li>
          </div>

        </ul>

          


      <form class="form-inline my-2 my-lg-0">

        <!-- Another variation with a button -->
        <div class="input-group">
            <input type="text" class="form-control " placeholder="Search products">
            <div class="input-group-append">
                <button class="btn btn-success mr-sm-2" type="button" id="search-icon-header">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
      </form>

       <!--     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        -->
        <div class="btn-group">
        <button class="btn btn-outline-success my-2 my-sm-0 custom-pad-btn" type="submit" id="login">Login</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="signup">Signup</button>
        </div>
      
    </nav>