var quantityElement = document.getElementById("quantity");
var decreaseButton = document.getElementById("decrease");
var increaseButton = document.getElementById("increase");
var stock = document.getElementById("stock");

decreaseButton.addEventListener("click", function() {
    var currentQuantity = parseInt(quantityElement.textContent);
    if (currentQuantity > 1) {
        quantityElement.textContent = currentQuantity - 1;
    }
});

increaseButton.addEventListener("click", function() {
    var currentQuantity = parseInt(quantityElement.textContent);
    var currentStock = parseInt(stock.textContent);
    if(currentQuantity < currentStock) {
        quantityElement.textContent = currentQuantity + 1;
    }
    else {
        alert("Out of stock");
    }
});