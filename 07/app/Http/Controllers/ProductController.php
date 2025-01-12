<?php
namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    const TABLE = 'products';

    static function index()
    {
        $products = Product::all();

        require __DIR__ . '/../../../public/views/products/index.php';
    }

    static function delete_user($id)
    {

        if (self::$soft_deletes)
            return Product::soft_delete($id);

        return Product::destroy($id);

    }



}