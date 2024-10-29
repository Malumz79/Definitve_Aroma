<html>
<head>
<style>
		body{padding:50px;}

.form-group{margin-bottom:30px;}

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  margin: 0 auto;
  max-width:600px; 
  padding:50px; 
  box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
  background: -webkit-linear-gradient(left,#DC143C,#A9A9A9);
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: rgb(141,194,111);
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}



html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left,#A9A9A9,#DC143C);
  <!-- -webkit-linear-gradient(, #003366,#004080,#0059b3
, #0073e6-->);
}
::selection{
  background: #1a75ff;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #A9A9A9;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 15px;
}
</style>


</head>
<body>

<div class ="wrapper">
<div class="container" align="center">

      <div class="title-text">
        <div class="title payment">Payment</div>
        
      </div>

<div class="form-inner">
<form action="payment_process.php" method="post">

<div class="form-group">
  <label for="amount">Amount (ZAR):</label>
  <input type="number" id="amount" name="amount" step="0.01" min="1" required>
</div>

<div class="form-group">
  <label for="card_number">Card Number:</label>
  <input type="text" id="card_number" name="card_number" pattern="[0-9]{16}" required><br>
</div>




<div class="form-group">
  <label for="expiration_month">Expiration Month:</label>
  <select id="expiration_month" name="expiration_month" required>
    <option value="">Select Month</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="02">March</option>
	<option value="02">April</option>
	<option value="02">May</option>
	<option value="02">June</option>
	<option value="02">July</option>
	<option value="02">August</option>
	<option value="02">September</option>
	<option value="02">October</option>
	<option value="02">November</option>
    <option value="12">December</option>
  </select>
</div>

<div class="form-group">
  <label for="expiration_year">Expiration Year:</label>
  <select id="expiration_year" name="expiration_year" required>
    <option value="">Select Year</option>
    <?php for ($i = date('Y'); $i <= date('Y') + 10; $i++) : ?>
      <option value="<?= $i ?>"><?= $i ?></option>
    <?php endfor; ?>
  </select>
</div>

<div class="form-group">
  <label for="cvc">CVC:</label>
  <input type="text" id="cvc" name="cvc" pattern="[0-9]{3,4}" required>
</div>


<div class="form-group">
  <label for="name_on_card">Name on Card:</label>
  <input type="text" id="name_on_card" name="name_on_card" required>
</div>
  <input type="submit" value="Make Payment">
</form>


</div>
</div>
</div>
</body>
</html>