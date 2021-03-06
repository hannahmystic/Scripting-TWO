<!DOCTYPE html>
<html lang="en">
<head>
	<title>Browse Recipe Hop</title>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    
    <meta name="viewport"
    content="width=device-width, 
    initial-scale=1.0">
</head>
<body>

    <header id="mobileHeader">
        <div class="logo">
            <img src="icons/logo.png" alt="logo">
        </div>
        <div class="recipehop">
            <a href="index.php">
                <h1>Recipe Hop</h1>
            </a>
        </div>
    </header>

    <header id="tabHeader">
        <img src="icons/banner2.png" alt="banner">
        <div id="h1tab">
            <a href="index.php">
             <h1>RECIPE HOP</h1>
            </a>
        </div>
    </header>

    <header class="deskHeader" id="deskHeaderBrowse">
        <div class="topBar">
                <img id="logo" src="icons/logo.png" alt="logo">
            <a href="index.php">
                <h1>Recipe Hop</h1>
            </a>
            <a href="browse.php"><h4 id="allRecipes">All Recipes</h4></a>
            <a href="browse.php"><h4 id="browseByCategory"> Browse by Category</h4></a>
            <div class="searchBar"> <!-- Sends search term to search page  -->
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


    <div class="browseOptions">
        <div class="drop">
            <button class="dropdown" onclick="dropFunction()">
            <h3>Filter Tags</h3>
            </button>
            <div id="tagDrop">
                <a href="browse.php?alt=vegetarian">Vegetarian</a>
                <a href="browse.php?tag=comfort+food">Comfort Food</a>
                <a href="browse.php?tag=full+of+flavor">Full of Flavor</a>
                <a href="browse.php?tag=stovetop">Stovetop</a>
                <a href="browse.php?tag=oven">Oven</a>
                <a href="browse.php?tag=easy"><li>Easy Peasy</a>
            </div>
        </div>
        <div class="drop">
            <button class="dropdown" onclick="dropIng()">
                <h3>Ingredients</h3>
            </button>
            <div id="ingDrop">
                <a href="search.php?alt=potato">Potatoes</a>
                <a href="search.php?alt=broccoli">Broccoli</a>
                <a href="search.php?alt=garlic">Garlic</a>
                <a href="search.php?alt=tomato">Tomatos</a>
                <a href="search.php?alt=rice">Rice</a>
            </div>
        </div>
        <div class="search" id="browseSearch">
        <form name="searchForm" method="POST" action="search.php">
                <div class="search">
                    <label for="search"> </label>
                    <input type="text" id="search" name="search" placeholder="Search recipes">
                    <input type="submit" name="submit" value="Go!">
                </div>
            </form>
        </div>
    </div>

    <div class="list">

        <div class="webSort">
            <div class="littleTeal">
                <h3> Filter </h3>
            </div>
            <div class="filterList">
                <h3>Meal Tags</h3>
                <ul>
                    <a href="browse.php?tag=full+of+flavor"><li>Full of Flavor</li></a>
                    <a href="browse.php?tag=vegetarian"><li>Vegetarian</li></a>
                    <a href="browse.php?tag=roast"><li>Roast</li></a>
                    <a href="browse.php?tag=oven"><li>Oven</li></a>
                    <a href="browse.php?tag=easy"><li>Easy</li></a>
                    <a href="browse.php?tag=cheesy"><li>Cheesy</li></a>
                </ul>
            </div>       
        </div>