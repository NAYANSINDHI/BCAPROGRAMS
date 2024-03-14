<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fibonacci series</title>
</head>

<body>
    <h1> <?php
    echo "Fibonacci : ";
    function Fib($n){
        if($n==0)
            return 0;
        else if($n==1)
            return 1;
        else
            return (Fib($n-1)+Fib($n-2));
}
$num=10;
for($i=0;$i<$num;$i++){
    echo Fib($i). " ";
}
    ?></h1>

</body>

</html>