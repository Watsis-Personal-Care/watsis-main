<div class="quantity">
  <button onclick="decrement()">-</button>
  <input type="text" id="quantity" value="1" min="1">
  <button onclick="increment()">+</button>
</div>

<script>
  function increment() {
    var quantity = document.getElementById('quantity');
    quantity.value = parseInt(quantity.value) + 1;
  }

  function decrement() {
    var quantity = document.getElementById('quantity');
    if (parseInt(quantity.value) > 1) {
      quantity.value = parseInt(quantity.value) - 1;
    }
  }
</script>


