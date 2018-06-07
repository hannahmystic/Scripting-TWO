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


    <div class="browseOptions">
        <div class="littleTeal">
            <h3>Filter</h3>
        </div>
        <div class="littleTeal">
            <h3>Sort By</h3>
        </div>
        <div class="search" id="browseSearch">
            <form action="home.html" method="post" id="myForm" name="myForm">
                <div class="search">
                    <label for="search"></label>
                    <input type="text" id="search" name="search" placeholder="Search recipes">
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