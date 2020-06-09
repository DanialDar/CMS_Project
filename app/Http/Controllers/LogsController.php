<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LeadIntroducer;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = DB::table('logs')->get();
        foreach($logs as $log){
            $id = $log->id;
            $performed_by_user = DB::table('users')->where('id', $log->created_by)->pluck('name');
            $performed_by = $performed_by_user[0];
            $performed_on_user = DB::table('users')->where('id', $log->user_id)->pluck('name');
            $performed_on = $performed_on_user[0];
            $action = $log->action;
            $created_at = date('Y-m-d', strtotime($log->created_at));
            // $created_by = $log->created_at;
            // dd($performed_by);
        }
        
        return view('logs.index',compact(['id','performed_by','performed_on','action','created_at']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
