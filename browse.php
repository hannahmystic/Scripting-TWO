<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";
  ?>

<body>

<?php

$table = "main";

/* Setup for general browse page (no tag filter) */
if (!(isset($_GET['tag']))){

  $query = "SELECT * FROM $table";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Main database query failed.");
  }
}

/* Setup for browse page filtered by tag */
else{
  $tag = $_GET['tag'];
  $safe_tag = mysqli_real_escape_string($connection, $tag);

  /* Get the id of each tag that matches*/
  $tagtable = "tags";
  $tagquery = "SELECT * FROM $tagtable WHERE tag='{$tag}'";
  $tagresult = mysqli_query($connection, $tagquery);
  if (!$tagresult) {
    die("Tag database query failed."); 
  }

  // * * * *  NEW  * * * *
  /* Put all the id's of corresponding recipes in an array */
  $tagkeys = [];
  while($row = mysqli_fetch_assoc($tagresult))
  {
    array_push($tagkeys, $row['foreignkey']);
  }

   /* Controls for the issue that each recipe's id was shifted by two (recipe 1 became recipe 3, etc. */
  foreach($tagkeys as $value){ $value+=2; }
  $numkeys = count($tagkeys);
  $result = [];

  if($numkeys == 0){
    echo "Sorry! There were no results for $tag. Try searching a different term.";
  }
  elseif($numkeys == 1){
    $result = "SELECT * FROM $table WHERE id=$tagkeys[0]";
  }
  else{
    $result = "SELECT * FROM $table WHERE id=$tagkeys[0]";
      for($i=1; $i<count($tagkeys); $i++ ){
        $result .= " OR id=$tagkeys[$i]";
      }
      /* returns a result that ends in "WHERE id=1 OR id=2 OR id=3" etc. */
    }
  // echo $result;
  $result = mysqli_query($connection, $result);
  if (!$result) {
    die("Recipe query failed."); 
  }
  
}

?>


<!-- Builds the page with the selected recipes-->
<?php
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
?>
    
  
  
</body>
  
  

<?php include "includes/_browseFooter.php";
mysqli_close($connection); ?>