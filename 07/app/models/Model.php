<?php

namespace App\Models;

class Model
{
    public static $db;

    function __construct()
    {
        self::$db = new \mysqli('localhost', 'root', '', '2685_php_posts');
    }

    static function all()
    {
        $table = static::TABLE;

        $qry = "SELECT * FROM `pst_$table` WHERE `deleted_at` IS NULL;";

        $res = self::$db->query($qry);

        return mysqli_fetch_all($res, 1);

    }


    static function show($id)
    {
        $table = static::TABLE;

        $qry = "SELECT * FROM `pst_$table` WHERE `deleted_at` IS NULL AND `id` = '$id';";

        $res = self::$db->query($qry);

        return mysqli_fetch_object($res);

    }


    static function destroy($id)
    {
        // Delete from tbale
    }

   static function soft_delete($id)
    {
        // update tbale set deleted_at
    } 
}