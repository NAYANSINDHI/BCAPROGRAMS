<?php

//To create a file
$file = fopen("file.txt","w");

//To write content in the file
fwrite($file,"Hello World");

//To close the file
fclose($file);

//To delete a file
if (file_exists("file.txt")) {
  unlink("file.txt");
}

//To copy a file
$file1 = "file.txt";
$file2 = "copy.txt";

copy($file1, $file2);

?>