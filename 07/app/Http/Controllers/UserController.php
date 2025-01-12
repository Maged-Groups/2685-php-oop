<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    static function all_users()
    {

        $users =  User::all();

        // dd('All user page');

        require __DIR__ . '/../../../public/views/users/all-users.php';

        // echo json_encode($users);
    }


    static function create()
    {
        require __DIR__ . '/../../../public/views/users/create.php';
    }
}