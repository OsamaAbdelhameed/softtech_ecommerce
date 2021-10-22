<?php
$conn = mysql_connect("localhost", "softtech", "111");
if (!$conn) die("Error when connecting to MySQL: " . mysql_error());
$selected = mysql_select_db("ecommerce", $conn);
if (!$selected) die("Cannot use database: " . mysql_error());
session_start();


if (isset($_POST['addtocart']) || isset($_POST['removefromcart'])) {
  if (isset($_SESSION['quantity'])) {
    $sql = "SELECT * FROM Item where id ='3'";
    $result = mysql_query($sql);
    if (!$result) die("SQL query error encountered: " . mysql_error());
    if (mysql_num_rows($result) == 1) {
      $rows = mysql_fetch_array($result);
      $_SESSION['price'] = $rows['price'];
      $_SESSION['stableprice'] = $rows['price'];
      $_SESSION['id'] = '3';
      $_SESSION['name'] = $rows['nam'];
      if (isset($_POST['addtocart'])) {
        $_SESSION['quantity']++;
        $_SESSION['price'] = $_SESSION['quantity'] * $rows['price'];
      }
      if (isset($_POST['removefromcart']) && $_SESSION['quantity'] > 0) {
        $_SESSION['quantity']--;
        $_SESSION['price'] = $_SESSION['quantity'] * $rows['price'];
      }
    }
  } else $_SESSION['quantity'] = 0;
  if (!isset($_SESSION['price'])) {
    $_SESSION['price'] = 0;
  }
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>
    Dell OptiPlex details</title>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
  <script type="text/javascript" src="js/windowopen.js"></script>
  <script type="text/javascript" src="js/boxOver.js"></script>
  <link rel="shortcut icon" href="images/icon.png">
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
        <a href="#" class="lang"><img src="images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img src="images/de.gif" alt="" border="0" /></a>
      </div>
    </div>
    <div id="header">
      <div id="logo"> <a href="#"><img src="images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
      <div class="oferte_content">
        <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
        <div class="oferta">
          <!--Main image of the product-->
          <div class="oferta_content"> <img src="images/Dell_Desktop.PNG" alt="" border="0" width="90" height="92" class="oferta_img" />
            <div class="oferta_details">
              <div class="oferta_title">
                Dell OptiPlex 7450 All In One Desktop Computer</div>
              <div class="oferta_text">
                Dell OptiPlex 7450 All In One Desktop Computer, Intel Core i5-7500, 8GB DDR4, 1TB SATA Drive, Windows 10 Pro, CPU Speed : 3.20 GHz, Graphics Card Capacity : Shared - Built in. </div>
              <a href="Dell_Desktop.html" class="details"> &nbsp Refresh</a>
            </div>
          </div>
          <div class="oferta_pagination"> <a href="Dell_Desktop.html"><span class="current">1</span></a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
        </div>
        <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      </div>
      <!-- end of oferte_content-->
    </div>
    <div id="main_content">
      <div id="menu_tab">
        <div class="left_menu_corner"></div>
        <ul class="menu">
          <li><a href="index.html" class="nav1"> Home</a></li>
          <li class="divider"></li>
          <li><a href="products.html" class="nav2">Products</a></li>
          <li class="divider"></li>
          <li><a href="favour.html" class="nav3">Favourites</a></li>
          <li class="divider"></li>
          <li><a href="account.html" class="nav4">My account</a></li>
          <li class="divider"></li>
          <li><a href="shipping.html" class="nav5">Shipping</a></li>
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
      <!-- nav -->
      <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Desktops &lt; Dell OptiPlex 7450 All In One Desktop Computer.</span> </div>
      <div class="left_content">
        <div class="title_box">Categories</div>
        <ul class="left_menu">
          <li class="odd"><a href="Iphone12.php">Electronic Devices</a></li>
          <li class="even"><a href="accessories.html">Electronic Accessories</a></li>
          <li class="odd"><a href="desktops.html">Desktops</a></li>
          <li class="even"><a href="laptops.html">Laptops &amp; Notebooks</a></li>
        </ul>
        <div class="title_box">Special Products</div>
        <div class="border_box">
          <div class="product_title"><a href="Asus%20Laptop.html">Asus TUF FX505GT-AB73</a></div>
          <div class="product_img"><a href="Asus%20Laptop.html"><img src="images/laptop.png" alt="" border="0" width="100" height="98" /></a></div>
          <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="title_box">Newsletter</div>
        <div class="border_box">
          <input type="text" name="newsletter" class="newsletter_input" value="your email" />
          <a href="#" class="join">join</a>
        </div>
        <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" width="190" height="280" /></a> </div>
      </div>
      <!-- end of left content -->
      <div class="center_content">
        <div class="center_title_bar">Dell OptiPlex 7450 All In One Desktop Computer, Intel Core i5-7500, 8GB DDR4, 1TB SATA Drive, Windows 10 Pro</div>
        <div class="prod_box_big">
          <div class="top_prod_box_big"></div>
          <div class="center_prod_box_big">
            <!-- Big Pic-->
            <div class="product_img_big"> <a href="javascript:popImage('images/Dell_Desktop.png','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="images/Dell_Desktop.PNG" alt="" border="0" width="100" height="92" /></a>
              <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="images/dell1.PNG" alt="" border="0" width="30" height="30" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="images/dell2.PNG" alt="" border="0" width="30" height="30" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="images/dell3a.PNG" alt="" border="0" width="30" height="30" /></a> </div>
            </div>
            <div class="details_big_box">
              <div class="product_title_big">Dell OptiPlex 7450 All In One Desktop Computer, Intel Core i5-7500, 8GB DDR4, 1TB SATA Drive, Windows 10 Pro</div>
              <div class="specifications"> Availability: <span class="blue">In stock</span><br />
                Warrenty: <span class="blue">12 months</span><br />
                Type: <span class="blue">All In One Computer</span><br />
                includes <span class="blue">Display, Desktop, Windows 10, Mouse, Keyboard. </span><br />
              </div>
              <div class="prod_price_big"><span class="reduce">1599$</span> <span class="price">1399$</span></div>
              <a href="#" class="addtocart">add to cart</a>
            </div>
          </div>
          <div class="bottom_prod_box_big"></div>
        </div>
        <div class="center_title_bar">Similar products</div>
        <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="Asus%20Laptop.html">Asus TUF FX505GT-AB73</a></div>
            <div class="product_img"><a href="Asus%20Laptop.html"><img src="images/laptop.gif" alt="" border="0" width="100" height="98" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
          </div>
          <div class="bottom_prod_box"></div>
          <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="Asus%20Laptop.html" class="prod_details">details</a> </div>
        </div>
        <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="Iphone12.html">Apple iPhone 12 Pro (128GB) - Pacific Blue</a></div>
            <div class="product_img"><a href="Iphone12.html"><img src="images/p4.gif" alt="" border="0" width="72" height="92" /></a></div>
            <div class="prod_price"><span class="price">899$</span></div>
          </div>
          <div class="bottom_prod_box"></div>
          <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="Iphone12.html" class="prod_details">details</a> </div>
        </div>
        <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="Samsung_S21.html">Samsung Galaxy S21 5G</a></div>
            <div class="product_img"><a href="Samsung_S21.html"><img src="images/p5.gif" alt="" border="0" width="90" height="92" /></a></div>
            <div class="prod_price"><span class="reduce">810$</span> <span class="price">720$</span></div>
          </div>
          <div class="bottom_prod_box"></div>
          <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="Samsung_S21.html" class="prod_details">details</a> </div>
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
            <a href="pay.php" title="pay"><img src="images/shoppingcart.png" alt="" width="30" height="30" border="0"></a>
          </div>
          <form method="post" action="#">
            <button class="addtocart" name="addtocart" type="submit">Add to cart</button>
            <button class="addtocart" type="submit" name="removefromcart">Remove</button>
          </form>

        </div>
        <div class="title_box">What's new</div>
        <div class="border_box">
          <div class="product_title"><a href="AppleWatch.html">Apple Watch Series 6 (GPS, 44mm) - Space Grey Aluminium Case with Black Sport Band</a></div>
          <div class="product_img"><a href="AppleWatch.html"><img src="images/p2.gif" alt="" border="0" width="90" height="92" /></a></div>
          <div class="prod_price"><span class="reduce">499$</span> <span class="price">449$</span></div>
        </div>
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
        <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" border="0" width="190" height="280" /></a> </div>
      </div>
      <!-- end of right content -->
    </div>
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