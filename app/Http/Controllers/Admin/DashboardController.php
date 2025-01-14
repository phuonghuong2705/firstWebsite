<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct () {
        return 'load dashboard';
    }

    public function dashBoard () {
        return 'this is dashBoard';
    }
}
