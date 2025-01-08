<?php

trait Str
{

    // props

    public function lowr($text)
    {
        return strtolower(trim($text));

    }
    public function upr($text)
    {
        return strtoupper(trim($text));
    }
    public function proper($text)
    {
        ucwords(trim($text));
    }

    public function rand()
    {
        return mt_rand();
    }

}

trait Validators
{
    static function v1()
    {
    }
    static function v2()
    {
    }
    static function v3()
    {
    }
    static function v4()
    {
    }
}

class Father
{
    protected static $money = 1000000;
}

class Mother
{

}

class ChildMale extends Father
{

    use Str;

}

class ChildFemale extends Mother
{
    use Validators;
}


class A extends Father
{
    use Str, Validators;
}


class B
{
    use Str, Validators;

    private static $name = 'Class b name';

    public function get_name()
    {
        return $this->upr(self::$name);
    }
}


$new_b = new B;

echo $new_b->get_name();