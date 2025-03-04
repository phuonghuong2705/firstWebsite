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
        $limit = $request->query('limit', 10);
        $search = $request->query('name');
        $page = $request->query('page', 1);
        $permission = $request->query('role');
        $status = $request->query('status');

        //join with permision and status
        $users = User::select(
            'users.*',
            'users_status.status as status',
            'user_permission.permission as permission'
        )
        ->join('users_status', 'users.status_id', '=', 'users_status.id')
        ->join('user_permission', 'users.permission_id', '=', 'user_permission.id')
        ->searchByName($search)
        ->filterByPermission($permission)
        ->filterByStatus($status);

        // Paginate dữ liệu
        $users = $users->paginate($limit, ['*'], 'page', $page);

        // Ẩn trường không cần thiết bằng `through`
        $users->through(function ($user) {
            return $user->makeHidden(['status_id', 'permission_id']);
        });
        return response()->json($users);
    }
}