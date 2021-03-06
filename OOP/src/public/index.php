<?php
declare(strict_types=1);

// require_once '../Transaction.php';

// Classes & Objects
// $transaction = new Transaction(100, 'Payment for something');
// $transaction->addTax(8);
// $transaction->applyDiscount(10);

// $transaction->amount = 15;

// $transaction = (new Transaction(100, 'Payment for something'))
// ->addTax(8)
// ->applyDiscount(10);
// $amount = $transaction->getAmount();
// unset($transaction); // this will destroy the object and print 'Transaction object destroyed' (destructor)
// // $transaction = null; // this will destroy the object and print 'Transaction object destroyed' (destructor)
// // exit; // this will call the destructor but the script will stop
// var_dump($amount); // if you var_dump the object $transaction->amount, you will get the value of the constructor. then the destructor will be called.
// // but if you call $amount and keep the getAmount() method,the destructor will not be called before the constructor because the object is not destroyed yet (no reference to the object).
// // var_dump($transaction->getAmount());
// // var_dump($transaction); // unintialized object

// $str = '{"a":1,"b":2,"c":3}';
// $arr = json_decode($str, true);
// var_dump($arr);
// echo '<br>';

// $obj = new \stdClass();
// $obj->a = 1;
// $obj->b = 2;
// $obj->c = 3;
// var_dump($obj);
// echo '<br>';

// // casting
// $arr = [1, 2, 3];
// // var_dump((object)$arr);
// $obj = (object)$arr;
// var_dump($obj->{1});
// echo '<br>';

// // scalar
// $obj = (object) false; // this means $obj->value = false
// var_dump($obj->scalar);
// echo '<br>';

// $obj = (object) null; // this means $obj->value = null
// var_dump($obj);
// echo '<br>';
// ////////////////////////////////////
// require_once '../PaymentProfile.php';
// require_once '../Customer.php';
// require_once '../Transaction.php';

// $transaction = new Transaction(100, 'Payment for something');
// // $transaction->customer = new Customer();
// // echo $transaction?->customer->paymentProfile->id ?? 'foo'; // null save to use ?->
// echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo'; // null save to use ?->
// null save operator is readonly you can't change the value of the property
// echo $transaction->getCustomer()?->setPaymentProfile(createProfile())?->id ?? 'foo'; // this createProfile funcition will not be executed if the customer is null
//////////////////// Name Spacing////////////////
// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/DateTime.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';
// require_once '../app/Notification/Email.php';

////////////////////// Auto Loading //////////////////
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class) . '.php');
    if(file_exists($path)) {
        require_once $path;
    }
    // var_dump('autoloading ' . $path);
});

// spl_autoload_register(function ($class) {
//     var_dump('autoloading 2 ' . $class);
// }, prepend:true); // prepend will load the function before the others


use App\PaymentGateway\Paddle\{Transaction, CustomerProfile, DateTime};
// use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
// var_dump(new PaymentGateway\Paddle\Transaction());
$paddleTransaction = new Transaction();
// $stripeTransaction = new StripeTransaction();
// $paddleCustomerProfile = new CustomerProfile();
// var_dump($paddleTransaction, $stripeTransaction);
var_dump($paddleTransaction);
//docker
phpinfo();