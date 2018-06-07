<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php $recipeTitle ?></title>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    
    <meta name="viewport"
    content="width=device-width, 
    initial-scale=1.0">
</head>
<body id="recipePage">

    <header class="deskHeader">
        <div class="topBar">
            <img id="logo" src="icons/logo.png" alt="logo">
            <a href="index.php"><h1>Recipe Hop</h1></a>
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
    </header>