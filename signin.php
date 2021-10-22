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
            var nameErr = "Name must be filled out \n";
            var emailErr = 'Not a valid email, it should has @ and dot. \n';
            var phoneErr = 'Telephone must be valid Malaysian number +60 XXX XXX XXXX.\n';
            var addressErr = "Address must be filled out. \n";
            var postcodeErr = "Postal code should be 5 numbers.\n";
            var cityErr = "City must be contains characters only.\n";
            var passErr = "The password is weak, it should contain characters, numbers and symbols.\n"
            var repassErr = "You didn't repeat the password correctly.";
            var Err = '';
            var x = document.getElementById('name').value;
            var emailExp = /^[\w\-\.\+]+\@[\w\-\.\+]+\.[\w\-\.\+]$/;
            var em = document.getElementById('email').value.toLowerCase();
            var phoneExp = /^\+60+[0-9]{9,10}$/;
            var ph = document.getElementById('phone');
            var postExp = /^[0-9]{5}$/;
            var postal = document.getElementById('postcode');
            var cityExp = /^[\w]{2}$/;
            var passExp = /^[\w][\-\.\+\@\$\%\^\&\*]{1}$/;
            if (em.match(emailExp)) {
                return true;
            } else {
                Err += emailErr;
            }

            if (x == "") {
                Err += nameErr;
            }

            if (ph.value.match(phoneExp)) {
                return true;
            } else {
                Err += phoneErr;
            }
            var x = document.getElementById('address').value;
            if (x == "") {
                Err += addressErr;
            }

            if (postal.value.match(postExp)) {
                return true;
            } else {
                Err += postcodeErr;
            }

            var x = document.getElementById('city').value;

            if (x.match(cityExp)) {
                return true;
            } else {
                Err += cityErr;
            }

            var x = document.getElementById('pass').value;
            var y = document.getElementById('repass').value;
            if (x.match(passExp)) {
                return true;
            } else {
                Err += passErr;
            }

            if (x.match(y) == false) {
                Err += repassErr;
            }
            if (Err.match('') == false) {
                alert(Err);
                window.history.back();
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
        <div id="main_content">4
            <div id="menu_tab">
                <div class="left_menu_corner"></div>
                <ul class="menu">
                    <li><a href="index.php" class="nav1"> Home</a></li>
                    <li class="divider"></li>
                    <li><a href="products.html" class="nav2">Products</a></li>
                    <li class="divider"></li>
                    <li><a href="favour.html" class="nav3">Favourites</a></li>
                    <li class="divider"></li>
                    <li><a href="signin.php" class="nav4">Sign in</a></li>
                    <li class="divider"></li>
                    <li><a href="shipping.php" class="nav5">Shipping</a></li>
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
                    <li class="odd"><a href="Iphone12.php">Electronic Devices</a></li>
                    <li class="even"><a href="accessories.html">Electronic Accessories</a></li>
                    <li class="odd"><a href="Dell_Desktop.php">Desktops</a></li>
                    <li class="even"><a href="laptops.html">Laptops &amp; Notebooks</a></li>
                </ul>
                <br>
                <div class="title_box">Special Products</div>
                <div class="border_box">
                    <div class="product_title"><a href="Asus%20Laptop.php">Asus TUF FX505GT-AB73</a></div>
                    <div class="product_img">
                        <a href="Asus%20Laptop.php"><img src="images/laptop.png" alt="" border="0" width="100" height="98" /></a>
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
                <div class="center_title_bar">Sign in</div>
                <div class="prod_box_big">
                    <div class="top_prod_box_big"></div>
                    <div class="center_prod_box_big">
                        <form name=signin action="myaccount.php" method="POST">
                            <div class="contact_form">
                                <div class="form_row">
                                    <label class="contact"><strong>Email</strong></label>
                                    <input type="text" id=em name=em class="contact_input">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Password</strong></label>
                                    <input type="password" id=pa name=pa class="contact_input">
                                </div>
                                <button type="submit" class="form_row">Login</button>
                                <br><br><br>
                                <strong style="color:red">Note: </strong> you can't go to any page until you log in and your email should be in small letters.
                            </div>
                            <div class="bottom_prod_box_big"></div>
                        </form>
                    </div>
                    <br>
                </div>

                <div class="center_title_bar">Sign up</div>
                <div class="prod_box_big">
                    <div class="top_prod_box_big"></div>
                    <div class="center_prod_box_big">
                        <form name="signup" action="signin.php" onsubmit="check();" method="POST">
                            <div class="contact_form">
                                <div class="form_row">
                                    <label class="contact"><strong>Email</strong></label>
                                    <input type="text" class="contact_input" name="email" id="email">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Name</strong></label>
                                    <input type="text" class="contact_input" name="name" id="name">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Phone</strong></label>
                                    <input type="text" class="contact_input" name="phone" id="phone">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Address</strong></label>
                                    <input class="contact_input" name="address" id="address">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>City</strong></label>
                                    <input type="text" class="contact_input" name="city" id="city">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Postal Code</strong></label>
                                    <input type="text" class="contact_input" name="postcode" id="postcode">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Password</strong></label>
                                    <input type="password" class="contact_input" name="pass" id="pass">
                                </div>
                                <div class="form_row">
                                    <label class="contact"><strong>Repeat password</strong></label>
                                    <input type="password" class="contact_input" name="repass" id="repass">
                                </div>
                                <button type="submit" class="form_row" onclick="check()">Register</button>
                                <br><br>
                            </div>
                    </div>
                    <div class="bottom_prod_box_big"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of center content -->
        <div class="right_content">
            <div class="shopping_cart">
                <div class="cart_title">Shopping cart</div>
                <div class="cart_details"> items <br />
                    <span class="border_cart"></span> Total: <span class="price">0$</span>
                </div>
                <div class="cart_icon">
                    <a href="shipping.php" title="header=[Checkout] body=[&nbsp;] fade=[on]" onclick="pay()"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a>
                </div>
            </div>
            <br>
            <div class="title_box">What's new</div>
            <div class="border_box">
                <div class="product_title"><a href="AppleWatch.php">Apple Watch Series 6 (GPS, 44mm) - Space Grey Aluminium Case with Black Sport Band</a></div>
                <div class="product_img">
                    <a href="AppleWatch.php"><img src="images/p2.gif" alt="" border="0" width="90" height="92" /></a>
                </div>
                <div class="prod_price"><span class="reduce">499$</span> <span class="price">449$</span></div>
            </div>
            <br>
            <div class="title_box">Manufacturers</div>
            <ul class="left_menu">
                <li class="odd"><a href="Samsung_S21.php">Samsung</a></li>
                <li class="even"><a href="Dell_Desktop.php">Dell</a></li>
                <li class="odd"><a href="Iphone12.php">Apple</a></li>
                <li class="even"><a href="Asus%20Laptop.php">Asus</a></li>
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
    <?php
    $conn = mysql_connect("localhost", "softtech", "111");
    if (!$conn) die("Error when connecting to MySQL: " . mysql_error());
    mysql_query("CREATE DATABASE ecommerce", $conn);
    $selected = mysql_select_db("ecommerce", $conn);
    if (!$selected) die("Cannot use database: " . mysql_error());
    $sql = "CREATE TABLE User
            (
            nam varchar(50),
            email varchar(50),
            phone varchar(8),
            addr varchar(50),
            city varchar(30),
            postcode varchar(5),
            pass varchar(50),
            primary key (nam),
            unique (email)
            )";
    mysql_query($sql, $conn);
    /*if (!mysql_query($sql, $conn))
        die('<br />Error creating table: ' . mysql_error());
*/
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $pass = $_POST['pass'];
        $sql = "insert into User(nam, email, phone, addr, city, postcode, pass) values('$name', '$email', '$phone','$address','$city', '$postcode','$pass')";
        $query = mysql_query($sql);
        if (!$query) die("SQL query error encountered: " . mysql_error());

        $sql = "CREATE TABLE Item (id varchar(10),  nam varchar(50), price double(10,2), img varchar(20), primary key (id),unique (nam))";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('1', 'Asus TUF FX505GT-AB73', 270.0, 'images/laptop.png')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('2', 'Apple Watch Series 6', 449.0, 'images/p2.gif')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('3', 'Dell OptiPlex 7450', 1399.0, 'images/Dell_Desktop.PNG')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('4', 'Apple iPhone 12 Pro', 899.0, 'images/p4.gif')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('5', 'Samsung Galaxy S21 5G', 720.0, 'images/p5.gif')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('6', 'iphone 12 pro back case', 20.0, 'images/case%201.jpeg')";
        mysql_query($sql, $conn);
        $sql = "insert into Item(id, nam, price, img) values('7', 'apple watch strap', 50.0, 'images/strap%200.jpeg')";
        mysql_query($sql, $conn);
    }
    ?>

</body>

</html>