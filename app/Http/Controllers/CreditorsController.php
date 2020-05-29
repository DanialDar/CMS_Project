<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Creditor;
use App\User;
use Illuminate\Support\Facades\DB;

class CreditorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditors = DB::table('creditors')->get();
        return view('creditors.index',compact(['creditors']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creditors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['postal_address'];
        $cont_number = $_POST['contact_number'];
        DB::insert('insert into creditors (name,email,postal_address,contact_number) values(?,?,?,?)',[$name,$email,$address,$cont_number]);
        return redirect('/creditors');
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
        $creditor = Creditor::find($id);
        return view('creditors.edit',compact(['creditor']));
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
        $creditor = Creditor::find($id);
        $creditor->name = $request->input("name");
        $creditor->email = $request->input("email");
        $creditor->postal_address = $request->input("postal_address");
        $creditor->contact_number = $request->input("contact_number");
        $creditor->save();
        return redirect('/creditors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creditor = Creditor::findOrFail($id);
        $creditor->delete();
        return redirect('/creditors');
    }
}
