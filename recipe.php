<?php
  include "includes/data.php";
  include "includes/_browseHeader.php";

    if (isset($_GET['rec'])) {
    $id = $_GET['rec']; }
    $safe_rec = mysqli_real_escape_string($connection, $rec);

$main = "main"; 
$mainquery= "SELECT * FROM {$main} WHERE 'id'={$rec}";
$mainresult = mysqli_query($connection, $mainquery);

if (!$mainresult) {
    die ("Database main query failed.");
}

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

    <?php
    }  
        $ing = "ingredients"; 
        $ingquery= "SELECT * FROM {$ing} WHERE 'foreignkey'={$rec}";
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
     
    $dir = "directions"; 
    $dirquery= "SELECT * FROM {$dir} WHERE 'foreignkey'{$rec}";
    $dirresult = mysqli_query($connection, $dirquery);
        
    if (!$dirresult) {
        die ("Database ingredients query failed.");
    }
?>

<div class="allSteps">

    <?php while ($row = mysqli_fetch_assoc($dirresult)){ ?>

        <div class="recStepBox">
            <img src="assets/images/ <?php echo $row['image2'] ?>" alt="step image">
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