<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\User;
use\Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function service_index()
    {
        return view('Home/service');
    }
    public function reservation_index()
    {
        return view('Home/reservation');
    }
    public function aboutus_index()
    {
        return view('Home/aboutus');
    }
    public function home_index()
    {
        return view('Home/home');
    }
//-------------------------------------------------
    public function adminhome_index()
    {
        return view('Admin/adminhome');
    }

    public function adminlogin_index()
    {
        return view('Admin/adminlogin');
    }

    public function signin(Request $request)
    {
        if(Auth::attempt(['username'=> $request['username'],'password'=>$request['password']]))
        {
            echo "success";
            //$request->session()->set('username','$username');
            return redirect()->action('UserController@adminhomepage');
        }
        return redirect()->back();
    }
    public function adminhomepage()
    {
        return view('Admin/adminhome');
    }

    public function adminlogout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return view('Admin/adminlogin');
    }


}