<?
$dbhost = "localhost";
$dbuser = "username";
$dbpass = "password";
$dbname = "database_name";

// Establish a connection to the database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Get variables from form submission
$id = $_POST['id'];
$status = $_POST['status'];

// Delete record query
$sql1="DELETE FROM table_name WHERE id='$id'";
if (mysqli_query($conn, $sql1)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// Update record query
$sql2="UPDATE table_name SET status='$status'
       WHERE id='$id'";
if (mysqli_query($conn, $sql2)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>