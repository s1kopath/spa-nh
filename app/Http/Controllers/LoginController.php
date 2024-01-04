<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start(); //for back button protection

class LoginController extends Controller
{
    /**
     * Displays beautifullife login page.
     */
    public function index()
    {
        $this->adminAuthCheck();
        return view('backend.admin_login');
    }

    /**
     * beautifullife login process.
     */
    public function adminLogin(Request $request)
    {
        //dd(md5($request->password));

        $email = $request->email;
        $password = $request->password;

        $result = DB::table('admins')
            ->where('email', $email)
            ->where('password', md5($password))
            ->first();
        //dd($result);
        //        $check = $result->activation_status;
        //        echo "<pre>";
        //        print_r($result);
        //        exit();

        if ($result) {
            //            if ($check == "1") {
            if ($result->status == "1") {
                Session::put('admin_name', $result->name);
                Session::put('admin_id', $result->id);
                Session::put('access_level', $result->access_level);
                return Redirect::to('/dashboard');
                //            } elseif ($check == "0") {
            } elseif ($result->status == "0") {
                Session::put('exception', 'Account Suspended, Please Contact Admin');
                return Redirect::to('/admin-panel');
            }
        } else {
            Session::put('exception', 'Invalid Login Detail...!!!');
            return Redirect::to('/admin-panel');
        }
    }

    /**
     * for authentication
     */
    public function adminAuthCheck()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return redirect()->route('admin_dashboard');
        } else {
            return;
        }
    }
}
