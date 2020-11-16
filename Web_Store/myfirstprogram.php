<html>
<head>
  <title>Receipt</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
</body>

<?php
  echo "Thank-you for shopping ".$_POST["email"]."!<br>";
  echo "Here is your receipt:<br>";
  echo "<table border='1'><tbody>";  //open table
  echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
  echo "<tr><td>Chicken Wings</td><td>".$_POST["chicken"]."</td><td>$7.00</td><td>$".$_POST["chicken"]*7.00.".00</td>";
  echo "<tr><td>Chili Fries</td><td>".$_POST["fries"]."</td><td>$5.00</td><td>$".$_POST["fries"]*5.00.".00</td>";
  echo "<tr><td>Cheeseburger</td><td>".$_POST["cburger"]."</td><td>$6.00</td><td>$".$_POST["cburger"]*6.00.".00</td>";
  //the $_POST for shipping is set very specifically to use it as an index into a type array and a price array
  echo "<tr><td>Shipping</td><td colspan='2'>".['7-Day', '3-Day', 'Overnight'][$_POST["shipping"]]."</td><td>$".[0 ,5, 50][$_POST['shipping']].".00</td>";
  echo "<tr><td colspan='3'>Total Cost</td><td>$".($_POST["chicken"]*7+($_POST["fries"]*5)+($_POST["cburger"]*6)+[0, 5, 50][$_POST["shipping"]]).".00</td>";
  echo "</tbody></table>"; 
  echo "Password used: ".$_POST["password"].".<br>";
?>

</html>