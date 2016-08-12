<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
// use app\assets\AppAsset;
use app\assets\AutoAsset;

AutoAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <!-- <title>Car Dealer | Home</title> -->
    
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <link rel="shortcut" href="images/favicon.ico" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<!-- <body> -->

<body class="menu-1 h-style-1 text-1">

<div class="wrap">
    
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->   
    
    <header id="header" class="clearfix">
        
        <a href="index.html" id="logo"><img src="images/logo.png" alt="Car Dealer" /></a>
        
        <div class="widget-container widget_search">
            
            <span class="call"><span>+1 234</span> 567-8901</span><br />
            
            <span class="adds">12 Street, Los Angeles, CA, 94101</span>

            <form action="#" id="searchform" method="get" />

                <p>
                    <input type="text" id="s" placeholder="Search" />
                    <button type="submit" id="searchsubmit"></button>
                </p>

            </form><!--/ #searchform-->

        </div><!--/ .widget-container-->        
        
        <nav id="navigation" class="navigation">
            
            <ul>
                <li class="current-menu-item">
                    <!-- <a href="index.html">Home</a> -->
                    <?php echo Html::a("Home", ['cars/home'], ['class' => '']) ?>
                </li>
                <li><a href="all-listings.html">Browse By</a>
                    <ul>
                        <li><a href="all-listings.html">All Listings</a></li>
                        <li><a href="#">Manufacturer</a>
                            <ul>
                                <li><a href="one-products.html">Aston Martin</a></li>
                                <li><a href="one-products.html">Audi</a></li>
                                <li><a href="one-products.html">BMW</a></li>
                                <li><a href="one-products.html">Chevrolet</a></li>
                                <li><a href="one-products.html">Mercedes Benz</a></li>
                                <li><a href="one-products.html">Ferrari</a></li>
                                <li><a href="one-products.html">Lexus</a></li>
                                <li><a href="one-products.html">Porsche</a></li>
                                <li><a href="one-products.html">Toyota</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Body Type</a></li>
                        <li><a href="#">Engine Size</a></li>
                        <li><a href="#">Mileage</a></li>
                        <li><a href="#">Model Year</a></li>
                        <li><a href="#">Price Range</a></li>
                        <li><a href="#">Transmission</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="dealer-single.html">Dealer Single</a></li>
                    </ul>
                </li>
                <li><a href="alternative-blog.html">News</a></li>
                <li><a href="sales-reps.html">Sales Reps</a></li>
                <li><a href="compare-listings.html">Pages</a>
                    <ul>
                        <li><a href="compare-listings.html">Compare Listings</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="image-and-floats.html">Images and Floats</a></li>
                        <li><a href="pricing-table.html">Pricing Tables</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="toggle.html">FAQ Toggle</a></li>
                        <li><a href="columns.html">Column Layout</a></li>
                        <li><a href="login.html">Registration</a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="user-profile.html">User Profile</a></li>
                            </ul>                           
                        </li>
                        <li><a href="watchlist-page.html">Personal Cabinet</a>
                            <ul>
                                <li><a href="watchlist-page.html">Watch List</a></li>
                                <li><a href="my-vechicles.html">My Vechicles</a></li>
                                <li><a href="vechicle-step-1.html">Step 1</a></li>
                                <li><a href="vechicle-step-2.html">Step 2</a></li>
                                <li><a href="vechicle-step-3.html">Step 3</a></li>
                                <li><a href="vechicle-step-4.html">Step 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contacts</a></li>
            </ul>
            
        </nav><!--/ #navigation-->
        
    </header><!--/ #header-->
    
    <!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->

    
        <?= $content ?>
    
    <!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - --> 
    
    <footer id="footer" class="container clearfix">
        
        <section class="container clearfix">
            
            <div class="four columns">

                <div class="widget-container widget_text">

                    <h3 class="widget-title">About Us</h3>

                    <div class="textwidget">

                        <p class="white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. 
                        </p>    

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>

                    </div><!--/ .textwidget-->

                    <a href="#" class="see">Read more</a>

                </div><!--/ .widget-container-->    

            </div><!--/ .four .columns-->

            <div class="four columns">

                <div class="widget-container widget_text">

                    <h3 class="widget-title">Our Hours</h3>

                    <div class="textwidget">

                        <ul class="hours">

                            <li>Monday <span>8 am to 7 pm</span></li>
                            <li>Tuesday <span>8 am to 9 pm</span></li>
                            <li>Wednesday <span>8 am to 9 pm</span></li>
                            <li>Thursday <span>8 am to 9 pm</span></li>
                            <li>Friday <span>8 am to 9 pm</span></li>
                            <li>Saturday <span>8 am to 9 pm</span></li>
                            <li>Sunday <span>Closed</span></li>

                        </ul><!--/ .hours-->

                    </div><!--/ .textwidget-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="four columns">

                <div class="widget-container widget_contacts">

                    <h3 class="widget-title">Our Contacts</h3>          

                    <ul class="our-contacts">

                        <li class="address">
                            <b>Address Info 1:</b>
                            <p>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</p>
                        </li>
                        <li class="phone">
                            <b>Phone:</b>&nbsp;<span>+1 (234) 567-8901</span> <br />
                            <b>FAX:</b>&nbsp;<span>+1 (234) 567-8902</span>
                        </li>
                        <li>
                            <b>Email: <a href="mailto:testmail@sitename.com">testmail@sitename.com</a></b>
                        </li>
                        <li>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#">Twitter</a></li>
                                <li class="facebook"><a title="facebook" href="#">Facebook</a></li>
                                <li class="rss"><a title="rss" href="#">Rss</a></li>
                            </ul><!--/ .social-icons-->
                        </li>

                    </ul><!--/ .our-contacts-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="four columns">

                <div id="gMap"></div>

            </div><!--/ .four .columns-->
            
            <div class="adjective clearfix">

                <p class="copyright">Copyright &copy; 2012. ThemeMakers. All rights reserved</p>

                <p class="developed">developed by <a href="http://webtemplatemasters.com" target="_blank">ThemeMakers</a></p>
                
            </div><!--/ .adjective-->

        </section><!--/ .container-->
        
    </footer><!--/ #footer-->
    
    <!-- - - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - - -->     
    
</div><!--/ .wrap-->

<div class="account-wrapper">
    
    <form class="form-reg" method="post" action="" />
        
        <a href="#" class="log">Login</a>
        
        <p>
            <label>Username*</label>
            <input class="input-medium" type="text" />
        </p>
        
        <p>
            <label>Password*</label>
            <input class="input-medium" type="password" />
        </p>
        
        <p class="forgot-pass">
            <a href="#">Forgot your password?</a>
        </p>
        
        <p>
            <a href="#" class="button dark enter-btn">Login</a>
            <a href="#" class="button dark enter-btn">Create an account</a>
        </p>
        
    </form><!--/ .form-reg-->
    
</div><!--/ .account-wrapper-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
