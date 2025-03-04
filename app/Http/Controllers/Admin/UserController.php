<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function showUser ($id) {
        return User::findOrFail($id);  
    }

    public function getListUssers (Request $request) {   
        $user = new User();
        $users = $user->getListUsers($request);
        $users->makeHidden(['status_id', 'permission_id']);
        return response()->json($users);
    }
}