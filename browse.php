<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";
  ?>

<body>

<?php

$table = "main";

if (!(isset($_GET['tag']))){

  $query = "SELECT * FROM $table";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Main database query failed.");
  }
}

else{
  $tag = $_GET['tag'];
  $safe_tag = mysqli_real_escape_string($connection, $tag);

  $tagtable = "tags";
  $tagquery = "SELECT * FROM $tagtable WHERE tag='{$tag}'";
  $tagresult = mysqli_query($connection, $tagquery);
  if (!$tagresult) {
    die("Tag database query failed."); 
  }

  // * * * *  NEW  * * * *
  $tagkeys = [];
  while($row = mysqli_fetch_assoc($tagresult))
  {
    array_push($tagkeys, $row['foreignkey']);
  }

  foreach($tagkeys as $value){ $value+=2; }
  $numkeys = count($tagkeys);
  $result = [];

  if($numkeys == 0){
    echo "Sorry! There were no results for $tag. Try searching a different term.";
  }
  else if($numkeys == 1){
    $result = "SELECT * FROM $table WHERE id=$tagkeys[0]";
  }
  else{
    $result = "SELECT * FROM $table WHERE id=$tagkeys[0]";
      for($i=1; $i<count($tagkeys); $i++ ){
        $result .= " OR id=$tagkeys[$i]";
      }
    }
  // echo $result;
  $result = mysqli_query($connection, $result);
  if (!$result) {
    die("Recipe query failed."); 
  }
  
}

?>



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