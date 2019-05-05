<?php

mysql_connect("localhost","root","");
mysql_select_db("missingpuzzle");

//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'divyanshidm-facilitator@gmail.com'; //Business Email

?>
<?php
    //Fetch products from the database
    $results = mysql_query("SELECT * FROM message");
    while($row = mysql_fetch_assoc($results)){
?>
    
    message: <?php echo $row['message']; ?>
    Price: <?php echo $row['amount']; ?>
    <form action="<?php echo $paypalURL; ?>" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="message" value="<?php echo $row['message']; ?>">
        <input type="hidden" name="item_name_1" value="<?php echo $row['mid']; ?>">
        <input type="hidden" name="amount_1" value="<?php echo $row['amount']; ?>">
        <input type="hidden" name="quantity_1" value="1">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/hack/cancel.php'>
        <input type='hidden' name='return' value='http://localhost/hack/success.php'>
        
        <!-- Display the payment button. -->
        <input type="submit" name="submit" border="0" value="PayPal">
        
    </form>
<?php } ?>