<!-- rather than <a href="#" class="addtocart">add to cart</a> -->
<?php
$conn = mysql_connect("localhost", "softtech", "111");
if (!$conn) die("Error when connecting to MySQL: " . mysql_error());
$selected = mysql_select_db("ecommerce", $conn);
if (!$selected) die("Cannot use database: " . mysql_error());
session_start();


if (isset($_POST['addtocart']) || isset($_POST['removefromcart'])) {
    if (isset($_SESSION['quantity'])) {
        $sql = "SELECT * FROM Item where id ='1'";
        $result = mysql_query($sql);
        if (!$result) die("SQL query error encountered: " . mysql_error());
        if (mysql_num_rows($result) == 1) {
            $rows = mysql_fetch_array($result);
            $_SESSION['price'] = $rows['price'];
            $_SESSION['stableprice'] = $rows['price'];
            $_SESSION['id'] = '1';
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
<script>
    /*function pay(){
        
    }*/
</script>
<div class="shopping_cart">
    <div class="cart_title">Shopping cart</div>
    <div class="cart_details">
        <p style="display:inline" id="items"><?php if (isset($_SESSION['quantity'])) echo $_SESSION['quantity']; ?></p> items <br>
        <span class="border_cart"></span> Total: <span class="price">
            <p style="display:inline" id="price"><?php if (isset($_SESSION['price'])) echo $_SESSION['price']; ?></p>$
        </span>
    </div>
    <form method="post" action="#">
        <button class="addtocart" name="addtocart" type="submit">Add to cart</button>
        <button class="addtocart" type="submit" name="removefromcart">Remove</button>
    </form>
    <div class="cart_icon">
        <a href="pay.php" title="pay"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0"></a>
    </div>
</div>