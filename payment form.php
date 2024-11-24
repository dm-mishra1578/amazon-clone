<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment form</title>
  <link rel="stylesheet" href="css/pay.css">
</head>

<body>
  <div class="container">
    <form method="POST" action="payment_submit.php">

      <div class="head">
        <h1 class="main_heading">Payment Form</h1>
      </div>

      <!---- <p>requried field followed by *</p>  -->
      <p>Name: <input type="text" name="name" id="name" required placeholder="Name"></p>
      <p>Contact No: <input type="number" name="Contact_no"></p>
      <fieldset>
        <legend required>Gender *</legend>

        Male <input type="radio" name="Gender" id="Male">
        Female <input type="radio" name="Gender" id="Female">
        OTHER <input type="radio" name="Gender" id="Other">
      </fieldset>
      <br>
      <p> Address: <textarea name="address" id="address" cols="100" rows="7"></textarea></p>
      <p>Email: *<input type="email" id="email" name="email" required></p>
      <p> Pincode: <input type="number" name="Pincode" id="Pincode"></p>
      <br>
      <h2>Payment Information</h2>
      <p> card Type:
        <select name="card_Type" id="Card Type">
          <option value="">--Card Type--</option>
          <option value="Visa">Visa</option>
          <option value="Rupay">Rupay</option>
          <option value="Master Card">Master Card</option>
        </select>
      </p>
      <p> Card No: *<input type="number" name="card_no" id="card no" required> </p>
      <p>Expiration Date <input type="date" name="card_expiration_date" id="card expiration date" required></p>
      <p>CVV: *<input type="password" name="CVV" id="CVV" required></p>
      <p>
        <input type="submit" value="Pay Now" id="Pay Now">
        <input type="reset" value="Reset">

      </p>
    </form>
  </div>
</body>

</html>