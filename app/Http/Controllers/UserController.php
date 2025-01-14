<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function __construct () {
        
    }

    public function printUserName ($name) {
        return 'User name: '. $name;  
    }

    public function printAge ($age) {
        return 'Age: '. $age;  
    }
}