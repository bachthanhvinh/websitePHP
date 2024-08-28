<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label >Nhap:</label> <br>
        <input type="text" name="date" id=""><br>
        <input type="submit" value="submit"><br><br>
    </form>
</body>
</html>
<?php
// bài 6
$date = $_POST['date'];
switch($date){
 case 0 : echo"Thứ 2 <br><br>";break;
 case 1 : echo"Thứ 3 <br><br>";break;
 case 2 : echo"Thứ 4 <br><br>";break;
 case 3 : echo"Thứ 5 <br><br>";break;
 case 4 : echo"Thứ 6 <br><br>";break;
 case 5 : echo"Thứ 7 <br><br>";break;
 case 6 : echo"Thứ 8 <br><br>";break;
 default:
 echo"Không hợp lệ <br><br>";
}


// bài 1
  $a = 5;
  $b = 6;
  $total = null;

  if($a === $b){
       $total = ($a + $b )* 3 ;
  echo" 2 số bằng nhau: $total";

  }else {
      $total = ($a + $b);
  echo "2 số khác nhau:  $total <br><br>";

  }
// bài 2
echo"Parity check <br>";
   $c = 5;
   
   if($c % 2 === 0){
    echo "Số chẵn <br>";
   }else {
    echo "số lẻ <br><br>";
   }
// bài 3
  echo'add, subtract, multiply, divide, modulo division <br>';
   $d = 3;
   $e = 5;
   $total = null;
   $total = $d + $e ;
   echo"( $d + $e) = $total <br>";
   $total = $d - $e ;
   echo"( $d - $e) = $total <br> ";
   $total = $d * $e ;
   echo"( $d * $e) = $total <br>";
   $total = $d / $e ;
   echo"( $d / $e) = $total <br>";
   $total = $d % $e ;
   echo"( $d % $e) = $total <br><br>";
// bài 4
  echo'calculate equal <br>';
   $quantity = 500;
   $price = 160000;
   $VAT = 0.05;
   
   $total = $quantity * $price;
   echo" total: $total <br>";
   $total = $quantity * $price * $VAT;
   echo" total VAT: $total <br><br>";
//bài 5
  echo"tính tiền điện <br>";
    $electricity = 200;
    $money = null;
   if($electricity >= 101 || $electricity < 200){
         $money = 600;
   }else if($electricity >= 201 || $electricity < 300){
    $money = 750;
   }else if($electricity >= 301 || $electricity < 500){
    $money = 900;
   }else if($electricity >= 501 || $electricity < 1000){
    $money = 1000;
   }else if($electricity > 1000 ){
    $money = 1200;
   }
   $total = $electricity * $money;
   echo "total: $total <br>";
   $total = $electricity * $money * 0.1;
   echo "total VAT: $total <br>";

 ?>