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
            <form action="home.html" method="post" id="myForm" name="myForm">
                <div class="search">
                    <label for="search"></label>
                    <input type="text" id="search" name="search" placeholder="Search recipes">
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
                    <form action="home.html" method="post" id="myForm" name="myForm">
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

                <h6>Broccoli and Mozzerella Calzones</h6>
                <p>with stir-fried vegetables and wonton noodles</p>
            </div>

            <div class="feat" id="feat2">
                <img src="icons/feat2.png" alt="Steak">

                <h6>Seared Steaks and Garlic Butter</h6>
                <p>with oven fries</p>
            </div>

            <div class="feat" id="feat3">
                <img src="icons/feat3.png" alt="Pasta">

                <h6>Roasted Red Pepper Pasta</h6>
                <p>with lemon-parmesan broccoli</p>
            </div>

            <div class="feat" id="feat4">
                <img src="icons/feat4.png" alt="Lettuce">

                <h6>Togarashi Chicken Lettuce Cups</h6>
                <p>with orange and radishes</p>
            </div>
        </div>

        <div class="browseBigger">
            
            <div class="browseTop">
                <div class="bbc">
                    <a href="browse.php"><h2>Browse by Category</h2></a>
                </div>
                    
                <div class="searchBar" id="tabletSearch">
                    <form action="home.html" method="post" id="myForm" name="myForm">
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
                        <li>Healthy</li>
                        <li>Comfort Food</li>
                        <li>Full of Flavor</li>
                        <li>Stovetop</li>
                        <li>Oven</li>
                        <li>Easy Peasy</li>
                    </ul>
                </div>
                <div class="catColumn" id="catColumn2">
                    <h3>Ingredients</h3>
                    <ul>
                        <li>Sprinkles</li>
                        <li>Candy</li>
                        <li>Candy Canes</li>
                        <li>Candy Corn</li>
                        <li>Syrup</li>
                    </ul>
                    <p>View All</p>
                </div>
                <div class="catColumn" id="catColumn3">
                    <h3>Types of Food</h3>
                    <ul>
                        <li>Pasta</li>
                        <li>Salad</li>
                        <li>Meat</li>
                        <li>Seafood</li>
                        <li>Bread</li>
                    </ul>
                    <p>View All</p>
                </div>
                <div class="catColumn" id="catColumn4">
                    <h3>Ingredients</h3>
                    <ul>
                        <li>Sprinkles</li>
                        <li>Candy</li>
                        <li>Candy Canes</li>
                        <li>Candy Corn</li>
                        <li>Syrup</li>
                    </ul>
                    <p>View All</p>
                </div>
            </div>

        </div>

    </div>


</body>