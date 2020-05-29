<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SuperAgent;
use App\User;
use Illuminate\Support\Facades\DB;
use Hash;

class SuperAgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s_agents = DB::table('super_agents')->get();
        return view('super-agents.index',compact(['s_agents']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super-agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("hello");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $designation = $_POST['designation'];
        DB::insert('insert into super_agents (name,email,contact,designation) values(?,?,?,?)',[$name,$email,$contact,$designation]);

        $id = DB::getPdo()->lastInsertId();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 3;
        $password = Hash::make($_POST['password']);
        DB::insert('insert into users (name,email,role_id,password,super_agent_id) values(?,?,?,?,?)',[$name,$email,$role_id,$password,$id]);

        return redirect('/super-agents');
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
        $s_agent = SuperAgent::find($id);
        $loginUsers = DB::table('users')->where('super_agent_id', $s_agent->id)->get();
        return view('super-agents.edit',compact(['s_agent', 'loginUsers']));  
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
        $s_agent = SuperAgent::find($id);
        $s_agent->name = $request->input("name");
        $s_agent->email = $request->input("email");
        $s_agent->contact = $request->input("contact");
        $s_agent->designation = $request->input("designation");
        $s_agent->save();

        $super_agent_id = $request->input("super_agent_id");

        // dd($super_agent_id);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 3;
        $password = $_POST['password'];
        DB::table('users')
            ->where('super_agent_id', $super_agent_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);

        return redirect('/super-agents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s_agent = SuperAgent::findOrFail($id);
        $s_agent->delete();

        DB::table('users')->where('super_agent_id', $s_agent->id)->delete();

        return redirect('/super-agents');
    }
}
