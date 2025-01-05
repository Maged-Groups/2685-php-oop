<?php
require_once __DIR__ . '/../vendor/autoload.php';


// use Classes\Payments\Gateways\Bee\Live\Notification;
// use Classes\Payments\Gateways\Bee\Live\Payment;
// use Classes\Payments\Gateways\Bee\Live\Refund;

use Classes\Payments\Gateways\Bee\Live\{
    Refund,
    Notification,
    Payment
};

use Classes\Payments\Gateways\Bee\Test\{
    Refund AS BeeTestRefund,
    Notification AS BeeTestNotification,
    Payment AS BeeTestPaymentt
};


use App\Test;


Test::show();

Refund::make();

Payment::get_key();

Payment::pay_now();

Payment::get_key();

Payment::pay_now();

BeeTestRefund::make();