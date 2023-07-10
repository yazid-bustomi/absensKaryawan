<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $role = Auth::user()->role;

        if ($role == 'karyawan') {
            return redirect('/users');

        } else if($role == 'admin'){
           return redirect('/admin');

        }else{
            return view('auth.login');
        }
    }

}
