<?php
  
  $errors = array();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["sugar_qty"]) || empty($_POST["sugar_weight"]) || empty($_POST["sugar_expiry"])) {
      $errors[] = "Sugar fields cannot be empty";
    } elseif ($_POST["sugar_weight"] > 10) {
      $errors[] = "Sugar weight cannot exceed 10kg";
    } elseif (strtotime($_POST["sugar_expiry"]) < strtotime("+7 days")) {
      $errors[] = "Sugar expiry date must be within 7 days";
    }

   
    if (empty($_POST["tea_qty"]) || empty($_POST["tea_weight"]) || empty($_POST["tea_expiry"])) {
      $errors[] = "Tea fields cannot be empty";
    } elseif ($_POST["tea_weight"] > 10) {
      $errors[] = "Tea weight cannot exceed 10kg";
    } elseif (strtotime($_POST["tea_expiry"]) < strtotime("+7 days")) {
      $errors[] = "Tea expiry date must be within 7 days";
    }

    
    if (empty($_POST["flour_qty"]) || empty($_POST["flour_weight"]) || empty($_POST["flour_expiry"])) {
      $errors[] = "Wheat flour fields cannot be empty";
    } elseif ($_POST["flour_weight"] > 10) {
      $errors[] = "Wheat flour weight cannot exceed 10kg";
    } elseif (strtotime($_POST["flour_expiry"]) < strtotime("+7 days")) {
      $errors[] = "Wheat flour expiry date must be within 7 days";
    }

    if (empty($_POST["milk_qty"]) || empty($_POST["milk_weight"]) || empty($_POST["milk_expiry"])) {
      $errors[] = "Milk fields cannot be empty";
    } elseif ($_POST["milk_weight"] > 10) {
      $errors[] = "Milk weight cannot exceed 10kg";
    } elseif (strtotime($_POST["milk_expiry"]) < strtotime("+7 days")) {
      $errors[] = "Milk expiry date must be within 7 days";
    }

    
    if (empty($_POST["biscuits_qty"]) || empty($_POST["biscuits_weight"]) || empty($_POST["biscuits_expiry"])) {
      $errors[] = "Biscuits fields cannot be empty";
    } elseif ($_POST["biscuits_weight"] > 10) {
      $errors[] = "Biscuits weight cannot exceed 10kg";
    } elseif (strtotime($_POST["biscuits_expiry"]) < strtotime("+7 days")) {
      $errors[] = "Biscuits expiry date must be within 7 days";
    }

    
    if (empty($_POST["payment_method"])) {
      $errors[] = "Payment method cannot be empty";
    }

  
    if (count($errors) > 0) {
      echo "<h2>Errors:</h2>";
      foreach ($errors as $error) {
        echo "<p>$error</p>";
      }
    } else {
      echo "<h2>Cart validated successfully!</h2>";
      // Process payment and update database
    }
  }
?>