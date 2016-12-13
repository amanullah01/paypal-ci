<div>
    <h2>Dear Member</h2>
    <span>Your payment was successful, thank you for purchase.</span><br/>
    <span>Item Number : 
        <strong><?php echo $item_number; ?></strong>
    </span><br/>
    <span>TXN ID : 
        <strong><?php echo $txn_id; ?></strong>
    </span><br/>
    <span>Amount Paid : 
        <strong>$<?php echo $payment_amt.' '.$currency_code; ?></strong>
    </span><br/>
    <span>Payment Status : 
        <strong><?php echo $status; ?></strong>
    </span><br/>
</div>