<?php

namespace App\Http\Requests;

class ProductRequest extends Request
{
    function rules($req)
    {
        $erros = [];

        if (!preg_match('/[a-z\d_@ -]{5,50}/', $req->title))
            $erros[] = 'Product Name is Not Accepted';


        if (count($erros) > 0)
            return $erros;

        return true;
    }
}