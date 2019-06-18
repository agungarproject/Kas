<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barang;
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
        return view('admin.index');

    }

    public function dashboard()
    {
        $user = User::count();
        $barang = Barang::count();

        return view('dashboard.index',['user' => $user],['barang' => $barang]);
    }
}
