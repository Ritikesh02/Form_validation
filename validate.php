<form action="validation.php" method="post">
  <h2>Shopping Cart</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Quantity</th>
      <th>Weight (kg)</th>
      <th>Expiry Date</th>
    </tr>
    <tr>
      <td>Sugar</td>
      <td><input type="number" name="sugar_qty" required></td>
      <td><input type="number" name="sugar_weight" required></td>
      <td><input type="date" name="sugar_expiry" required></td>
    </tr>
    <tr>
      <td>Tea</td>
      <td><input type="number" name="tea_qty" required></td>
      <td><input type="number" name="tea_weight" required></td>
      <td><input type="date" name="tea_expiry" required></td>
    </tr>
    <tr>
      <td>Wheat Flour</td>
      <td><input type="number" name="flour_qty" required></td>
      <td><input type="number" name="flour_weight" required></td>
      <td><input type="date" name="flour_expiry" required></td>
    </tr>
    <tr>
      <td>Milk</td>
      <td><input type="number" name="milk_qty" required></td>
      <td><input type="number" name="milk_weight" required></td>
      <td><input type="date" name="milk_expiry" required></td>
    </tr>
    <tr>
      <td>Biscuits</td>
      <td><input type="number" name="biscuits_qty" required></td>
      <td><input type="number" name="biscuits_weight" required></td>
      <td><input type="date" name="biscuits_expiry" required></td>
    </tr>
    <tr>
      <td>Payment Method</td>
      <td>
        <select name="payment_method" required>
          <option value="">Select Payment Method</option>
          <option value="cash">Cash</option>
          <option value="card">Card</option>
          <option value="online">Online Payment</option>
        </select>
      </td>
    </tr>
  </table>
  <input type="submit" value="Validate Cart">
</form>