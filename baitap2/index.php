<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      border-collapse: collapse;
      margin: 20px;
      border: 1px solid black;
    }
    td {
           text-align: center;
            width: 50px;
            height: 50px;
            border: 2px double pink; /* Thêm viền đôi cho các ô */
        }
     .while{
     background-color: #fff;
     }
     .green{
      background-color: green;
     }
    .black{
     background-color: #000;
     
     }
  </style>
</head>
<body>
  <table border="2" >
    <tbody>
       <?php 
      for($i = 1 ; $i <= 8; $i++){ ?>
     <tr>
        <?php for($j = 1 ; $j <= 8 ; $j++) { 
          $class1 = ($i + $j) % 2 == 0 ? 'black' :'while';
             ?>
              <td class="<?php echo $class1; ?>"></td>
             
         <?php  } ?>
         </tr>
      
      <?php } ?>
    
    </tbody>
  </table>
  <table>
    <tbody>
    <?php 
     // Function to check if a number is prime
     function isPrime($number) {
         for ($i = 2; $i <= sqrt($number); $i ++) {
             if ($number % $i == 0) {
                 return 0;
             }
         }
         return  $number > 1 ;
     }

     // Loop to generate the grid
     for($i = 1; $i <= 10; $i++){
       echo "<tr>";
       for($j = 1; $j <= 10; $j++){
           $number1 = $i * 10 + $j - 10;
           // Check if the number is prime
           $choose = isPrime($number1) ? 'green' : 'white';
           ?>
           <td class="<?php echo $choose; ?>"><?php echo $number1; ?></td>
       <?php }  
       echo "</tr>";
     } 
    ?>
    </tbody>
</table>

</body>
</html>
<?php

echo "bài 1 ////////////////////////<br><br>";
  echo "<br><br> sử dụng for <br>";
   $n = 50;
   for($i= 1 ; $i <= $n;$i++){
       echo  "$i ,";
   }
   echo "<br><br>sử dụng  while <br>";
   $j = 0;
   while($j < 50){
     

        $j++ ;
        echo "$j , ";
   }
   echo " <br><br> bài 2 ///////////////////////////<br><br>";
 
   $numbers =  array(1,2,3,4,5,6);
   $count = 0;
   $plus = 0;
   $total = 0;
   foreach($numbers as $value){
    $max = max($numbers);
    $min = min($numbers);
    echo "$value  ";
    $count ++;
    $plus += $value;

   }

   echo"  <br>Max: $max";
   echo"  <br>Min: $min";
    $total  =  $plus / $count ;
   echo " <br><br> số lượng mảng: $count <br>";
   echo "tính trung bình cộng: $total " ;

   echo " <br><br> bài 3 //////////////////////<br><br>";
   $k = 0;
   $t = 0;
   while($k < 100){
    $k++;
    
    $t += $k;
   
   }
    echo "$t <br>";
    
   echo " <br><br> bài 3 tiếp//////////////////// <br><br>";

   $d = 20;
   $c = 0;
   while($d < 50){
    $d++;
    if($d %3 ==0){
        $c += $d;
    }
   
   
   }
    echo "$c <br>";
    
   echo " <br><br> bài 4/////////////// <br><br>";
   
   $a =100;
   $c = 1;
   $b = 0;
   for( $l=1 ; $l <= $a; $l++){
       $b += $l;
       $c *= $l;
       
       if($l === 50){
        break;
       }
   }
   
   echo" $b <br>";
   echo $c;

   echo " <br><br>////////////////////// bài 5/////////////// <br><br>";
  
  function getemail($email){

  $length = strlen('rayy@example.com') ;
   $result = '';
   for($i = 0; $i <= $length ;$i++){
       
    //  echo $i;
    if($email[$i] === '@'){
        break;
      }
      $result .= $email[$i];
     
    }
     return $result;

  }
  $email = 'rayy@example.com';
  $result = getemail($email);
  echo $result;
  echo " <br><br>////////////////////// bài 6/////////////// <br><br>";
  
  function generateString($n){
    $rl = '';
     for($i = 1 ;$i <= $n ;$i ++){
    if($i > 1){
      $rl .= " - ";
    }
    $rl .= $i;
      
  }
  return $rl;

  
   }
   echo generateString($n);
  
?>
     
