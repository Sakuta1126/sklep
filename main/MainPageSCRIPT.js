







let theNewestProductsDivProductContainer = document.getElementById("theNewestProductsDivProductContainer");

function mouseDown() {
    theNewestProductsDivProductContainer.addEventListener("mousemove", getMouseDirection, false);

}

function mouseUp() {
    theNewestProductsDivProductContainer.removeEventListener("mousemove", getMouseDirection, false);

    countMove = 0;
}

var oldX = 0;
var oldY = 0;
var countMove = 0; 

function getMouseDirection(e) {
    if (oldX < e.pageX) countMove--;
    else countMove++;

    theNewestProductsDivProductContainer.scrollLeft += countMove/15;
    oldX = e.pageX;
    oldY = e.pageY;
}




var searchBar = document.getElementById("searchBarId");
var searchBarSubmit = document.getElementById("SearchButtonSubmit");
let searchBarForm = document.getElementById("searchBarFormId");
let categorySelectId = document.getElementById("headerDivCategorySelectId");

searchBarSubmit.addEventListener("click", function(event) {
    searchBarForm.elements[0].value = searchBar.value;
    searchBarForm.elements[1].value = categorySelectId.value;
    searchBarForm.submit();
});

theNewestProductsDivProductContainer.addEventListener('mousedown', mouseDown);
theNewestProductsDivProductContainer.addEventListener('mouseup', mouseUp);

bestSellersProductsDivProductContainer.addEventListener('mousedown', mouseDown);
bestSellersProductsDivProductContainer.addEventListener('mouseup', mouseUp);

lastWatchedProductsProductContainer.addEventListener('mousedown', mouseDown);
lastWatchedProductsProductContainer.addEventListener('mouseup', mouseUp);