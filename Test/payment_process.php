<?php

$errors = [];

if (empty($_POST['amount']) || !preg_match('/^[0-9]+(\.[0-9]{2})?$/', $_POST['amount'])) {
  $errors[] = 'Invalid amount (ZAR)';
} elseif ($_POST['amount'] < 1) {
  $errors[] = 'Amount must be greater than 0';
}


// Validate card number
if (empty($_POST['card_number']) || !preg_match('/^[0-9]{16}$/', $_POST['card_number'])) {
  $errors[] = 'Invalid card number';
}

// Validate expiration month and year
if (empty($_POST['expiration_month']) || empty($_POST['expiration_year'])) {
  $errors[] = 'Please select expiration month and year';
} elseif (!checkdate($_POST['expiration_month'], 1, $_POST['expiration_year'])) {
  $errors[] = 'Invalid expiration date';
}

// Validate CVC
if (empty($_POST['cvc']) || !preg_match('/^[0-9]{3,4}$/', $_POST['cvc'])) {
  $errors[] = 'Invalid CVC';
}

// Validate name on card
if (empty($_POST['name_on_card'])) {
  $errors[] = 'Please enter name on card';
}

// Check for errors
if (!empty($errors)) {
  foreach ($errors as $error) {
    echo '<p style="color: red;">' . $error . '</p>';
  }
} else {
  // Payment processing logic here (e.g., Stripe, PayPal, etc.)
  echo '<p style="color: green;">Payment successful!</p>';
}
?>
