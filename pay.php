<?php
session_start();
$conn = mysql_connect("localhost", "softtech", "111");
if (!$conn) die("Error when connecting to MySQL: " . mysql_error());
$selected = mysql_select_db("ecommerce", $conn);
if (!$selected) die("Cannot use database: " . mysql_error());

/*
if (isset($_POST["checkout"])) {
    session_start();
} else {
    echo "<script>window.history.back();</script>";
}*/
?>
<!DOCTYPE html>
<html lang=en xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Soft-Tech Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
    <script type="text/javascript" src="js/boxOver.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
    <script>
        function check() {
            var Err = "";
            var cardNumberErr = "Card number must be filled out with 16 number. \n";
            var nameErr = "Name must be filled out with letters only. \n";
            var cvvErr = "CVV number must be filled out with 3 numbers only. \n";
            var nameExp = /^[\w]$/;
            var cardExp = /^[0-9]{16}$/;
            var cvvExp = /^[0-9]{3}$/;
            var x = document.getElementById('cardnumber').value;
            var y = document.getElementById('cardname').value;
            var z = document.getElementById('cvv').value;
            if (x.match(cardExp) == false || x == "") {
                Err += cardNumberErr;
            }
            if (y.match(nameExp) == false || y == "") {
                Err += nameErr;
            }
            if (z.match(cvvExp) == false || z == "") {
                Err += cvvErr;
            }
            if (Err.match('') == false) {
                alert(Err);
                window.location.replace("pay.php");
                return false;
            }
        }
    </script>
</head>

<body>

    <div id="main_container">
        <div class="top_bar">
            <div class="top_search">
                <div class="search_text"><a href="#">Advanced Search</a></div>
                <input type="text" class="search_input" name="search" />
                <input type="image" src="images/search.gif" class="search_bt" />
            </div>
            <div class="languages">
                <div class="lang_text">Languages:</div>
                <a href="#" class="lang"><img src="images/en.gif" alt="" border="0" /></a>
                <a href="#" class="lang"><img src="images/de.gif" alt="" border="0" /></a>
            </div>
        </div>
        <div id="header">
            <div id="logo" style="padding-left: 30%;">
                <a href="#"><img src="images/logo.png" alt="" border="0" width="60%" height="140" /></a>
            </div>
            <!-- end of oferte_content-->
        </div>
        <div id="main_content">
            <div id="menu_tab">
                <div class="left_menu_corner"></div>
                <ul class="menu">
                    <li><a href="#" class="nav1"> Home</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="nav2">Products</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="nav3">Favourites</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="nav4">Sign in</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="nav5">Shipping</a></li>
                    <li class="divider"></li>
                    <li><a href="contact.html" class="nav6">Contact Us</a></li>
                    <li class="divider"></li>
                    <li class="currencies">Currencies
                        <select>
                            <option>USD</option>
                            <option>Euro</option>
                        </select>
                    </li>
                </ul>
                <div class="right_menu_corner"></div>
            </div>
            <!-- end of menu tab -->

            <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
            <br>
            <div class="left_content">
                <div class="title_box">Categories</div>
                <ul class="left_menu">
                    <li class="odd"><a href="#">Electronic Devices</a></li>
                    <li class="even"><a href="#">Electronic Accessories</a></li>
                    <li class="odd"><a href="#">Desktops</a></li>
                    <li class="even"><a href="#">Laptops &amp; Notebooks</a></li>
                </ul>
                <br>
                <div class="title_box">Special Products</div>
                <div class="border_box">
                    <div class="product_title"><a href="#">Asus TUF FX505GT-AB73</a></div>
                    <div class="product_img">
                        <a href="#"><img src="images/laptop.png" alt="" border="0" width="100" height="98" /></a>
                    </div>
                    <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                </div>
                <br>
                <div class="title_box">Newsletter</div>
                <div class="border_box">
                    <input type="text" name="newsletter" class="newsletter_input" value="your email" />
                    <a href="#" class="join">join</a>
                </div>
                <div class="banner_adds">
                    <a href="#"><img src="images/bann2.jpg" alt="" border="0" width="190" height="280" /></a>
                </div>
            </div>
            <!-- end of left content -->
            <div class="center_content">
                <div class="center_title_bar">Pay</div>
                <div class="prod_box_big">
                    <div class="top_prod_box_big"></div>
                    <div class="center_prod_box_big">
                        <form name=signin action="shipping.php" method="POST">
                            <div class="contact_form">
                                <div class="form_row">
                                    <label class="contact"><strong>Card Type</strong></label>
                                    <select id="mySelect">
                                        <option value="ae">American Express
                                        <option value="visa">Visa
                                        <option value="master">Master Card
                                    </select>
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Card Number</strong></label>
                                    <input type="text" id=cardnumber name=cardnumber class="contact_input">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Name On The Card</strong></label>
                                    <input type="text" id=cardname name=cardname class="contact_input">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>CVV</strong></label>
                                    <input type="password" id=cvv name=cvv class="contact_input">
                                </div>
                                <button type="submit" class="form_row" onclick="check()">Pay</button>
                                <br><br><br>
                            </div>
                            <div class="bottom_prod_box_big"></div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- end of center content -->
        <div class="right_content">
            <div class="shopping_cart">
                <div class="cart_title">Shopping cart</div>
                <div class="cart_details">
                    <p style="display:inline" id="items"><?php if (isset($_SESSION['quantity'])) echo $_SESSION['quantity']; ?></p> items <br>
                    <span class="border_cart"></span> Total: <span class="price">
                        <p style="display:inline" id="price"><?php if (isset($_SESSION['price'])) echo $_SESSION['price']; ?></p>$
                    </span>
                </div>
                <div class="cart_icon">
                    <a href="pay.php" title="header=[Checkout] body=[&nbsp;] fade=[on]" onclick="pay()"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a>
                </div>
            </div>
            <br>
            <div class="title_box">What's new</div>
            <div class="border_box">
                <div class="product_title"><a href="AppleWatch.html">Apple Watch Series 6 (GPS, 44mm) - Space Grey Aluminium Case with Black Sport Band</a></div>
                <div class="product_img">
                    <a href="AppleWatch.html"><img src="images/p2.gif" alt="" border="0" width="90" height="92" /></a>
                </div>
                <div class="prod_price"><span class="reduce">499$</span> <span class="price">449$</span></div>
            </div>
            <br>
            <div class="title_box">Manufacturers</div>
            <ul class="left_menu">
                <li class="odd"><a href="#">Samsung</a></li>
                <li class="even"><a href="#">Dell</a></li>
                <li class="odd"><a href="#">Apple</a></li>
                <li class="even"><a href="#">Asus</a></li>
                <li class="odd"><a href="#">LG</a></li>
                <li class="even"><a href="#">Huawei</a></li>
                <li class="odd"><a href="#">HP</a></li>
                <li class="even"><a href="#">Acer</a></li>
            </ul>
            <br>
            <div class="banner_adds">
                <a href="#"><img src="images/bann1.jpg" alt="" border="0" width="190" height="280" /></a>
            </div>
        </div>
        <!-- end of right content -->
    </div>
    <br>
    <!-- end of main content -->
    <div class="footer">
        <div class="left_footer"> <img src="images/footer_logo.png" alt="" width="180" height="110" /> </div>
        <div class="center_footer"> Soft-Tech Group. All Rights Reserved 2021<br />

            <img src="images/payment.gif" alt="" />
        </div>
        <div class="right_footer"> <a href="#">home</a> <a href="#">about</a> <a href="#">sitemap</a> <a href="#">rss</a> <a href="contact.html">contact us</a> </div>
    </div>
    </div>
    <!-- end of main_container -->


</body>

</html>