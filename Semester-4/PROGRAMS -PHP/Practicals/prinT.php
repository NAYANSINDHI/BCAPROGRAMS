
<?php

if ($_get) 
{
    if (empty($_get['uname']) || empty($_get['date']) || empty('uemail')) {
        echo 'fill the filed';
    }
    echo "HELLO ". $_get['uname']. "<br>";
    echo "YOUER BIRTHDAY IS ". $_get['date'] . "<br>";
    echo "YOUER EMAIL IS " . $_get['uemail'] . "<br>";
    echo "YOUER CITY IS  " . $_get['city'] . "<br>";
}
?>