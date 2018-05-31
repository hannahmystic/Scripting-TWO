
<!-- Copied and pasted directly from https://github.com/philsinatra/IDM232/blob/master/examples/05-mysql/databases_insert.php  -->
<?php
  // Step 1: Create Database Connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "Recipes";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  //QUESTION: Do I leave this as is, or am I supposed to make up my own username and password here?

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

  $query = "SELECT * FROM main";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed.");
    }



  if (!mysqli_set_charset($connection, "utf8")) {
    exit();
} 

mysqli_close($connection);
?>