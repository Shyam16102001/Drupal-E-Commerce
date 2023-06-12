function decreaseQuantity(id) {
  var quantityInput = document.getElementById("quantity-input");
  var value = parseInt(quantityInput.value);
  if (value > 1) {
    quantityInput.value = value - 1;
  }
  updateAddToCartLink(id);
}

function increaseQuantity(id, availability) {
  var quantityInput = document.getElementById("quantity-input");
  var value = parseInt(quantityInput.value);
  if (value < availability) {
    quantityInput.value = value + 1;
    updateAddToCartLink(id);
  }
}

function updateAddToCartLink(id) {
  var quantityInput = document.getElementById("quantity-input");
  var quantity = parseInt(quantityInput.value);
  var addToCartLink = document.getElementById("add-to-cart-link");
  addToCartLink.href = "/store/add-to-cart/" + id + "/" + quantity;
}
