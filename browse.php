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


// $tag = isset($_GET['tag']) ? $_GET['tag'] : null;

// while($row = mysqli_fetch_assoc($result)) {

if (!(isset($_GET['tag']))){
  while($row = mysqli_fetch_assoc($result)) {
  ?>

    <div class="item">
      <div class="itembg" style="background-image: url(assets/images/mainimages/<?php echo $row['recipe_img'] ?>.jpg)"></div>
       
      <div class="itemText">
        <a href="recipe.php?rec=<?php echo $row['id']?>">
          <h4><?php echo $row['title'] ?></h4>
        </a>
        <p><?php echo $row['subtitle'] ?></p>
      </div>
    </div>
    
  <?php
  }
}

else {
  $tag = $_GET['tag'];
  $safe_tag = mysqli_real_escape_string($connection, $tag);

  $tagtable = "tags";
  $tagquery = "SELECT * FROM {$tagtable} WHERE 'tag'= {$tag}";
  $tagresult = mysqli_query($connection, $tagquery);

  if (!$tagresult) {
    die("Database query failed."); 
  }

  while($row = mysqli_fetch_assoc($tagresult)) {
    $num = $row['foreignkey'];

    $title= mysql_query( "SELECT 'title' FROM $table WHERE 'id'={$num}");
    $subtitle= mysql_query( "SELECT 'subtitle' FROM $table WHERE 'id'={$num}");
    $image= mysql_query( "SELECT 'recipe_img' FROM $table WHERE 'id'={$num}");
    ?>

      <div class="item">
        <div class="itembg" style="background-image: url(assets/images/mainimages/<?php echo $image ?>.jpg)"></div>
       
        <div class="itemText">
          <a href="recipe.php?rec=<?php echo $num ?>">
            <h4><?php echo $title ?></h4>
          <p><?php echo $subtitle ?></p>
        </div>
      </div>

    <?php 
  }
}
?>
    
  
  
</body>
  
  

<?php include "includes/_browseFooter.php";
mysqli_close($connection); ?>