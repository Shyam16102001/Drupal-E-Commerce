window.addEventListener("DOMContentLoaded", function () {
  updateTotalCost();
});

function updateQuantity(input) {
  var quantity = parseFloat(input.value);
  var price = parseFloat(
    input.parentNode.parentNode.querySelector(".price").textContent
  );
  var totalPriceElement =
    input.parentNode.parentNode.querySelector(".total-price");
  var totalPrice = quantity * price;
  totalPriceElement.textContent = totalPrice.toFixed(2);
  updateTotalCost();
}


function updateTotalCost() {
  var totalCost = 0;
  var totalPriceElements = document.querySelectorAll(".total-price");

  for (var i = 0; i < totalPriceElements.length; i++) {
    var priceText = totalPriceElements[i].textContent;
    var price = parseFloat(priceText.replace(/[^0-9.-]+/g, ""));
    totalCost += price;
  }

  var totalCostElement = document.getElementById("total-cost");
  totalCostElement.textContent = totalCost.toFixed(2);
}

function editQuantity(productId) {
  window.location.href = "/store/node/" + productId;
}

function redirectToCheckout() {
  window.location.href = "/store/checkout";
}

function removeFromCart(productId) {
  var confirmation = confirm(
    "Are you sure you want to remove this product from the cart?"
  );
  if (confirmation) {
    window.location.href = "/store/add-to-cart/" + productId + "/0";
  }
}
