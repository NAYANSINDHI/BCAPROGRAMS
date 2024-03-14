
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">NAME:</label>
        <input type="text" name="sname" id="sname">
        <br>
        <label for="">sid:</label>
        <input type="text" name="snumber" id="snumber">
        <br>
        <label for="">OOPL'C++</label>
        <input type="number" name="sub1" id="sub1">
        <br>
        <label for="">Building Application using PHP:</label>
        <input type="number" name="sub2" id="sub2">
        <br>
        <label for="">Electronic commerce:</label>
        <input type="number" name="sub3" id="sub3">
        <br>
        <label for="">Data Mining & Data warehousing:</label>
        <input type="number" name="sub4" id="sub4">
        <br>
        <label for="">OOPL'C++ practical:</label>
        <input type="number" name="sub5" id="sub5">
        <br>
        <label for="">Building Application using PHP practical :</label>
        <input type="number" name="sub6" id="sub6">
        <br>
        <input type="submit" value="submit">
        
    </form>
</body>
</html>
<?php
if($_)
{
    $name=$_['sname'];
    $sid=$_['snumber'];
    $s1=$_['sub1'];
    $s2=$_['sub2'];
    $s3=$_['sub3'];
    $s4=$_['sub4'];
    $s5=$_['sub5'];
    $s6=$_['sub6'];
      
    echo "<br> <br>";
    echo "Name: $name <br>";
    echo "SID: $sid <br><br><br>";
    echo "OOPL'C++ - $s1/100 <br>";
    echo "Building Application using PHP - $s2/100 <br>";
    echo "Electronic commerce - $s3/100 <br>";
    echo "Data Mining & Data warehousing - $s4/100 <br>";
    echo "OOPL'C++ practical - $s5/100 <br>";
    echo "Building Application using PHP practical - $s6/100 <br><br><br>";



 $total=$s1+$s2+$s3+$s4+$s5+$s6;

if ($total<600) {
echo "error";
}else{
 echo "Total Marks :- $total <br>";

 $percentage=($total/600)*100;
 echo "percentage :- $percentage<br>";
 
  //Grade switch statement
  switch(true) {
    case ($percentage >= 90&&$percentage<=100): $output = "A"; break;
    case ($percentage >= 80&&$percentage<=89): $output = "B"; break;
    case ($percentage >= 70&&$percentage<=79): $output = "C"; break;
    case ($percentage >= 60&&$percentage<=69): $output = "D"; break;
    case ($percentage >= 50&&$percentage<=35): $output = "E"; break;
    default: $output = "F"; break;
  }
  echo $output;
}
}
?>
  