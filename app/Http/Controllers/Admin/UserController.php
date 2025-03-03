<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function showUser ($id) {
        return User::findOrFail($id);  
    }

    public function index () {
        return User::with('status:id,status')
        ->get()
        ->makeHidden('status_id');
    }
}