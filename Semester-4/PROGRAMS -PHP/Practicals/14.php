<?php
//Create directory
mkdir(PATH_TO_UPLOAD_DIRECTORY, 0755);

// Check to see if an upload button was clicked
if (isset($_POST['submit'])) {

  // Get the file name
  $file_name = $_FILES['file']['name'];

  // Get the file extension
  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

  // create a new file name by adding a timestamp
  $file_name_new = time() . "." . $file_ext;

  // Set the upload directory
  $upload_dest = PATH_TO_UPLOAD_DIRECTORY . $file_name_new;

  // Upload the file
  move_uploaded_file($_FILES['file']['tmp_name'], $upload_dest);
}
?>