<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LeadIntroducer;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LeadIntroducersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = DB::table('lead_introducers')->get();
        return view('lead_introducers.index',compact(['companies']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lead_introducers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comp_name = $_POST['company_name'];
        $address = $_POST['address'];
        $cont_name = $_POST['contact_name'];
        $cont_number = $_POST['contact_number'];
        $comp_code = $_POST['company_code'];
        DB::insert('insert into lead_introducers (company_name,address,contact_name,contact_number,company_code) values(?,?,?,?,?)',[$comp_name,$address,$cont_name,$cont_number,$comp_code]);
        $id = DB::getPdo()->lastInsertId();

        $name = $_POST['company_name'];
        $email = $_POST['contact_email'];
        $role_id = 2;
        $password =Hash::make($_POST['contact_password']);
        DB::insert('insert into users (name,email,role_id,password,company_id) values(?,?,?,?,?)',[$name,$email,$role_id,$password,$id]);
        return redirect('/lead-introducers');

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
        $company = LeadIntroducer::find($id);
        $loginUsers = DB::table('users')->where('company_id', $company->id)->get();
        return view('lead_introducers.edit',compact(['company', 'loginUsers']));
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
        $company = LeadIntroducer::find($id);
        $company->company_name = $request->input("company_name");
        $company->address = $request->input("address");
        $company->contact_name = $request->input("contact_name");
        $company->contact_number = $request->input("contact_number");
        $company->company_code = $request->input("company_code");
        $company->save();

        $company_id = $request->input("company_id");

        $name = $_POST['company_name'];
        $email = $_POST['contact_email'];
        $role_id = 2;
        $password =Hash::make($_POST['contact_password']);
        DB::table('users')
            ->where('company_id', $company_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);

        return redirect('/lead-introducers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = LeadIntroducer::findOrFail($id);
        $company->delete();

        DB::table('users')->where('company_id', $company->id)->delete();

        return redirect('/lead-introducers');
    }
}
