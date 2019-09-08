


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test</title>
</head>
<body>

<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">

        <input type="text" name="os0" maxlength="200">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="currency_code" value="GBP" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="first_name" value="Customer's First Name" />
        <input type="hidden" name="last_name" value="Customer's Last Name" />
        <input type="hidden" name="payer_email" value="customer@example.com" />
        <input type="hidden" name="item_number" value="123456" / >
        <input type="submit" name="submit" value="Submit Payment"/>
    </form>



    

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="csgoviral9@gmail.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="Funds">
<input type="hidden" name="item_number" value="funds">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://35.178.104.234/pp/payment-successful.html">
<input type="hidden" name="cancel_return" value="http://35.178.104.234/pp/payment-cancelled.html">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="hidden" name="notify_url" value="http://35.178.104.234/pp/payments.php">
<table>
<tr><td><input type="hidden" name="on0" value="Add amount">Add amount</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>


</body>
</html>