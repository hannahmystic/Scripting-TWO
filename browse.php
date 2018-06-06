<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";
  ?>

<body>

<?php

$table = "main";
$query = "SELECT * FROM {$table}";
$result = mysqli_query($connection, $query);


if (!$result) {
  die("Database query failed.");
}
while($row = mysqli_fetch_assoc($result)) {

  ?>
  
      <div class="item">
        <div class="itembg" style="background-image: url(assets/images/mainimages/<?php echo $row['recipe_img'] ?>.jpg)"></div>
       
      <div class="itemText">
        <h4><?php echo $row['title'] ?></h4>
        <p><?php echo $row['subtitle'] ?></p>
      </div>
      </div>
    
  <?php } ?>
    
  
  
  </body>
  
  
  <?php include "includes/_browseFooter.php";
  mysqli_close($connection); ?>