<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
session_start();

class AdminControler extends Controller
{
    //
    public function index()
    {
      return view('admin_login');
    }
    public function show_dashboard()
    {
      return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
       $email = $request->admin_email;
       $password = $request->admin_password;
       $result = DB::table('tbl_admin')->where('admin_email', $email)->where('admin_password',$password)->first();
          //  echo "<pre>";
          //  print_r($result);
          //  echo "</pre>";
          //  echo $email;
        if($result)
        {
          Session::put('admin_name', $result->admin_name);
          Session::put('admin_id', $result->admin_id);
          return Redirect::to('/dashboard');   
        }
       else
       {
        // Session::put('message', 'Người dùng này không tồn tại, mời nhập lại');
         return Redirect::to('/admin');
       }
    }
    public function logout()
    {

    }
}
