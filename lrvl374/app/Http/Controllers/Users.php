<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller {

    //
    public function index() {
        $data = [
            'page_heading' => "Users Management",
            'page_title' => "Users Management",
        ];
        return view('users.users_home')->with($data);
    }

    public function create() {
        $data = [
            'page_heading' => "Add New User",
            'page_title' => "Add User",
        ];
        return view('users.add_user')->with($data);
        
    }

}
