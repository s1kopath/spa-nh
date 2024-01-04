<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

session_start(); //for back button protection

class SuperLoginController extends Controller {

    /**
     * Displays dashboard
     */
    public function index() {
        $this->AuthCheck();
        $admin_home = view('backend.admin_dashboard_content');
        return view('backend.admin_master')
                        ->with('admin_main_content', $admin_home);
//        return view('backend.admin_master');

    }

    /**
     * for authentication
     */
    public function AuthCheck() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return;
        } else {
            return Redirect::to('/admin-panel')->send();
        }
    }

    /**
     * for logout
     */
    public function logout() {
        Session::put('admin_name', '');
        Session::put('admin_id', '');
        Session::put('message', 'Logout Successful...');
        return Redirect::to('/admin-panel')->send();
    }



}
