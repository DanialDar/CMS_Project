<?php

namespace App\Http\Controllers;

use App\Model\LeadIntroducer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $leads = DB::table('lead_introducers')->get();
        $creditors = DB::table('creditors')->get();
        $customers = DB::table('customers')->get();
        $users = DB::table('users')->get();

        return view('dashboard',compact('leads', 'creditors','customers', 'users'));
    }
    public function dashboard()
    {
        $leads = DB::table('lead_introducers')->get();
        $creditors = DB::table('creditors')->get();
        $customers = DB::table('customers')->get();
        $users = DB::table('users')->get();
        return view('dashboard',compact('leads', 'creditors','customers', 'users'));
    }
}
