<!DOCTYPE html>
<html>
    <head>
        <style>
            body
            {
                background: lightblue;
                width: 800px;
                height: 800px;
            }
        </style>    

    </head> 

    <body>

        <?php

            $itemPrice1 = 799;
            $itemPrice2 = 899;
            $itemPrice3 = 999;
            $itemPrice4 = 1099;

            $product1 = $_POST["product1"];
            $product2 = $_POST["product2"];
            $product3 = $_POST["product3"];
            $product4 = $_POST["product4"];

            $prices = [$itemPrice1 * $product1, $itemPrice2 * $product2, $itemPrice4 * $product4, $itemPrice4 * $product4];

            $shippingCost = $_POST["shipping"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $total = $prices[0] + $prices[1] + $prices[2] + $prices[3] + $shippingCost;

            if(isset($_POST["submit"]) && $valMessage == $_POST["validationMessage"])
            {
               echo "<html>";
                echo "<head>";
                echo "<title>Receipt</title>";
                echo "<h3>Receipt</h3>";
                echo "<h>Hello " .$username . "! Your password is: " .$password . " and your receipt is: </h> <br>";
                echo "</head>";
                
                echo "<body>";
                echo "<table align='center' border='1px' width='100%'>";
                echo "<tr><th>Item</th>";
                echo "<th>Quantity</th>";
                echo "<th>Cost Per Item ($)</th>";
                echo "<th>Subtotal ($)</th</tr>";
                
                echo "<tr><td>iPhone 14</td>";
                echo "<td>" .$product1 . "</td>";
                echo "<td>" .$itemPrice1 . "</td>";
                echo "<td>" .$prices[0] . "</td>";

                echo "<tr><td>iPhone 14 Plus</td>";
                echo "<td>" .$product2 . "</td>";
                echo "<td>" .$itemPrice2 . "</td>";
                echo "<td>" .$prices[1] . "</td>";

                echo "<tr><td>iPhone 14 Pro</td>";
                echo "<td>" .$product3 . "</td>";
                echo "<td>" .$itemPrice3 . "</td>";
                echo "<td>" .$prices[2] . "</td>";

                echo "<tr><td>iPhone 14 Pro Max</td>";
                echo "<td>" .$product4 . "</td>";
                echo "<td>" .$itemPrice4 . "</td>";
                echo "<td>" .$prices[3] . "</td>";

                echo "<tr><td>Shipping Cost ($)</td>";
                echo "<td></td><td></td>";
                echo "<td>" .$shippingCost . "</td></tr>";

                echo "<tr><td>Total Price ($)</td>";
                echo "<td></td><td></td>";
                echo "<td>" .$total . "</td></tr>";

                echo "</table>";
                echo "</body>";
                echo "</html>";

            }

        ?>

    </body>
</html>
