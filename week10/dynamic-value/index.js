var snowblower_cost = 559.99;

function calculateSubtotal(e) {
    var qty = parseFloat(e.currentTarget.value);
    var qtyCost = qty * snowblower_cost;

    document.getElementById("txtSubTotal").value = qtyCost;

    calculateTotal();
}

function calculateTotal() {
    var subtotal = parseFloat(document.getElementById("txtSubTotal").value);

    var tax = subtotal * 0.05;
    var total = tax + subtotal

    document.getElementById("txtTax").value = tax;
    document.getElementById("txtTotal").value = total;
}

var qtyTextBox = document.getElementById("txtQty");
qtyTextBox.addEventListener("keydown", calculateSubtotal, false);