<!DOCTYPE html>
<html lang="en">

<head>
	<title>Recipe Hop - Home</title>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    
    <meta name="viewport"
    content="width=device-width, 
    initial-scale=1.0">
</head>



<!--________________________________
   |                                |
   |        MOBILE HOME PAGE        |  
   |________________________________|-->
<body>

    <div id="mobile">
        <header>
            <div class="menu">
                <div class="hamburgermenu">
                    <img src="icons/hamMenu-01.svg" alt="menu">
                </div>
                <div class="recipehop">
                    <h1>Recipe Hop</h1>
                </div>
            </div>
        </header>

        <div class="container">
            
            <div class="prev">
                <img src="tempImages/breakfast.png" alt="breakfast recipes">
                <div class="prevLabel">
                    <h2>Breakfast</h2>
                </div>
            </div>

            <div class="prev">
                <img src="tempImages/savory.png" alt="savory recipes">
                <div class="prevLabel">
                    <h2>Savory</h2>
                </div>
            </div>

            <div class="prev">
                <img src="tempImages/veg.png" alt="vegitarian recipes">
                <div class="prevLabel">
                    <h2>Vegitarian</h2>
                </div>
            </div>

            <div class="prev">
                <img src="tempImages/dessert.png" alt="dessert recipes">
                <div class="prevLabel">
                    <h2>Dessert</h2>
                </div>
            </div>

        </div>

        <div class="browse">
            <a href="browse.php">
            <h3>Browse by Catagory</h3>
            </a>
        </div>

        <div class="homeSearch">
         <form name="searchForm" method="POST" action="search.php">
                <div class="search">
                    <label for="search"> </label>
                    <input type="text" id="search" name="search" placeholder="Search recipes">
                    <input type="submit" name="submit" value="Go!">
                </div>
            </form>
        </div>

    </div>


<!--________________________________
   |                                |
   |   TABLET & DESKTOP HOME PAGE   |  
   |________________________________|-->

    <div id="bigger">
        <header id="tabHeader">
            <img src="icons/banner2.png" alt="banner">
            <div id="h1tab">
                <h1>RECIPE HOP</h1>
            </div>
        </header>

        <header class="deskHeader">
            <div class="topBar">
                <img id="logo" src="icons/logo.png" alt="logo">
                <h1>Recipe Hop</h1>
                <a href="browse.php"><h4 id="allRecipes">All Recipes</h4></a>
                <a href="browse.php"><h4 id="browseByCategory"> Browse by Category</h4></a>
                <div class="searchBar">
                    <form action="search.php" method="post" id="myForm" name="myForm">
                        <div class="search">
                            <label for="search"></label>
                            <input type="text" id="search" name="search" placeholder="Search recipes">
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="widePic">
                <img src="icons/bannerDesktop.png" alt="banner">
            </div>
        </header>

        <div class="teal">
            <h2>Featured Recipes</h2>
        </div>

        <div class="featured">
            <div class="feat" id="feat1">
                <img src="icons/feat1.png" alt="calzone">

                <a href="recipe.php?rec=6"><h6>Broccoli and Mozzerella Calzones</h6></a>
                <p>with stir-fried vegetables and wonton noodles</p>
            </div>

            <div class="feat" id="feat2">
                <img src="icons/feat2.png" alt="Steak">

                <a href="recipe.php?rec=29"><h6>Seared Steaks and Garlic Butter</h6></a>
                <p>with oven fries</p>
            </div>

            <div class="feat" id="feat3">
                <img src="icons/feat3.png" alt="Pasta">

                <a href="recipe.php?rec=24"><h6>Roasted Red Pepper Pasta</h6></a>
                <p>with lemon-parmesan broccoli</p>
            </div>

            <div class="feat" id="feat4">
                <img src="icons/feat4.png" alt="Lettuce">

                <a href="recipe.php?rec=36"><h6>Togarashi Chicken Lettuce Cups</h6></a>
                <p>with orange and radishes</p>
            </div>
        </div>

        <div class="browseBigger">
            
            <div class="browseTop">
                <div class="bbc">
                    <a href="browse.php"><h2>Browse by Category</h2></a>
                </div>
                    
                <div class="searchBar" id="tabletSearch">
                    <form action="search.php" method="post" id="myForm" name="myForm">
                        <div class="search">
                            <label for="search"></label>
                            <input type="text" id="search" name="search" placeholder="Search recipes">
                        </div>
                    </form>
                </div>
            </div>


            <div class="cats">
                <div class="catColumn" id="catColumn1">
                    <h3>Meal Tags</h3>
                    <ul>
                        <a href="browse.php?alt=vegetarian"><li>Vegetarian</li></a>
                        <a href="browse.php?tag=comfort+food"><li>Comfort Food</li></a>
                        <a href="browse.php?tag=full+of+flavor"><li>Full of Flavor</li></a>
                        <a href="browse.php?tag=stovetop"><li>Stovetop</li></a>
                        <a href="browse.php?tag=oven"><li>Oven</li></a>
                        <a href="browse.php?tag=easy"><li>Easy Peasy</li></a>
                    </ul>
                </div>
                <div class="catColumn" id="catColumn2">
                    <h3>Ingredients</h3>
                    <ul>
                        <a href="search.php?alt=potato"><li>Potatoes</li></a>
                        <a href="search.php?alt=broccoli"><li>Broccoli</li></a>
                        <a href="search.php?alt=garlic"><li>Garlic</li></a>
                        <a href="search.php?alt=tomato"><li>Tomatos</li></a>
                        <a href="search.php?alt=rice"><li>Rice</li></a>
                    </ul>
                </div>
                <div class="catColumn" id="catColumn3">
                    <h3>Types of Food</h3>
                    <ul>
                        <a href="search.php?alt=pasta"><li>Pasta</li></a>
                        <a href="search.php?alt=salad"><li>Salad</li></a>
                        <a href="search.php?alt=meat"><li>Meat</li></a>
                        <a href="browse.php?tag=seafood"><li>Seafood</li></a>
                        <a href="search.php?alt=chicken"><li>Chicken</li></a>
                    </ul>
                </div>
                <div class="catColumn" id="catColumn4">
                    <h3>More Tags</h3>
                    <ul>
                        <a href="browse.php?tag=asian"><li>Asian</li></a>
                        <a href="browse.php?tag=roast"><li>Roast</li></a>
                        <a href="browse.php?tag=vegetables"><li>Vegetables</li></a>
                        <a href="browse.php?tag=spicy"><li>Spicy</li></a>
                        <a href="browse.php?tag=stir+fry"><li>Stir Fry</li></a>
                    </ul>
                </div>
            </div>

        </div>

    </div>


</body>