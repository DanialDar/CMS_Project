<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Model\Agent;
use App\User;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lead_introducer_id = Auth::user()->id;
        $agents = DB::table('agents')->where('lead_introducer_id', $lead_introducer_id)->get();
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

        return redirect('/agent');
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
        $agent = Agent::find($id);
        $loginUsers = DB::table('users')->where('agent_id', $agent->id)->get();
        return view('agent.edit',compact(['agent', 'loginUsers']));
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
        $agent = Agent::find($id);
        // dd($request->input("name"));
        $agent->name = $request->input("name");
        $agent->email = $request->input("email");
        $agent->contact_number = $request->input("contact_number");
        $agent->lead_introducer_id = Auth::user()->id;
        $agent->save();

        $agent_id = $request->input("agent_id");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 4;
        $password = Hash::make($_POST['password']);
        DB::table('users')
            ->where('agent_id', $agent_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);

        // $agents = DB::table('agents')->where('lead_introducer_id', $agent->lead_introducer_id)->get();;
        return redirect('/agents');
        // return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();

        DB::table('users')->where('agent_id', $agent->id)->delete();

        return redirect('/agents');
    }
}
