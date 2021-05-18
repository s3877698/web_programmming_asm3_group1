<?php
    session_start();
    include('./backend/check_login.php');
    $my_account_link = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Category-Nike</title>
    <link rel="stylesheet" href="./code/css/product-browse.css">
    <link rel="stylesheet" href="./code/css/header.css">
    <link rel="stylesheet" href="./code/css/footer.css">
    <link rel="stylesheet" href="./code/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./code/css/cookies.css">
</head>
<body>
    <div id="overlay-cookies"></div>
    <div class="cookie-container">
        <h1>I use cookie</h1>
        <p>My website uses cookies necessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>
    <header>
        <main>
            <nav class="first-nav">
                <h1 class="logo"><a href="./index.php">RETAILEZ</a></h1>
                <!-- Nav PC -->
                <nav class="nav__pc">
                    <ul class="nav__list">
                        <li><a href="./index.php" class="nav__link push" id="underline">Home</a></li>
                        <li><a href="./about.php" class="nav__link" id="underline">About Us</a></li>
                        <li><a href="./fee.php" class="nav__link" id="underline">Fees</a></li>
                        <li><a href=<?=$my_account_link?> class="nav__link my-account">My Account</a></li>
                        <li>
                            <a href="#" class="nav__link">Browse<i class="ti-angle-double-down"></i></a>
                            <ul class="subnav">
                                <li><a href="./store-browse-name.php">Store By Name</a></li>
                                <li><a href="./store-browse-categ.php">Store By Category</a></li>
                            </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__link">Contact</a></li>
                        <li><a href="./order_placement.php" class="nav__link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
    
                
                <!-- Nav responsive -->
                <label for="nav-mobile-input" class="nav__bars-btn">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                </label>
                
                <input type="checkbox" hidden name="" id="nav-mobile-input" class="nav__input">
                
    
                <label for="nav-mobile-input" class="nav__overlay">
    
                </label>
    
                <nav class="nav__mobile">
                    <label for="nav-mobile-input" class="nav__mobile-close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                    </label>
                    <ul class="nav__mobile-list">
                        <li><a href="./index.php" class="nav__mobile-link">Home</a></li>
                        <li><a href="./about.php" class="nav__mobile-link">About us</a></li>
                        <li><a href="./fee.php" class="nav__mobile-link">Fees</a></li>
                        <li>
                            <a class="my-account" href=<?=$my_account_link?>><label for="subnav-mobile-check-account" class="nav__mobile-link hover-account">My Account</label></a>
                        </li>
                        <li>
                            <label for="subnav-mobile-check-browse" class="nav__mobile-link hover-browse">Browse<i class="ti-angle-double-down"></i></label>
                            <input type="checkbox" id="subnav-mobile-check-browse" class="check-subnav-browse">
                                <ul class="subnav-mobile-browse">
                                    <li><a href="./store-browse-name.php">By Name</a></li>
                                    <li><a href="./store-browse-categ.php">By Category</a></li>
                                </ul>
                        </li>
                        <li><a href="./faqs.php" class="nav__mobile-link">FAQs</a></li>
                        <li><a href="./contact.php" class="nav__mobile-link">Contact</a></li>
                        <li><a href="./order_placement.php" class="nav__mobile-link"><i class="ti-shopping-cart"></i></a></li>
                    </ul>
                </nav>
                
            </nav>
        </main>
    </header>

    <main>
        <label for="details" class="category">Running<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details">

        <div class="product-container pd1">
            <div class="product">
                <!-- <div class="overlay">
                    <p>180$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/airzoom.jpg" alt="airzoom" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Airzoom</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>120$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/airmax.jpg" alt="airmax" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Airmax</a></h3>
            </div>
    
            <div class="product lst">
                <!-- <div class="overlay">
                    <p>150$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/vapormax.jpg" alt="vapormax" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Vapormax</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>170$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/pegasus.jpg" alt="pegasus" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Pegasus</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>100$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/run2.jpg" alt="airmax" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Airmax</a></h3>
            </div>
        </div>


        <label for="details-2" class="category">Tennis<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-2">

        <div class="product-container pd2">
            <div class="product">
                <!-- <div class="overlay">
                    <p>115$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tennis1.jpg" alt="tennis shoes" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Tennis shoes</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>80$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tennis racket.jpg" alt="tennis racket" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Tennis racket</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>180$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/full_set_tennis.jpg" alt="full set" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Full set tennis</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>55$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tennis_ball.jpg" alt="ball" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Tennis ball</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>56$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tennis racket 2.jpg" alt="tennis racket" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Tennis racket</a></h3>
            </div>
        </div>

        <label for="details-3" class="category">Basketball<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-3">

        <div class="product-container pd3">
            <div class="product">
                <!-- <div class="overlay">
                    <p>200$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/aj1.jpg" alt="air jordan" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Air Jordan</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>190$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/aj2.jpg" alt="air jordan" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Air Jordan</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>185$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/lebron1.jpg" alt="lebron" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Lebron</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>680$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/full_set_basketball.jpg" alt="full set" width="200" height="200"></a>
                <h3><a href="./product-detail.php">full set</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>62$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/basketball1.jpg" alt="basketball" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Basketball</a></h3>
            </div>
        </div>


        <label for="details-4" class="category">Casual<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-4">

        <div class="product-container pd4">
            <div class="product">
                <!-- <div class="overlay">
                    <p>26$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/pants.jpg" alt="pants" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Pants</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>27$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/shorts.jpg" alt="shorts" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Shorts</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>35$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tshirt1.jpg" alt="t-shirt" width="200" height="200"></a>
                <h3><a href="./product-detail.php">T-shirt</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>45$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/tshirt2.jpg" alt="t-shirt" width="200" height="200"></a>
                <h3><a href="./product-detail.php">T-shirt</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>12$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/socks.jpg" alt="socks" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Socks</a></h3>
            </div>
        </div>


        <label for="details-5" class="category">Clothing<i class="ti-angle-double-down"></i></label>
        <input type="checkbox" name="details" id="details-5">

        <div class="product-container pd5">
            <div class="product">
                <!-- <div class="overlay">
                    <p>59$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/hoodie1.jpg" alt="hoodie" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Hoodie</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>55$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/hoodie2.jpg" alt="hoodie" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Hoodie</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>39$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/jacket.jpg" alt="jacket" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Jacket</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>46$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/jacket2.jpg" alt="jacket" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Jacket</a></h3>
            </div>
    
            <div class="product">
                <!-- <div class="overlay">
                    <p>50$</p>
                </div> -->
                <a href="./product-detail.php" ><img src="./code/images/stores-image/nike-images/sweater.jpg" alt="sweater" width="200" height="200"></a>
                <h3><a href="./product-detail.php">Sweater</a></h3>
            </div>
        </div>
    </main>
    <div class="push"></div>
    <footer>
        <nav>
            <h3 class="left">All Rights Reserved. © 2021 RETAILEZ.</h3>
            <ul>
                <li><a href="./copyright.php">Copyright</a></li>
                <li><a href="./tos.php">ToS</a></li>
                <li><a href="./policy.php">Privacy Policy</a></li>
            </ul>
            <h3 class="right">Design by developer team</h3>
        </nav>
    </footer>
    <script src="./code/script/cookies.js" defer></script>
    <script src="./code/script/check_login.js" defer></script>
</body>
</html>