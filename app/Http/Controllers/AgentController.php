<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $agents = DB::table('agents')->where('lead_introducer_id', $id)->get();;
        return view('agent.index',compact(['agents']));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agent.create');
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
        $agent_name = $_POST['agent_name'];
        $agent_number = $_POST['contact_number'];
        $email = $_POST['agent_email'];
        $lead_id = Auth::user()->id;


        DB::insert('insert into agents (name,email,contact_number,lead_introducer_id) values(?,?,?,?)',[$agent_name,$email,$agent_number,$lead_id]);

        $id = DB::getPdo()->lastInsertId();


        $role_id = 4;
        $password = Hash::make($_POST['password']);
        DB::insert('insert into users (name,email,role_id,password,agent_id) values(?,?,?,?,?)',[$agent_name,$email,$role_id,$password,$id]);

        return redirect('/');
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
