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
//   $search_sql .= "SELECT * FROM $ingredients WHERE ingredients LIKE '%$searchTerm%'";
  $otherKeys = "SELECT * FROM $ingredients WHERE ingredients LIKE '%$searchTerm%'";
  $otherKeys .= "SELECT * FROM $tags WHERE tag LIKE '%$searchTerm%'";
  $otherKeys .= "SELECT * FROM $directions WHERE direction LIKE '%$searchTerm%'";

  while($row = mysqli_fetch_assoc($otherKeys)) {
    $num = $row['foreignkey'];
    $search_sql .= "SELECT * FROM $main WHERE id=$num";
  }  

  $search_query=mysql_query($search_sql);

  if( mysql_num_rows($search_query) !=0){
    $search_rs=mysql_fetch_assoc($search_query);
  }
//   else{
//     header("Location:noresults.html");
//   }
  ?>

<body>

<?php 
if(mysql_num_rows($search_query) !=0){
    while($search_rs=mysql_fetch_assoc($search_query)){
?>
        <div class="item">
            <div class="itembg" style="background-image: url(assets/images/mainimages/ <?php echo $row['recipe_img']?>.jpg)"</div>

            <div class="itemText">
                <a href="recipe.php?rec=<?php echo $row['id'] ?>">
                    <h4><?php echo $row['title'] ?><h4>
                </a>
                <p><?php echo $row['subtitle'] ?></p>
            </div>

        </div>

<?php
    }
}

else{ echo "No results found"; }
?>


</body>

<?php include "includes/_browseFooter.php";
mysqli_close($connection); ?>