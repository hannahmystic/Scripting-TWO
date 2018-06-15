<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";

  if (!isset($_POST['search'])) {
    header("Location:index.php");
  }

  $searchTerm = $_POST['search'];

  $main = "main";
  $ingredients = "ingredients";
  $tags = "tags";
  $directions = "directions";

  $search_sql= "SELECT * FROM $main WHERE title LIKE '%$searchTerm%' OR subtitle LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%' ";
  $mainResults = mysqli_query($connection, $search_sql);
  $extra1q = "SELECT * FROM $ingredients WHERE ingredients LIKE '%$searchTerm%'";
  $extra2q = "SELECT * FROM $tags WHERE tag LIKE '%$searchTerm%'";
  $extra3q = "SELECT * FROM $directions WHERE direction LIKE '%$searchTerm%'";
  $extra1 = mysqli_query($connection, $extra1q);
  $extra2 = mysqli_query($connection, $extra2q);
  $extra3 = mysqli_query($connection, $extra3q);
  
  $allKeys = [];
  while($row = mysqli_fetch_assoc($mainResults)){
    array_push($allKeys, $row['id']);
  }
  while($row = mysqli_fetch_assoc($extra1)) {
    if (!in_array($row['foreignkey'], $allKeys)) {
      array_push($allKeys, $row['foreignkey']);
    }
  } 
  while($row = mysqli_fetch_assoc($extra2)) {
    if (!in_array($row['foreignkey'], $allKeys)) {
      array_push($allKeys, $row['foreignkey']);
    }
  } 
  while($row = mysqli_fetch_assoc($extra3)) {
    if (!in_array($row['foreignkey'], $allKeys)) {
      array_push($allKeys, $row['foreignkey']);
    }
  }  

  foreach($allKeys as $value){ $value+=2; }

  $numkeys = count($allKeys);
  $result = [];
  if($numkeys == 0){
    echo "Sorry! There were no results for $searchTerm. Try searching a different term.";
  }
  elseif($numkeys == 1){
    $result = "SELECT * FROM $main WHERE id=$allKeys[0]";
  }
  else{
    $result = "SELECT * FROM $main WHERE id=$allKeys[0]";
    for($i=1; $i<$numkeys; $i++ ){
      $result .= " OR id=$allKeys[$i]";
    }
  }
    //echo $result;
  $result = mysqli_query($connection, $result);
  if (!$result) {
    die("Search query failed."); 
  }

?>

<body>

<?php 

while($row=mysqli_fetch_assoc($result)){
?>
  <div class="item">
  <div class="itembg" style="background-image: url(assets/images/mainimages/<?php echo $row['recipe_img'] ?>.jpg)"></div>

    <div class="itemText">
        <a href="recipe.php?rec=<?php echo $row['id'] ?>">
            <h4><?php echo $row['title'] ?><h4>
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