<html lang="en">
<head>
    <title>login from</title>
</head>
<body>
    <form action="" method="get">
        NAME :
        <input type="text" name="name" id="name">
        <br>
        EMAIL :
        <input type="EMAIL" name="email" id="EMAIL">
        <br>
        PASSWORD :
        <input type="password" name="pass" id="pass">
        <!-- <input type="submit" value="sub"> -->
        <button type="submit" name="sub">submit</button>
    </form>
    <br>
    <br>
</body>
</html>

<?php
if ($_get) 
{
    echo "HELLO ". $_get['name']. "<br>";
    // echo "YOUER NAME IS ". $_get['name'] . "<br>";
    echo "YOUER EMAIL IS " . $_get['email'] . "<br>";
    echo "YOUER PASSWORD IS  " . $_get['pass'] . "<br>";
}
?>