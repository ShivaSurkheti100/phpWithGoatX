<?php

$paymentStatus = '1';

    switch ($paymentStatus){
        case 1:
            echo "paid";
            break;

        case 2:
        case 3:
            echo "Payment Rejected";
            break;

        case 0:
            echo 'Pending Payment';
            break;

        default:
            echo "Unknown Payment Status";
    }

    echo '<br>';

    // Match Expression

$paymentStatusDisplay = match ($paymentStatus){
    1 =>  "Paid", // sab ma (print "Paid") also for 2, 3. garda Paid1 return hunxa as print returns integer
    2, 3 =>  "Payment Declined",
    0 =>  "Payment Pending",
    default => "Unknown Payment Status"
};
echo $paymentStatusDisplay;

// match does comparison with ===(strict comparison)
// switch does comparison with ==(loose comparison)