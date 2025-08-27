<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment Details</title>
        <link rel="stylesheet" href="Style\PaymentDetails.css">
    </head>
    <body>
        <?php 
            require "Config.php";
        ?>
        
        <form method="POST" action="Insert.php">
        
             <div class="details">
                    <h1>PAYMENT OPTIONS</h1>
                    <h3>Please choose your payment option here.</h3>
                    
           <p> <input type="radio" name="PaymentOption">Credit Cards  &nbsp;&nbsp;&nbsp;&nbsp; <img src="Image\cards_img.jpg" width="30%" alt="image"><br>
            <input type="radio" name="PaymentOption">PayPal &nbsp;&nbsp;&nbsp;&nbsp; <img src="Image\PayPal-Logo.png" width="30%"><br>
            <input type="radio" name="PaymentOption">Bank Deposit/Bank Transfer &nbsp;&nbsp;&nbsp;&nbsp;   <img src="Image\images_bank.jpg" width="30%">
           </p>
            <h3>Please enter your credit card details below.</h3>
                    <p>Name of Card Holder : <input type="text" name="NameOfCard" placeholder="Mr. John Doe" required> </p>
                    <p>Amount : <input type="currency"name="Amount" placeholder="Rs." required></p>
                    <p>Card Number :<input type="text" name="CardNumber" placeholder="1111-2222-3333-4444" maxlength="16" required></p>
                    <p>ExpMonth  :
            <select name="ExpMonth">
                <option value="January">January</option>
                <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value=" September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="Dectember">Dectember</option>            
                        </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ExpYear :
            <select name="ExpYear">
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                            </select>
        
               
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CVV :<input type="number" name="CVV" placeholder="1234" required></p>
            <p><h4>Save Card</h4>We will save this card for your convenience. If required, you can remove the card in the "Payment Option" section in the "Acoount" menu.</p>
            <button>Confirm</button>
            <button><a href="Update.php">Update</a></button>
            <button><a href="Delete.php">Delete</a></button> 
        </div>

    
</form>     
</body>
</html>