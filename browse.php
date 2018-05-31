<?php
  include "includes/functions.php";
  include "includes/_browseHeader.php";
?>

<!-- While loop te get each row at a time  -->
<body>
  <?php
    while($row = mysqli_fetch_row($result)) {
      var_dump($row);
      echo "<hr>";
    }
  ?>
</body>


<?php include "includes/_browseFooter.php"; ?>