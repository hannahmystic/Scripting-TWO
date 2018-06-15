<?php
  include "includes/data.php";
  include "includes/_recipeHeader.php";
  
/* Make sure recipe was called, get id.
    Recipes are called with their id number,
    in the form recipe.php?rec=# */
 if (isset($_GET['rec'])) {
    $id = $_GET['rec']; }
    $safe_rec = mysqli_real_escape_string($connection, $id);

/* Initializes main database*/
$main = "main"; 
$mainquery= "SELECT * FROM $main WHERE id=$id";
$mainresult = mysqli_query($connection, $mainquery);

if (!$mainresult) {
    die ("Database main query failed.");
}

/* Main database info used for recipe introduction */
while ($row = mysqli_fetch_assoc($mainresult)){
?>

<div class="recTitle">
    <div class="logo" id="logoRecPage">
        <img src="icons/logo.png" alt="logo">
    </div>
    <h1 id="recTitle"> <?php echo $row['title'] ?> </h1>
    <h2 id="recSubtitle"><?php echo $row['subtitle'] ?></h2>
</div>

<div class="recIntro">

    <div class="recPicture">
        <img src="assets/images/mainimages/<?php echo $row['recipe_img'] ?>.jpg" alt="the food">
    </div>

    <!-- Initializes ingredients database-->
    <?php
    }  
        $ing = "ingredients"; 
        $ingquery= "SELECT * FROM $ing WHERE foreignkey=$id";
        $ingresult = mysqli_query($connection, $ingquery);
        
        if (!$ingresult) {
            die ("Database ingredients query failed.");
        }
    ?>

    <div class="ingredients">
        <div class="teal" id="ingTeal">
            <h2>Ingredients</h2>
        </div>
        <ul id="ingredientList">
            <!-- For each ingredient, make a <li>ingredient</li>-->
            <?php
            while ($row = mysqli_fetch_assoc($ingresult)){
            ?>
            <li> <?php echo $row['ingredients'] ?> </li>
            <?php } ?>
        </ul>
    </div>

</div>


<?php
    /* Initializes directions database */
    $dir = "directions"; 
    $dirquery= "SELECT * FROM $dir WHERE foreignkey=$id";
    $dirresult = mysqli_query($connection, $dirquery);
        
    if (!$dirresult) {
        die ("Database ingredients query failed.");
    }
?>

<!-- Makes a div for each step -->
<div class="allSteps">

    <?php while ($row = mysqli_fetch_assoc($dirresult)){ ?>

        <div class="recStepBox">
            <img src="assets/images/<?php echo $row['image2']?>.jpg" alt="step image">
            <div class="recStep">
                <p>
                    <?php echo $row['direction'] ?>
                </p>
            </div>
        </div> <!-- end of recStepBox -->

    <?php } ?>  <!-- end of while loop -->

</div> <!-- end of class allSteps -->

<?php include "includes/_recipeFooter.php";
mysqli_close($connection); ?>