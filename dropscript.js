/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
var tagClicked = new Boolean(false);
var ingClicked = new Boolean(false);
var tag = document.getElementById("tagDrop");
var ing = document.getElementById("ingDrop");

function dropTag() {
    if( !tagClicked){
        tag.style.display= "none";
        tagClicked = true;
    }
    else{
        tag.style.display = "block";
        tagClicked = false;
    }
}

function dropIng(){
    if( !ingClicked){
        ing.style.display= "none";
        ingClicked = true;
    }
    else{
        ing.style.display = "block";
        ingClicked = false;
    }    
}