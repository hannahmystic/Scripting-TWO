<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";
  ?>

<body>

<?php

$table = "main";
$query = "SELECT * FROM $table";
$result = mysqli_query($connection, $query);


if (!$result) {
  die("Main database query failed.");
}



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
  // 1. $tagquery = "SELECT * FROM $tagtable WHERE 'tag' = '{$tag}'";
  // 2. $tagquery = "SELCET 'foreignkey' FROM $tagtable WHERE 'tag' = '{$tag}'";
  //    Note that in the above, the next while loop would be skipped. This would ideally make the array.
  // 3. 
  $tagquery = "SELECT * FROM $tagtable";
  // ???
  $tagresult = mysqli_query($connection, $tagquery);
  if (!$tagresult) {
    die("Tag database query failed."); 
  }

  // * * * *  NEW  * * * *
  $tagkeys = [];
  while($row = mysqli_fetch_assoc($tagresult))
  {
    if($row['tag'] == $tag){
      array_push($tagkeys, $row['foreignkey']);
    }
  }

  //$recipes = [];
  $recipeQuery = [];
  foreach( $tagkeys as $value){
  $recipeQuery += "SELECT 'title', 'subtitle', 'recipe_img' FROM $table WHERE 'id'='{$value}'";
  }
  $recipeResult = mysqli_query($connection, $recipeQuery);
  if (!$recipeResult) {
    die("Recipe query failed."); 
  }
  echo $recipeQuery;
  echo $recipeResult;
  echo "Hi hannah";



  while($row = mysqli_fetch_assoc($recipeQuery)) {
    ?>
      <div class="item">
        <div class="itembg" style="background-image: url(assets/images/mainimages/<?php echo $row['recipe_img'] ?>.jpg)"></div>
       
        <div class="itemText">
          <a href="recipe.php?rec=<?php echo $row['id'] ?>">
            <h4><?php echo $row['title'] ?></h4>
          <p><?php echo $row['subtitle'] ?></p>
        </div>
      </div>

    <?php 
  }
}
?>
    
  
  
</body>
  
  

<?php include "includes/_browseFooter.php";
mysqli_close($connection); ?>