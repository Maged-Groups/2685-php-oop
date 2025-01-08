<?php

class Store
{
    private $name = null;

    private $stock = 0;

    private $email;

    private $branchSales = 0;

    private $branchRefund = 0;

    // static props
    private static $count = 0;

    private static $totalStock = 0;

    public function __construct($storeName, $initialStock)
    {
        $this->name = $storeName;

        $this->stock = $initialStock;

        self::$totalStock += $initialStock;

        self::$count++;
    }

    public function get_store_name()
    {
        return strtoupper($this->name);
    }

    public function set_store_name($newName)
    {
        return $this->name = $newName;
    }

    // Email

    public function set_email($newEmail)
    {
        // validate email
        $email = filter_var(filter_var($newEmail, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);

        // Change the email prop
        if ($email) {
            return $this->email = $email;
        }

        return false;
    }

    public function get_email()
    {
        return $this->email;
    }

    // Stock
    public function sales($pcs, $priceEach)
    {

        if ($pcs === 0 || $priceEach === 0) {
            return false;
        }

        $this->stock -= $pcs;

        $this->branchSales += $pcs * $priceEach;

        return true;
    }

    public function refund($pcs, $priceEach)
    {

        if ($pcs === 0 || $priceEach === 0) {
            return false;
        }

        $this->stock += $pcs;

        $total = $pcs * $priceEach;

        $this->branchSales -= $total;

        $this->branchRefund += $total;

        return true;
    }

    public function branch_report()
    {
        echo '<h2>Store: ' . $this->name . '</h2>';
        echo '<p>Total Stores:' . self::$count . '</p>';
        echo '<h4>Total Stock : ' . $this->stock . '</h4>';
        echo '<h4>Total Sales : ' . $this->branchSales . '</h4>';
        echo '<h4>Total Refund : ' . $this->branchRefund . '</h4>';
    }

    public static function general_report()
    {
        echo '<h2>General Report</h2>';
        echo '<h2>All Store Count: ' . self::$count . '</h2>';
        echo '<h4>Total Stock : ' . self::$totalStock . '</h4>';
        // echo '<h4>Total Sales : ' . ??? . '</h4>';
        // echo '<h4>Total Refund : ' . ??? . '</h4>';
    }
}


$alex_branch = new Store('Alex', 5000);

echo '<pre>';

$alex_branch->branch_report();

$alex_branch->sales(100, 100);

$alex_branch->branch_report();

$alex_branch->refund(10, 100);

$alex_branch->branch_report();


$alrehab_branch = new Store('Alrehab', 10000);

$alrehab_branch->branch_report();

$alrehab_branch->sales(10, 500);
$alrehab_branch->branch_report();
$alex_branch->branch_report();


// General Report
Store::general_report();