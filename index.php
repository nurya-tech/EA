<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/img/images.png" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Hind:300,500,600%7CTitillium+Web%7COswald:700" rel="stylesheet">
    <title>Muslim Market</title>
</head>
<body>
    <div class="is-mobile"></div>
    <!-- LOADER -->
        <div id="loader-wrapper">
            <div class="loader"></div>
        </div>
    <!--end LOADER -->

     <!-- HEADER -->
    <header class="header-style-2">
        <div class="wide-container-fluid">
            <div class="row">
                <div class="col-xs-1">
                    <a class="logo" href="index.html"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" /></a>  
                </div>
                <div class="col-xs-11 text-right">

                    <ul class="header-menu">
                        <li class="active"><a href="index.html"><span>Beranda</span></a></li>
                        <li><a href="about.html"><span>Tentang Kami</span></a></li>
                        <li>
                            <a href="portfolio.html"><span>Panti Binaan</span></a>
                            <span></span>
                            <ul>
                                <li><a href="portfolio.html">Panti Al-Hakim</a></li>
                                <li><a href="portfolio_full.html">Panti Al-Muniroh</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="blog.html"><span>Blog</span></a>
                            <span></span>
                            <ul>
                                <li><a href="post.html">Blog post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop.html"><span>Products</span></a>
                            <span></span>
                            <ul>
                                <li><a href="shop.html">Products #1</a></li>
                                <li><a href="shop2.html">Products #2</a></li>
                                <li><a href="shop3.html">Products #3</a></li>
                                <li><a href="shopdetail.html">Detail products</a></li>
                            </ul>
                        </li>
                        <li><a href="service.html"><span>Bantuan</span></a></li>
                        <li><a href="checkout.html"><span>Keranjang</span></a></li>
                        <li><a href="contact.html"><span>Hubungi Kami</span></a></li>
                    </ul>
                    <!-- basket -->
                    <div class="basket open-popup" data-rel="1">
                        <div class="img-wrapper">
                            <span>1</span>
                        </div>
                        <br>
                        <p>total: <span>149.95&#36;</span></p>
                    </div>
                    <!-- login -->
                    <div class="login-wrapper">
                        <a href="<?php echo base_url();?>welcome/aksilogin">Log in &#47; Sing up</a>
                    </div> 
                    <div class="login-wrapper"><a href="<?php echo base_url();?>welcome/logout"><i class="fa fa-sign-out"></i> Log out</a></div>   

                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                     <div class="hamburger-icon-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER -->

    <!-- OVERLAY-MENU -->
    <div class="overlay-wrapper">
        <div class="overlay-animation"></div>
        <div class="flex">
        <div class="flex-in">
        <div class="overlay-menu">
            <div class="container">
                <div class="row">
                    <div class="btn-close"><span></span><span></span></div>
                    <div class="col-md-2 col-md-offset-5">
                        <!-- login -->
                        <div class="login-wrapper">
                            <a href="<?php echo base_url();?>welcome/aksilogin">Log in &#47; Sing up</a>
                        </div> 
                        <!-- basket -->
                        <div class="basket open-popup" data-rel="1">
                            <div class="img-wrapper">
                                <img src="<?php echo base_url();?>assets/img/shop/basket-2.png" alt="">
                                <span>1</span>
                            </div>
                            <br>
                            <p>total: <span>149.95&#36;</span></p>
                        </div>
                        <ul>
                            <li class="active"><a href="index.html">Beranda</a></li>
                            <li><a href="about.html">Tentang Kami</a></li>
                            
                            <li class="dropdown-plus">
                                <a href="portfolio.html">Panti Binaan</a>
                                <span></span>
                                <ul>
                                    <li><a href="portfolio.html">Panti Al-Hakim</a></li>
                                    <li><a href="portfolio_full.html">Panti Al-Munawaroh</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-plus">
                                <a href="blog.html">Blog</a>
                                <span></span>
                                <ul>
                                    <li><a href="post.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-plus">
                                <a href="shop.html">Product</a>
                                <span></span>
                                <ul>
                                    <li><a href="shop.html">Products #1</a></li>
                                    <li><a href="shop2.html">Products #2</a></li>
                                    <li><a href="shop3.html">Products #3</a></li>
                                    <li><a href="shopdetail.html">Detail products</a></li>
                                </ul>
                            </li>
                            <li><a href="service.html">Bantuan</a></li>
                            <li><a href="checkout.html">Keranjang</a></li>
                            <li><a href="contact.html">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- end OVERLAY-MENU -->

    <!-- OVERLAY-VIDEO -->
     <div class="overlay-wrapper height-min video">
        <div class="overlay-animation"></div>
        <div class="iframe-wrapper">
        </div>
        <div class="btn-close"><span></span><span></span></div>
    </div>
    <!-- end OVERLAY-VIDEO -->

    <!-- content -->
    <div id="content">

        <!-- banner -->
        <!-- swiper -->
        <div class="swiper-style-banner">
            <div class="swiper-container" data-speed="1000" data-parallax="1" data-pagination-rel="0" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner container">
                            <div class="row flex-js">
                                <div class="col-md-7 flex-order-2">
                                    <div class="banner-img-wrapper">
                                        <div class="banner-img-inner">
                                            <div class="banner-img-item-1" data-swiper-parallax="-200">
                                                <div class="banner-img-1" style="background-image: url(<?php echo base_url();?>assets/img/sepatu.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-2" data-swiper-parallax="-300">
                                                <div class="banner-img-2" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-2.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-3" data-swiper-parallax="-400">
                                                <div class="banner-img-3" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-3.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-4" data-swiper-parallax="-500">
                                                <div class="banner-img-4" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-4.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-5" data-swiper-parallax="-600">
                                                <div class="banner-img-5" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-5.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-1">
                                    <article class="text-right">
                                        <h1 class="h1" data-swiper-parallax="-800">Design Interior</h1>
                                        <p data-swiper-parallax="-600">Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not tempus bibendum mattis making something</p>
                                        <div class="btn-wrap" data-swiper-parallax="-400"><a href="#" class="btn-2"><span>view more</span></a></div>
                                    </article>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner container">
                            <div class="row flex-js">
                                <div class="col-md-7 flex-order-2">
                                    <div class="banner-img-wrapper">
                                        <div class="banner-img-inner">
                                            <div class="banner-img-item-1" data-swiper-parallax="-200">
                                                <div class="banner-img-1" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-1-2.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-2" data-swiper-parallax="-300">
                                                <div class="banner-img-2" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-2-2.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-3" data-swiper-parallax="-400">
                                                <div class="banner-img-3" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-3-2.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-4" data-swiper-parallax="-500">
                                                <div class="banner-img-4" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-4-2.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-5" data-swiper-parallax="-600">
                                                <div class="banner-img-5" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-5-2.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-1">
                                    <article class="text-right">
                                        <h2 class="h1" data-swiper-parallax="-800">Design Interior</h2>
                                        <p data-swiper-parallax="-600">Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not tempus bibendum mattis making something</p>
                                        <div class="btn-wrap" data-swiper-parallax="-400"><a href="#" class="btn-2"><span>view more</span></a></div>
                                    </article>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner container">
                            <div class="row flex-js">
                                <div class="col-md-7 flex-order-2">
                                    <div class="banner-img-wrapper">
                                        <div class="banner-img-inner">
                                            <div class="banner-img-item-1" data-swiper-parallax="-200">
                                                <div class="banner-img-1" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-1-3.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-2" data-swiper-parallax="-300">
                                                <div class="banner-img-2" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-2-3.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-3" data-swiper-parallax="-400">
                                                <div class="banner-img-3" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-3-3.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-4" data-swiper-parallax="-500">
                                                <div class="banner-img-4" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-4-3.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-5" data-swiper-parallax="-600">
                                                <div class="banner-img-5" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-5-3.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-1">
                                    <article class="text-right">
                                        <h2 class="h1" data-swiper-parallax="-800">Design Interior</h2>
                                        <p data-swiper-parallax="-600">Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not tempus bibendum mattis making something</p>
                                        <div class="btn-wrap" data-swiper-parallax="-400"><a href="#" class="btn-2"><span>view more</span></a></div>
                                    </article>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner container">
                            <div class="row flex-js">
                                <div class="col-md-7 flex-order-2">
                                    <div class="banner-img-wrapper">
                                        <div class="banner-img-inner">
                                            <div class="banner-img-item-1" data-swiper-parallax="-200">
                                                <div class="banner-img-1" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-1-4.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-2" data-swiper-parallax="-300">
                                                <div class="banner-img-2" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-2-4.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-3" data-swiper-parallax="-400">
                                                <div class="banner-img-3" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-3-4.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-4" data-swiper-parallax="-500">
                                                <div class="banner-img-4" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-4-4.jpg);"></div>
                                            </div>
                                            <div class="banner-img-item-5" data-swiper-parallax="-600">
                                                <div class="banner-img-5" style="background-image: url(<?php echo base_url();?>assets/img/banner-img-5-4.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-1">
                                    <article class="text-right">
                                        <h2 class="h1" data-swiper-parallax="-800">Design Interior</h2>
                                        <p data-swiper-parallax="-600">Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not tempus bibendum mattis making something</p>
                                        <div class="btn-wrap" data-swiper-parallax="-400"><a href="#" class="btn-2"><span>view more</span></a></div>
                                    </article>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-black"></div>
            </div>
        </div>

        <!-- banner -->

        <div class="clear"></div>
        <div class="empty-space h40-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- what-we-do -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">What we do</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum id metus ac tempus something posuere</p>
                </div>
            </div>
            <div class="empty-space h30-xs h65-md"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-3.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">Curabitur fermentum</a>
                            <ul>
                                <li>Quisque with placerat Porttitor nisi felis</li>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                                <li>Aenean suscipit vestibulum blandit making</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-4.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">kitchen furniture</a>
                            <ul>
                                <li>Aenean suscipit vestibulum blandit making</li>
                                <li>Quisque with placerat Porttitor nisi felis</li>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-5.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">children room</a>
                            <ul>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                                <li>Aenean suscipit vestibulum blandit making</li>
                                <li>Nulla consectetur quam mollis scelerisque</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-6.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">room for guest</a>
                            <ul>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                                <li>Aenean suscipit vestibulum blandit making</li>
                                <li>Nulla consectetur mollis scelerisque</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-7.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">main room</a>
                            <ul>
                                <li>Quisque with placerat Porttitor nisi felis</li>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                                <li>Aenean suscipit vestibulum blandit making</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="prod-item">
                        <a href="#" class="prod-item-img">
                            <img src="<?php echo base_url();?>assets/img/icon-8.png" alt="">
                        </a>
                        <div class="article small">
                            <a href="#" class="h4">bedrooms</a>
                            <ul>
                                <li>Aenean suscipit vestibulum blandit making</li>
                                <li>Congue in &#38; Tempus anything the best efficitur</li>
                                <li>Nulla consectetur mollis scelerisque</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- what-we-do -->

        <div class="empty-space h15-xs h80-md"></div>

        <!-- get-your-chance -->
        <div class="container-fluid nopadding block">
            <div class="clip">
                <div class="bg fix" style="background-image: url(<?php echo base_url();?>assets/img/img-3.jpg);">
                    <div class="bg-layer-6"></div>
                </div>
            </div>
            <div class="empty-space h35-xs h100-md"></div>
            <div class="empty-space h30-xs"></div>
            <div class="container">
                <div class="row flex-md">
                    <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-2">
                        <img class="img" src="<?php echo base_url();?>assets/img/img-4.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 flex-order-1">
                        <article class="text-center white-70 small-sm">
                            <div class="empty-space h40-xs h0-md"></div>
                            <h3 class="h3 white">Get your briliant chance</h3>
                            <div class="empty-space h20-xs"></div>
                            <p>Integer rhoncus nibh id risus lobortis, in ullamcorper erat tristique. Ut tempus leo sed volutpat congue. Fusce blandit eros sed lobortis lacinia.ed nulla dolor, tincidunt</p>
                        </article>
                        <div class="empty-space h40-xs fl"></div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <article class="text-center white-70 small-sm">
                                    <img src="<?php echo base_url();?>assets/img/icon-9.png" alt="">
                                    <div class="empty-space h5-xs"></div>
                                    <a href="#"><h5 class="h5 white hover-1">administrative department</h5></a>
                                    <p>Sed magna metus, placerat sit amet ullamcorper non, sodales at neque. Sed vel purus sed ipsum auctor vulputate</p>
                                </article>
                            </div>
                        </div>
                        <div class="empty-space h40-xs fl"></div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <article class="text-center white-70 small-sm">
                                    <img src="<?php echo base_url();?>assets/img/icon-10.png" alt="">
                                    <div class="empty-space h5-xs"></div>
                                    <a href="#"><h5 class="h5 white hover-1">design department</h5></a>
                                    <p>Phasellus viverra, metus vel bibendum sodales, quam ex hendrerit libero, non molestie justo orci eget sapien</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space h35-xs h100-md"></div>
            <div class="empty-space h30-xs"></div>
        </div>
        <!-- get-your-chance -->
        
        <div class="clear"></div>
        <div class="empty-space h40-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- what-we-made-before -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">What we made before</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum metus an mauris egetyps velitys volutpat</p>
                </div>
            </div>
            <div class="empty-space h25-xs h50-sm"></div>
            <div class="sorting-menu">
                <div class="button-drop">
                   <a href="#">
                        <span>All</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                    </a> 
                </div>
                <ul>
                    <li data-filter="*" class="active" data-name="All">All</li>
                    <li data-filter=".category-1" data-name="Design">Design</li>
                    <li data-filter=".category-2" data-name="Advertising">Advertising</li>
                    <li data-filter=".category-3" data-name="User Expirience">User Expirience</li>
                    <li data-filter=".category-4" data-name="Branding">Branding</li>
                </ul>
            </div>
            <div class="empty-space h20-xs h50-sm"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="grid-item category-3">
                            <a href="img/portfolio-1.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-1.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>
                        <div class="grid-item big category-1">
                            <a href="img/portfolio-2.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-2.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>
                        <div class="grid-item category-4">
                            <a href="img/portfolio-3.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-3.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>
                        <div class="grid-item big category-2">
                            <a href="img/portfolio-4.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-4.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>
                        <div class="grid-item big category-3">
                            <a href="img/portfolio-5.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-6.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>
                        <div class="grid-item category-1">
                            <a href="img/portfolio-6.jpg" class="lightbox"><img src="<?php echo base_url();?>assets/img/portfolio-5.jpg" alt=""></a>
                            <a class="h6" href="#">Studio photo shooting</a>
                            <p>hall room</p>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- what-we-made-before -->

        <div class="empty-space h0-xs h40-md"></div>
        <div class="empty-space h30-xs h20-md"></div>

        <!-- about -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">About company in whole</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum id metus make it done with mauris posuere</p>
                </div>
            </div>
            <div class="empty-space h30-xs h60-md"></div>
        </div>
        <!-- swiper -->
        <div class="swiper-style-1">
            <div class="swiper-button-wrapper">
                <div class="container">
                    <div class="swiper-button-prev swiper-button square-style" data-pagination-rel="1"></div>
                    <div class="swiper-button-next swiper-button square-style" data-pagination-rel="1"></div>
                </div>
            </div>
            <div class="swiper-container" data-speed="1000" data-space="50" data-pagination-rel="1" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6">
                                    <div class="percent-img-wrapper">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1" style="background-image: url(<?php echo base_url();?>assets/img/img-1.jpg);"></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-2.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                                    <div class="row">
                                        <div class="col-md-11 col-md-offset-1">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <article class="small-sm">
                                                <h4 class="h4">all at a glance</h4>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <ul class="about-list">
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-1.png" alt="">
                                                        <a href="#"><h6 class="h6 hover-1">Studio photo shooting</h6></a>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-2.png" alt="">
                                                        <a href="#"><h6 class="h6 hover-1">Studio photo shooting</h6></a>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                            </ul>
                                            <div class="empty-space h45-xs fl"></div>
                                            <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6">
                                    <div class="percent-img-wrapper">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1" style="background-image: url(<?php echo base_url();?>assets/img/img-1-2.jpg);"></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-2-2.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                                    <div class="row">
                                        <div class="col-md-11 col-md-offset-1">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <article class="small-sm">
                                                <h4 class="h4">all at a glance</h4>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <ul class="about-list">
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-1.png" alt="">
                                                        <h6 class="h6">Studio photo shooting</h6>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-2.png" alt="">
                                                        <h6 class="h6">Studio photo shooting</h6>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                            </ul>
                                            <div class="empty-space h45-xs fl"></div>
                                            <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6">
                                    <div class="percent-img-wrapper">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1" style="background-image: url(<?php echo base_url();?>assets/img/img-1-3.jpg);"></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-2-3.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                                    <div class="row">
                                        <div class="col-md-11 col-md-offset-1">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <article class="small-sm">
                                                <h4 class="h4">all at a glance</h4>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <ul class="about-list">
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-1.png" alt="">
                                                        <h6 class="h6">Studio photo shooting</h6>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="small-sm">
                                                        <img src="<?php echo base_url();?>assets/img/icon-2.png" alt="">
                                                        <h6 class="h6">Studio photo shooting</h6>
                                                        <p>Etiam nulla massa, aliquam sed orci vel, malesuada luctus est. In sed laoreet pharetra feugiat, nulla nulla feugiat metus </p>
                                                    </article>
                                                </li>
                                            </ul>
                                            <div class="empty-space h45-xs fl"></div>
                                            <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-black"></div>
            </div>
        </div>
        <!-- about -->

        <!-- <div class="empty-space h25-xs h100-md"></div> -->
        <div class="empty-space h70-xs"></div>

        <!-- quote -->
        <div class="container-fluid nopadding block">
            <div class="clip">
                <div class="bg fix" style="background-image: url(img/img-5.jpg);">
                    <div class="bg-layer-6"></div>
                </div>
            </div>
            <div class="empty-space h55-xs h100-md"></div>
            <div class="empty-space h30-xs"></div>
            <div class="container">

                <div class="quote">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <article class="text-center white-70 active">
                                <img src="<?php echo base_url();?>assets/img/author-1.png" alt="">
                                <h6 class="h6">anjelina jonson</h6>
                                <span class="small-sm block">project maneger</span>
                                <img src="<?php echo base_url();?>assets/img/quotes-left.png" alt="">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames something turpis egestas making better molestie. Nunc egestas erat lacus, vitae eleifend nisi eleifend making something realy good placerat exac ante scelerisque, bibendum felis nec</p>
                                <img src="<?php echo base_url();?>assets/img/quotes-right.png" alt="">
                            </article>
                            <article class="text-center white-70">
                                <img src="<?php echo base_url();?>assets/img/author-2.png" alt="">
                                <h6 class="h6">anjelina jonson</h6>
                                <span class="small-sm block">project maneger</span>
                                <img src="<?php echo base_url();?>assets/img/quotes-left.png" alt="">
                                <p>Nunc egestas erat lacus, vitae eleifend nisi eleifend making something realy good placerat exac ante scelerisque. Donec feugiat volutpat lacus id elementum. Fusce sagittis ac purus vel commodo. Integer lobortis risus eleifend nisi eleifend id, bibendum felis nec</p>
                                <img src="<?php echo base_url();?>assets/img/quotes-right.png" alt="">
                            </article>
                            <article class="text-center white-70">
                                <img src="<?php echo base_url();?>assets/img/author-3.png" alt="">
                                <h6 class="h6">anjelina jonson</h6>
                                <span class="small-sm block">project maneger</span>
                                <img src="<?php echo base_url();?>assets/img/quotes-left.png" alt="">
                                <p>Aliquam sagittis tellus convallis, bibendum felis nec, mattis urna. Ut fringilla, lectus quis sem making something realy good. Nunc egestas erat lacus, vitae eleifend nisi eleifend making something realy good placerat exac ante scelerisque, bibendum felis nec</p>
                                <img src="<?php echo base_url();?>assets/img/quotes-right.png" alt="">
                            </article>
                            <ul>
                                <li class="quote-nav active"><img src="img/author-1-sm.png" alt=""></li>
                                <li class="quote-nav"><img src="<?php echo base_url();?>assets/img/author-2-sm.png" alt=""></li>
                                <li class="quote-nav"><img src="<?php echo base_url();?>assets/img/author-3-sm.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="empty-space h55-xs h100-md"></div>
            <div class="empty-space h20-xs"></div>
        </div>
        <!-- quote -->

        <div class="clear"></div>
        <div class="empty-space h40-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- our-preference -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">Our preference</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum id metus ac mauris and doing get velit</p>
                </div>
            </div>
            <div class="empty-space h30-xs h60-md"></div>
        </div>
        <!-- swiper -->
        <div class="swiper-style-1">
            <div class="swiper-button-wrapper">
                <div class="container">
                    <div class="swiper-button-prev swiper-button square-style" data-pagination-rel="2"></div>
                    <div class="swiper-button-next swiper-button square-style" data-pagination-rel="2"></div>
                </div>
            </div>
            <div class="swiper-container" data-speed="1000" data-space="50" data-pagination-rel="2" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6 flex-order-2">
                                    <div class="percent-img-wrapper style-2">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1"><span>1</span></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-7-1.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 flex-order-1">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <div class="slide-number"><span>01</span> &#47; 03</div>
                                            <div class="empty-space h5-xs"></div>
                                            <article class="small-sm">
                                                <a href="#"><h4 class="h4 hover-1">you can see all detail information</h4></a>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam enim</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <div class="detail-info small">
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Item article&#58;</span></div>
                                                    <div class="col-sm-9"><p>5682676</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Brand&#58;</span></div>
                                                    <div class="col-sm-9"><p>Pion&#38;Rion</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Materials&#58;</span></div>
                                                    <div class="col-sm-9"><p>Wood 86&#37;, Plastic11&#37;, Silk 3&#37;</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Color&#58;</span></div>
                                                    <div class="col-sm-9"><p>Black</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Parametrs&#59;</span></div>
                                                    <div class="col-sm-9"><p>230&#42;556&#42;36</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6 flex-order-2">
                                    <div class="percent-img-wrapper style-2">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1"><span>2</span></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-7-2.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 flex-order-1">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <div class="slide-number"><span>02</span> &#47; 03</div>
                                            <div class="empty-space h5-xs"></div>
                                            <article class="small-sm">
                                                <a href="#"><h4 class="h4 hover-1">you can see all detail information</h4></a>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam enim</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <div class="detail-info small">
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Item article&#58;</span></div>
                                                    <div class="col-sm-9"><p>5682676</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Brand&#58;</span></div>
                                                    <div class="col-sm-9"><p>Pion&#38;Rion</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Materials&#58;</span></div>
                                                    <div class="col-sm-9"><p>Wood 86&#37;, Plastic11&#37;, Silk 3&#37;</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Color&#58;</span></div>
                                                    <div class="col-sm-9"><p>Black</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Parametrs&#59;</span></div>
                                                    <div class="col-sm-9"><p>230&#42;556&#42;36</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex">
                                <div class="col-md-6 flex-order-2">
                                    <div class="percent-img-wrapper style-2">
                                        <div class="percent-img-inner">
                                            <div class="percent-img-item-1">
                                                <div class="percent-img-1"><span>3</span></div>
                                            </div>
                                            <div class="percent-img-item-2">
                                                <div class="percent-img-2" style="background-image: url(<?php echo base_url();?>assets/img/img-7-3.jpg);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 flex-order-1">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="empty-space h50-xs h0-md"></div>
                                            <div class="slide-number"><span>03</span> &#47; 03</div>
                                            <div class="empty-space h5-xs"></div>
                                            <article class="small-sm">
                                                <a href="#"><h4 class="h4 hover-1">you can see all detail information</h4></a>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel someorci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam enim</p>
                                                <div class="empty-space h25-xs"></div>
                                            </article>
                                            <div class="detail-info small">
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Item article&#58;</span></div>
                                                    <div class="col-sm-9"><p>5682676</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Brand&#58;</span></div>
                                                    <div class="col-sm-9"><p>Pion&#38;Rion</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Materials&#58;</span></div>
                                                    <div class="col-sm-9"><p>Wood 86&#37;, Plastic11&#37;, Silk 3&#37;</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Color&#58;</span></div>
                                                    <div class="col-sm-9"><p>Black</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"><span>Parametrs&#59;</span></div>
                                                    <div class="col-sm-9"><p>230&#42;556&#42;36</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-black"></div>
            </div>
        </div>
        <!-- our-preference -->

        <div class="empty-space h45-xs h100-md"></div>
        <div class="empty-space h10-xs"></div>

        <!-- team -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">Designers team</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum id metus acestyks velit volutpat posuere</p>
                </div>
            </div>
            <div class="empty-space h30-xs h60-md"></div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="team-img">
                        <img src="<?php echo base_url();?>assets/img/team-1.png" alt="">
                    </a>
                    <div class="empty-space h20-xs"></div>
                    <div class="article text-center">
                        <a href="#" class="h6 hover-1">ELISABET MENSON</a>
                        <p>designer</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="empty-space h20-xs h0-md"></div>
                <div class="col-md-4">
                    <a href="#" class="team-img">
                        <img src="<?php echo base_url();?>assets/img/team-2.png" alt="">
                    </a>
                    <div class="empty-space h20-xs"></div>
                    <div class="article text-center">
                        <a href="#" class="h6 hover-1">ELISABET MENSON</a>
                        <p>designer</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="empty-space h20-xs h0-md"></div>
                <div class="col-md-4">
                    <a href="#" class="team-img">
                        <img src="<?php echo base_url();?>assets/img/team-3.png" alt="">
                    </a>
                    <div class="empty-space h20-xs"></div>
                    <div class="article text-center">
                        <a href="#" class="h6 hover-1">ELISABET MENSON</a>
                        <p>designer</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- team -->

        <div class="empty-space h45-xs h100-md"></div>
        <div class="empty-space h10-xs"></div>

        <!-- 3D excursion -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">Would you like to try 3D excursion</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit elemen tum iesded metus ac tempus mauris something volutpat</p>
                </div>
            </div>
            <div class="empty-space h30-xs h60-md"></div>
            <div class="excursion">
                <div class="row">
                    <div class="col-md-8">
                        <div class="excursion-video">
                            <img src="img/img-8.jpg" alt="">
                            <div class="btn-play open-video" data-src="https://www.youtube.com/embed/kQT2y3UiosQ?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                <i class="fa fa-play fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="swiper-style-1">
                            <div class="swiper-container" data-speed="1000" data-space="30" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="excursion-preview active" data-img="<?php echo base_url();?>assets/img/img-8.jpg" data-video-link="https://www.youtube.com/embed/kQT2y3UiosQ?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-8-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">STUDIO PHOTO  WITH OPEN SPACE</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-9.jpg" data-video-link="https://www.youtube.com/embed/vlDzYIIOYmM?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-9-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">NAM MAGNA FELIS IACULIS SIT</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-10.jpg" data-video-link="https://www.youtube.com/embed/A3PDXmYoF5U?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-10-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">AENEAN VITAE SAPIEN AT RISUS LAOREET</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="excursion-preview active" data-img="<?php echo base_url();?>assets/img/img-8.jpg" data-video-link="https://www.youtube.com/embed/kQT2y3UiosQ?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-8-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">STUDIO PHOTO  WITH OPEN SPACE</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-9.jpg" data-video-link="https://www.youtube.com/embed/vlDzYIIOYmM?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-9-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">NAM MAGNA FELIS IACULIS SIT</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-10.jpg" data-video-link="https://www.youtube.com/embed/A3PDXmYoF5U?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-10-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">AENEAN VITAE SAPIEN AT RISUS LAOREET</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="excursion-preview active" data-img="<?php echo base_url();?>assets/img/img-8.jpg" data-video-link="https://www.youtube.com/embed/kQT2y3UiosQ?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-8-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">STUDIO PHOTO  WITH OPEN SPACE</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-9.jpg" data-video-link="https://www.youtube.com/embed/vlDzYIIOYmM?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-9-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">NAM MAGNA FELIS IACULIS SIT</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty-space h30-xs"></div>
                                        <div class="excursion-preview" data-img="<?php echo base_url();?>assets/img/img-10.jpg" data-video-link="https://www.youtube.com/embed/A3PDXmYoF5U?autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;theme=light&amp;wmode=transparent">
                                            <div class="row flex">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <img src="img/img-10-sm.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6 class="h6 hover-1 title">AENEAN VITAE SAPIEN AT RISUS LAOREET</h6>
                                                    <div class="empty-space h15-xs"></div>
                                                    <p>hall room</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-black"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3D excursion -->

        <div class="empty-space h45-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- design-items -->
        <div class="container-fluid nopadding block">
            <div class="clip">
                <div class="bg fix" style="background-image: url(<?php echo base_url();?>assets/img/img-11.jpg);">
                    <div class="bg-layer-6"></div>
                </div>
            </div>
            <div class="empty-space h40-xs h100-md"></div>
            <div class="empty-space h20-xs"></div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12">
                       <h2 class="h2 white">Design items</h2> 
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 white-70">
                        <div class="empty-space h20-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras elementum id metus acestyks velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h35-xs h70-md"></div>
            <div class="container-fluid nopadding">
                <div class="swiper-style-2">
                    <div class="swiper-container" data-speed="1000" data-space="0" data-breakpoints="1" data-slides-per-view="4" data-xs-slides="1" data-sm-slides="2" data-md-slides="3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="design-item text-center">
                                    <article>
                                        <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>cursus augue tempus consequat mollis</p>
                                        <div class="empty-space h20-xs"></div>
                                        <span class="price">&#36;286<sup>00</sup></span>
                                        <div class="empty-space h30-xs"></div>
                                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/item-1.png" alt=""></a>
                                        <div class="empty-space h35-xs"></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="design-item text-center">
                                    <article>
                                        <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>cursus augue tempus consequat mollis</p>
                                        <div class="empty-space h20-xs"></div>
                                        <span class="price">&#36;286<sup>00</sup></span>
                                        <div class="empty-space h30-xs"></div>
                                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/item-2.png" alt=""></a>
                                        <div class="empty-space h35-xs"></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="design-item text-center">
                                    <article>
                                        <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>cursus augue tempus consequat mollis</p>
                                        <div class="empty-space h20-xs"></div>
                                        <span class="price">&#36;286<sup>00</sup></span>
                                        <div class="empty-space h30-xs"></div>
                                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/item-3.png" alt=""></a>
                                        <div class="empty-space h35-xs"></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="design-item text-center">
                                    <article>
                                        <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>cursus augue tempus consequat mollis</p>
                                        <div class="empty-space h20-xs"></div>
                                        <span class="price">&#36;286<sup>00</sup></span>
                                        <div class="empty-space h30-xs"></div>
                                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/item-4.png" alt=""></a>
                                        <div class="empty-space h35-xs"></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>read more</span></a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="empty-space h30-xs h60-md"></div>
            <div class="container-fluid text-center">
                <div class="btn-wrap"><a href="#" class="btn-1"><span>view all products</span></a></div>
            </div>
            <div class="empty-space h40-xs h100-md"></div>
            <div class="empty-space h20-xs"></div>
        </div>
        <!-- design-items -->
        
        <div class="clear"></div>
        <div class="empty-space h40-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- know more -->
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                   <h2 class="h2">Whould you like to know more</h2> 
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="empty-space h20-xs"></div>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit elemen tum iesded metus ac tempus mauris something volutpat</p>
                </div>
            </div>
            <div class="empty-space h30-xs h60-md"></div>
            <div class="row">
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-center">
                    <a href="#" class="img-hover-1"><img class="img" src="<?php echo base_url();?>assets/img/img-12.jpg" alt=""></a>
                    <div class="empty-space h20-xs h20-md"></div>
                    <article class="small-sm">
                        <a href="#"><h6 class="h6 hover-1">ALIQUAM LECTUS SEM, ULLAMCORPER</h6></a>
                        <div class="empty-space h15-xs"></div>
                        <ul class="author-date">
                            <li><img src="<?php echo base_url();?>assets/img/icon-11.png" alt=""><span>by John Mitcher</span></li>
                            <li><img src="<?php echo base_url();?>assets/img/icon-12.png" alt=""><span>15 Sep 2016</span></li>
                        </ul>
                        <div class="empty-space h10-xs"></div>
                        <p>Nullam eget pulvinar lacus, porttitor hendrerit mauris. Morbi facilisis nulla vel urna scelerisque, in ullamcorper ipsum rutrum eu mauris congue, venenatis mauris</p>
                        <div class="empty-space h30-xs h0-md"></div>
                    </article>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-center">
                    <a href="#" class="img-hover-1"><img class="img" src="<?php echo base_url();?>assets/img/img-13.jpg" alt=""></a>
                    <div class="empty-space h20-xs h20-md"></div>
                    <article class="small-sm">
                        <a href="#"><h6 class="h6 hover-1">ALIQUAM LECTUS SEM, ULLAMCORPER</h6></a>
                        <div class="empty-space h15-xs"></div>
                        <ul class="author-date">
                            <li><img src="<?php echo base_url();?>assets/img/icon-11.png" alt=""><span>by John Mitcher</span></li>
                            <li><img src="<?php echo base_url();?>assets/img/icon-12.png" alt=""><span>15 Sep 2016</span></li>
                        </ul>
                        <div class="empty-space h10-xs"></div>
                        <p>Nullam eget pulvinar lacus, porttitor hendrerit mauris. Morbi facilisis nulla vel urna scelerisque, in ullamcorper ipsum rutrum eu mauris congue, venenatis mauris</p>
                        <div class="empty-space h30-xs h0-md"></div>
                    </article>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-center">
                    <a href="#" class="img-hover-1"><img class="img" src="<?php echo base_url();?>assets/img/img-14.jpg" alt=""></a>
                    <div class="empty-space h20-xs h20-md"></div>
                    <article class="small-sm">
                        <a href="#"><h6 class="h6 hover-1">ALIQUAM LECTUS SEM, ULLAMCORPER</h6></a>
                        <div class="empty-space h15-xs"></div>
                        <ul class="author-date">
                            <li><img src="<?php echo base_url();?>assets/img/icon-11.png" alt=""><span>by John Mitcher</span></li>
                            <li><img src="<?php echo base_url();?>assets/img/icon-12.png" alt=""><span>15 Sep 2016</span></li>
                        </ul>
                        <div class="empty-space h10-xs"></div>
                        <p>Nullam eget pulvinar lacus, porttitor hendrerit mauris. Morbi facilisis nulla vel urna scelerisque, in ullamcorper ipsum rutrum eu mauris congue, venenatis mauris</p>
                    </article>
                </div>
            </div>
        </div>
        <!-- know more -->

        <div class="empty-space h40-xs h100-md"></div>
        <div class="empty-space h20-xs"></div>

        <!-- instagram -->
        <div class="swiper-instagram">
            <div class="swiper-container" data-speed="1000" data-space="10" data-breakpoints="1" data-slides-per-view="6" data-xs-slides="4" data-sm-slides="6" data-md-slides="6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-1.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-2.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-3.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-4.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-5.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-6.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-1.jpg" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="img-hover-2" href="#"><img src="<?php echo base_url();?>assets/img/instagram-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram -->

        <div class="empty-space h10-xs"></div>

        <!-- footer -->
        <footer class="footer-black">
            <div class="container small-sm">
                <div class="row">
                    <div class="col-md-3">
                        <a href="index.html"><img src="img/logo-white.png" alt=""></a>
                        <div class="empty-space h10-xs"></div>
                        <p>Muslim Market Place Berbasis Syariah</p>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-2">
                        <h6 class="h7">Alamat</h6>
                        <div class="empty-space h10-xs"></div>
                        <ul>
                            <li>
                                <a href="https://www.google.com.ua/maps/@40.7573849,-73.9721243,19z">Jl. Ahmad Yani Wonocolo, Surabaya</a>
                            </li>
                        </ul>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-2 col-md-offset-1">
                        <h6 class="h7">Hubungi Kami</h6>
                        <div class="empty-space h10-xs"></div>
                        <ul>
                            <li>
                                <a href="tel:+380982367536">tel. +62812-1649-1219</a>
                            </li>
                            <li>
                                <a href="mailto:info@bristol.com">e-mail nuryaapr@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-3 col-md-offset-1">
                        <h6 class="h7">Follow us</h6>
                        <div class="empty-space h15-xs h25-md"></div>
                        <div class="follow">
                            <a class="item" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="item" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="item" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            <a class="item" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="item" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="empty-space h25-xs"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; 2019 All rights reserved. Development with <span class="fa fa-heart"></span> by <a href="https://themeforest.net/user/unionagency" target="blank">MusliMarket.</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

    </div>
    <!-- content -->

    <!-- POPUPS -->
    <div class="popup-wrapper">
        <div class="bg-layer"></div>

        <div class="popup-content basket-popup" data-rel="1">
            <div class="layer-close"></div>
            <div class="popup-container size-2 right">
                <div class="popup-align">
                    <div class="basket-item">
                        <div class="basket-item-close"></div>
                        <a href="#" class="img-hover-2"><img src="img/shop/item-1-sm.jpg" alt=""></a>
                        <div class="description">
                            <article>
                                <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                            </article>
                        </div>
                        <div class="quantity-wrapper">
                            <div class="quantity">
                                <input type="number" value="1">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="price"><span>&#36;572<sup>00</sup></span></div>
                    </div>
                    <div class="basket-item">
                        <div class="basket-item-close"></div>
                        <a href="#" class="img-hover-2"><img src="img/shop/item-2-sm.jpg" alt=""></a>
                        <div class="description">
                            <article>
                                <a href="#"><h6 class="h6 hover-1">CHAIR WITH OPEN SPACE</h6></a>
                                <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                            </article>
                        </div>
                        <div class="quantity-wrapper">
                            <div class="quantity">
                                <input type="number" value="1">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="price"><span>&#36;567<sup>00</sup></span></div>
                    </div>
                    <div class="total-basket-price price">total price: <span>&#36;1139<sup>00</sup></span></div>
                    <div class="btn-wrap"><a href="#" class="btn-2"><span>proceed to checkout</span></a></div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

      <!--  <div class="popup-content login-popup" data-rel="2">
            <div class="layer-close"></div>
            <div class="popup-container size-3">
                <div class="popup-align">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="h2">Log in</h2>
                            <div class="empty-space h60-xs"></div>
                        </div>
                    </div>
                    <div class="row separator">
                        <div class="col-sm-6">
                            <form action="<?php echo base_url(). 'welcome/aksilogin'; ?>" method="post" class="frm-single">
                                <div class="input-wrapper">
                                    <div class="input-style">
                                        <input id="inputEmail2" name="email" type="text" class="input" required>
                                        <label for="inputEmail2">E-mail</label>
                                    </div>
                                    <div class="input-style">
                                        <input id="inputPass" name="password" type="password" class="input" required>
                                        <label for="inputPass">Password</label>
                                    </div>
                                </div>
                                <p><a href="#">Forgot your password&#63;</a></p>
                                <div  class="txt-login-with txt-center"><input type="submit" value="Login"></div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <article>
                                <h4 class="h4">LOG IN VIA SOCIAL NETWORKS</h4>
                                <div class="empty-space h20-xs"></div>
                                <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip commodo quat duis aute irure dolor</p>
                            </article>
                            <div class="empty-space h30-xs fl"></div>
                            <a href="#" class="btn-2 twitter"><span>twitter</span></a>
                            <a href="#" class="btn-2 facebook"><span>facebook</span></a>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12 text-center">
                            <div class="empty-space h30-xs"></div>
                           <a href="" class="btn-sing-up open-popup" data-rel="3">Sign up now</a>
                       </div> 
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content login-popup" data-rel="3">
            <div class="layer-close"></div>
            <div class="popup-container size-3">
                <div class="popup-align">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="h2">Sign up</h2>
                            <div class="empty-space h60-xs"></div>
                        </div>
                    </div>
                    <div class="row separator">
                        <div class="col-sm-6">
                            <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" class="frm-single">
                                <div class="input-wrapper">
                                    <div class="input-style">
                                        <input id="inputName2" name="nama" type="text" class="input" required>
                                        <label for="inputName2">Name</label>
                                    </div>
                                    <div class="input-style">
                                        <input id="inputEmail3" name="email" type="text" class="input" required>
                                        <label for="inputEmail3">E-mail</label>
                                    </div>
                                    <div class="input-style">
                                        <input id="telp" name="telepon" type="telepon" class="input" required>
                                        <label for="inputTelp">Telepon</label>
                                    </div>
                                    <div class="input-style">
                                        <input id="inputPass2" name="password" type="password" class="input" required>
                                        <label for="inputPass2">Password</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn-wrap">Register<i class="fa fa-arrow-circle-right"></i></button>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <article>
                                <h4 class="h4">REGISTER VIA SOCIAL NETWORKS</h4>
                                <div class="empty-space h20-xs"></div>
                                <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip commodo quat duis aute irure dolor</p>
                            </article>
                            <div class="empty-space h30-xs fl"></div>
                            <a href="#" class="btn-2 twitter"><span>twitter</span></a>
                            <a href="#" class="btn-2 facebook"><span>facebook</span></a>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>-->

        <div class="popup-content quick-view-popup" data-rel="4">
            <div class="layer-close"></div>
            <div class="popup-container size-3">
                <div class="popup-align">
                    <div class="row separator">
                        <div class="col-sm-5">
                            <!-- swiper -->
                            <div class="swiper-popup">
                                <div class="swiper-button-prev swiper-button" data-pagination-rel="1"></div>
                                <div class="swiper-button-next swiper-button" data-pagination-rel="1"></div>
                                <div class="swiper-container" data-speed="1000" data-pagination-rel="1" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url();?>assets/img/shop/swiper-popup-1.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url();?>assets/img/shop/swiper-popup-2.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url();?>assets/img/shop/swiper-popup-3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-black"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h4 class="h4">chair with open space</h4>
                            <div class="empty-space h25-xs"></div>
                            <h6 class="h6">Price:<span class="price">&#36;567<sup>00</sup></span></h6>
                            <div class="empty-space h25-xs"></div>
                            <h6 class="h6">Available:<span class="h4 yellow">YES</span></h6>
                            <div class="empty-space h25-xs"></div>
                            <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip com qu duis aute irure dolor in reprehenderit  cillum dolore eu fugiat nulla pariatur excepteur sint occa ecat cupidatat culpa qui officia  deserunt mollit anim id est  laborum. Sed ut per spiciatis unde omnis iste natus error</p>
                            <div class="empty-space h20-xs"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="quantity-wrapper">
                                        <div class="quantity">
                                            <input type="number" value="1">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="btn-wrap"><a href="#" class="btn-2"><span>add to cart</span></a></div>
                                </div>
                            </div>
                            <div class="empty-space h30-xs"></div>
                            <div class="follow-wrapper">
                                <h6 class="h6">Share:</h6>
                                <div class="follow">
                                    <a class="item" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="item" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="item" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                    <a class="item" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="item" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

    </div>


    <script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/swiper.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?php echo base_url();?>assets/js/map.js"></script>
    <script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/simple-lightbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sumoselect.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/global.js"></script>

</body>
</html>