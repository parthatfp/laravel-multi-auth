<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function allAdminList(){
        $admins = User::where('is_admin', 1)->get();
        return view('backend.users.admin', compact('admins'));
    }
    public function allUserList(){
        $admins = User::where('is_admin', 1)->get();
        return view('backend.users.user', compact('admins'));
    }
}
