<!DOCTYPE html>
<html>
<head>
	<title>Payment Gateway</title>
</head>
<body>

</body>
<?php include_once 'userheader.php' ;?>
<hr style="color:red;">
</html>




  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
         
          

          <div class="col-50">
          
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            
           
          </div>
          
        </div>
       <h3> <label >Product ID:</label>12</h3><br>
       <h3><label>Product Price:</label>200</h3><br>
       <h3> <label>Product Name:</label>LinuxHosting</h3><br> 
        <h4><label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          <center>
          <div id="paypal-button-container"></div></center>
        </label></h4>
        
         

      </form>
    </div>
  </div>
 
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AY1HZyli5zq6c5FQVjlec1_AnFVCcovxD1tKf08YZy3Mr6cgLoOe75FyzgolDZgtgnV0COZzjbmhzNl1"></script> 
         
         <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>
<?php include_once "footer.php" ?>
</body>
</html>