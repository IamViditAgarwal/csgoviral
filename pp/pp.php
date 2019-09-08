<!-- this page will be collaborated with the profile page for chekout-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--include this-->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

</head>
<body>

	 <!--paypal button-->
	 <div id="paypal-button"></div>

	 <script>
	    paypal.Button.render({
	      env: 'production', // Or 'sandbox',

	      commit: true, // Show a 'Pay Now' button

	      style: {
	        color: 'gold',
	        size: 'small'
	      },

	      payment: function(data, actions) {
	        /* 
	         * Set up the payment here 
	         */
	      },

	      onAuthorize: function(data, actions) {
	        /* 
	         * Execute the payment here 
	         */
	      },

	      onCancel: function(data, actions) {
	        /* 
	         * Buyer cancelled the payment 
	         */
	      },

	      onError: function(err) {
	        /* 
	         * An error occurred during the transaction 
	         */
	      }
	    }, '#paypal-button');
  </script>


  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JNYTJBEDBTEGC">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



</body>
</html>