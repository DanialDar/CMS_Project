<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent_id = Auth::user()->id;
        // $customers = DB::table('customers')->where('agent_id', $agent_id)->get();
        $customers = DB::table('customers')->get();
        return view('customers.index',compact(['customers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $_POST['title'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $marital_status = $_POST['marital_status'];
        $birth_date = date('Y-m-d', strtotime($_POST['birth_date']));
        $postal_address = $_POST['postal_address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $current_status = "pending";
        $agent_id = Auth::user()->id;

        DB::insert('insert into customers (title,name,email,contact_number,marital_status,birth_date,postal_address,city,country,agent_id,current_status) values(?,?,?,?,?,?,?,?,?,?,?)',[$title,$name,$email,$contact_number,$marital_status,$birth_date,$postal_address,$city,$country,$agent_id,$current_status]);

        $id = DB::getPdo()->lastInsertId();

        $role_id = 5;
        $password = Hash::make($_POST['password']);
        DB::insert('insert into users (name,email,role_id,password,customer_id) values(?,?,?,?,?)',[$name,$email,$role_id,$password,$id]);
        return redirect('/customers');
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
        $customer = Customer::find($id);
        $loginUsers = DB::table('users')->where('customer_id', $customer->id)->get();
        return view('customers.edit',compact(['customer', 'loginUsers']));
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
        $customer = Customer::find($id);
        $customer->title = $request->input("title");
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->contact_number = $request->input("contact_number");
        $customer->marital_status = $request->input("marital_status");
        $customer->birth_date = date('Y-m-d', strtotime($request->input("birth_date")));
        $customer->postal_address = $request->input("postal_address");
        $customer->city = $request->input("city");
        $customer->country = $request->input("country");
        $customer->current_status = "pending";
        $customer->agent_id = Auth::user()->id;
        $customer->save();

        $customer_id = $request->input("customer_id");
// dd($customer_id);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 5;
        $password = Hash::make($_POST['password']);
        DB::table('users')
            ->where('customer_id', $customer_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);

        return redirect('/customers');
    }

    public function updateforcustomer(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->title = $request->input("title");
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->contact_number = $request->input("contact_number");
        $customer->marital_status = $request->input("marital_status");
        $customer->birth_date = date('Y-m-d', strtotime($request->input("birth_date")));
        $customer->postal_address = $request->input("postal_address");
        $customer->city = $request->input("city");
        $customer->country = $request->input("country");
        $customer->current_status = "pending";

        $customer->save();

        $customer_id = $request->input("customer_id");
// dd($customer_id);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 5;
        $password = Hash::make($_POST['password']);
        DB::table('users')
            ->where('customer_id', $customer_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);

        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        DB::table('users')->where('customer_id', $customer->id)->delete();

        return redirect('/customers');
    }

// for customers pool
    public function display()
    {
        // $customers = DB::table('customers')->where('agent_id', $agent_id)->get();
        $customers = DB::table('customers')->where('current_status', 'pending')->get();
        return view('customerspool.index',compact(['customers']));
    }
    public function editpool($id)
    {
        $customer = Customer::find($id);
        $loginUsers = DB::table('users')->where('customer_id', $customer->id)->get();
        $creditors = Db::table('creditors')->get();
        return view('customerspool.edit',compact(['customer', 'loginUsers','creditors']));
    }
    public function updateforcustomerpool(Request $request, $id)
    {
        $customer = Customer::find($id);

        $customer->total_income = $request->input("total_income");
        $customer->expenditure = $request->input("total_expenditure");
        $customer->current_status ='processing';
        $customer->creditor =$request->input("creditor");

        $customer->save();

        return redirect('/');
    }


    //for customers processed
    public function process()
    {
        // $customers = DB::table('customers')->where('agent_id', $agent_id)->get();
        $customers = DB::table('customers')->where('current_status', 'processing')->get();
        return view('customersprocessed.index',compact(['customers']));
    }

}
