<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  
 <!-- login -->

    <!-- <form action="index.php" method='post' >
      <label for="">username: </label><br>
      <input type="text" name="username"><br><br>

      <label >password:</label><br>
      <input type="password" name="password"> <br><br>
       <input type="submit" value="log in"><br><br>
    </form> -->

    <form action="index.php" method="post">
      <label>quantity: </label><br>
      <input type="text" name="quantity" id="">
       <input type="submit" value="total">
    </form>

</body>
</html>
<?php
/////////quantity//////////
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo"You have ordered {$quantity} x {$item}/s <br>";
echo"your total is: \${$total}";

/////////login//////////
  // echo' username: ', $_POST['username'] , '<br>';
  
  // echo 'password: ' .$_POST['password'];


  ///////////echo/////////////
  // echo"I like Chicken <br>";
 
  // echo"Hello world <br>";
  // $name = 'vinh <br>';
  // $food = "chicken";
  // $email = "fake123@gmail.com";

  // $age = 21;
  // $users =2;
  // $quantity  = 3;

  // $gpa = 2.5;
  // $price = 89.9;
  // $tax_rate = 5.1;

  // $employed = true;
  // $online = false;
  // $for_sale = true;

  // $total = null;

  //  echo"You have ordered {$quantity} x {$food}s <br>";
  //  $total = $quantity * $price ;
  //   echo" Your total is: \${$total}";
?> 
