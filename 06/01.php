<?php
// Access Modifier
class Store
{
    private static $name = null;

    private static $stock = 0;

    private static $email;

    private static $totalSales = 0;

    private static $totalRefund = 0;


    public static function create($storeName, $initialStock)
    {
        self::$name = $storeName;

        self::$stock = $initialStock;

        var_dump(self::$name);
    }

    public static function get_store_name()
    {
        return strtoupper(self::$name);
    }

    public static function set_store_name($newName)
    {
        return self::$name = $newName;
    }

    // Email

    public static function set_email($newEmail)
    {
        // validate email
        $email = filter_var(filter_var($newEmail, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);

        // Change the email prop
        if ($email) {
            return self::$email = $email;
        }

        return false;
    }

    public static function get_email()
    {
        return self::$email;
    }

    // Stock
    public static function sales($pcs, $priceEach)
    {

        if ($pcs === 0 || $priceEach === 0) {
            return false;
        }

        self::$stock += $pcs;

        self::$totalSales += $pcs * $priceEach;

        return true;
    }

    public static function refund($pcs, $priceEach)
    {

        if ($pcs === 0 || $priceEach === 0) {
            return false;
        }

        self::$stock -= $pcs;

        $total = $pcs * $priceEach;

        self::$totalSales -= $total;

        self::$totalRefund += $total;

        return true;
    }
}






Store::create('Alex', 5000);

// Store::$name = 'New Name';
echo Store::get_store_name();

Store::set_store_name('Alexandria');

echo Store::get_store_name();

if (Store::sales(20, 100)) {
    echo '<p>Sales Success</p>';
} else {
    echo '<p>Sales Not Success</p>';
}
