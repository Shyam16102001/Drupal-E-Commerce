document.addEventListener("DOMContentLoaded", function () {
  var subtotalElement = document.getElementById("subtotal");
  var balanceElement = document.getElementById("balance");
  var payNowButton = document.getElementById("pay-now-button");

  var subtotal = parseFloat(
    subtotalElement.textContent.replace(/[^0-9.]/g, "")
  );
  var balance = parseFloat(balanceElement.textContent.replace(/[^0-9.]/g, ""));

  if (subtotal > balance) {
    balanceElement.style.color = "red";
    payNowButton.disabled = true;
  } else {
    balanceElement.style.color = "";
    payNowButton.disabled = false;
  }

  var deliveryOptions = document.querySelectorAll(".delivery-option");

  deliveryOptions.forEach(function (option) {
    option.addEventListener("click", function () {
      deliveryOptions.forEach(function (option) {
        option.classList.remove("active");
      });

      this.classList.add("active");

      var deliveryMethod = this.value;

      var deliveryCostElement = document.getElementById("delivery_cost");
      if (deliveryMethod === "one_day") {
        deliveryCostElement.textContent = "₹150";
      } else if (deliveryMethod === "normal") {
        deliveryCostElement.textContent = "Free";
      } else if (deliveryMethod === "express") {
        deliveryCostElement.textContent = "₹50";
      }

      var totalElement = document.getElementById("total");
      var deliveryCost =
        deliveryMethod === "normal"
          ? 0
          : parseFloat(deliveryCostElement.textContent.replace(/[^0-9.]/g, ""));
      var newTotal = subtotal + deliveryCost;
      totalElement.textContent = "₹" + newTotal.toFixed(2);

      if (newTotal > balance) {
        balanceElement.style.color = "red";
        payNowButton.disabled = true;
      } else {
        balanceElement.style.color = "";
        payNowButton.disabled = false;
      }
    });
  });

  payNowButton.addEventListener("click", function () {
    var selectedOption = getSelectedDeliveryOption();
    var redirectURL = "/store/placeorder/";

    if (selectedOption === "one_day") {
      redirectURL += "150";
    } else if (selectedOption === "express") {
      redirectURL += "50";
    } else if (selectedOption === "normal") {
      redirectURL += "0";
    }

    window.location.href = redirectURL;
  });

  function getSelectedDeliveryOption() {
    var selectedOption = "";

    deliveryOptions.forEach(function (option) {
      if (option.classList.contains("active")) {
        selectedOption = option.value;
      }
    });

    return selectedOption;
  }
});
