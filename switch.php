<?php
// paid, declined , pending , unknown payment status

//$paymentStatus = '1'; // loose comparison : either 1, '1', true: returns the same
//switch ($paymentStatus){
//    case 1:
//        echo 'Paid';
//        break;
//
//    case 'rejected':
//    case 'declined':
//        echo "Payment declined!";
//        break;
//
//    case 'pending':
//        echo "Pending Payment";
//        break;
//
//    default:
//        echo "Unknown Payment Status";
//
//}


// For an array
//$paymentStatus = [1, 3, 0];
//
//foreach ($paymentStatus as $PaymentStatus){
//    switch ($PaymentStatus){
//        case 1:
//            echo "paid";
//            break 2;
//
//        case 2:
//        case 3:
//            echo "Payment Rejected";
//            break;
//
//        case 0:
//            echo 'Pending Payment';
//            break;
//
//        default:
//            echo "Unknown Payment Status";
//
//}
//
//    echo "<br>";
//
//}

// for function

function x(){
    sleep(3);
    echo "Done! <br>";
//  echo "Done!", "<br>";
//  echo "Done!". "<br>";
    return 3;
}

switch (x()){
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 4;
}

// switch statement is slightly faster than if-else statements: