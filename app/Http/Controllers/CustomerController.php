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
        $customers = DB::table('customers')->where('agent_id', $agent_id)->get();
        // $customers = DB::table('customers')->get();
        return view('customers.index',compact(['customers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditors = Db::table('creditors')->get();
        return view('customers.create',compact(['creditors']));
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
        $account_number = $_POST['account_number'];
        $creditor = $_POST['creditor'];
        $owed_amount = $_POST['owed_amount'];
        $total_income = $_POST['total_income'];
        $income_desc = $_POST['income_desc'];
        $income_note = $_POST['income_note'];
        $income_date = $_POST['income_date'];
        $payment_method = $_POST['payment_method'];
        $total_expenditure = $_POST['total_expenditure'];
        $expenditure_desc = $_POST['expenditure_desc'];
        $expenditure_note = $_POST['expenditure_note'];
        $current_status = "pending";
        $agent_id = Auth::user()->id;

        DB::insert('insert into customers (title,name,email,contact_number,marital_status,birth_date,account_number,creditor,owed_amount,total_income,income_desc,income_note,income_date,payment_method,total_expenditure,expenditure_desc,expenditure_note,agent_id,current_status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$title,$name,$email,$contact_number,$marital_status,$birth_date,$account_number,$creditor,$owed_amount,$total_income,$income_desc,$income_note,$payment_method,$income_date,$total_expenditure,$expenditure_desc,$expenditure_note,$agent_id,$current_status]);

        $id = DB::getPdo()->lastInsertId();

        $role_id = 5;
        $password = Hash::make($_POST['password']);
        DB::insert('insert into users (name,email,role_id,password,customer_id) values(?,?,?,?,?)',[$name,$email,$role_id,$password,$id]);

        // customer_id,house_no,street_no,area,city,country,postal_address
        
        $house_no = $_POST['house_no'];
        $street_no = $_POST['street_no'];
        $area = $_POST['area'];
        $postal_address = $_POST['postal_address'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        DB::insert('insert into addresses ( customer_id,house_no,street_no,area,city,country,postal_address) values(?,?,?,?,?,?,?)',[$id,$house_no,$street_no,$area,$city,$country,$postal_address]);

        $performed_by = Auth::user()->name;
        $performer_role = "Agent";
        $performed_on = $_POST['name'];
        $performed_on_role = "Customer";
        $action = "Creates";

        DB::insert('insert into logs ( performed_by,performer_role,performed_on,performed_on_role,action) values(?,?,?,?,?)',[$performed_by,$performer_role,$performed_on,$performed_on_role,$action]);

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
        $creditors = Db::table('creditors')->get();
        $loginUsers = DB::table('users')->where('customer_id', $customer->id)->get();
        $addresses = DB::table('addresses')->where('customer_id', $customer->id)->get();
        // return view('testing',compact(['customer', 'loginUsers','addresses','creditors']));
        return view('customers.edit',compact(['customer', 'loginUsers','addresses','creditors']));
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
        $pass = DB::table('users')->where('customer_id', $customer->id)->pluck('password');

        $customer->title = $request->input("title");
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->contact_number = $request->input("contact_number");
        $customer->marital_status = $request->input("marital_status");
        $customer->birth_date = date('Y-m-d', strtotime($request->input("birth_date")));
        $customer->account_number = $request->input("account_number");
        $creditor = $_POST['creditor'];
        $customer->owed_amount = $request->input("owed_amount");
        $customer->total_income = $request->input("total_income");
        $customer->income_desc = $request->input("income_desc");
        $customer->income_note = $request->input("income_note");
        $customer->income_date = $request->input("income_date");
        $customer->payment_method = $request->input("payment_method");
        $customer->total_expenditure = $request->input("total_expenditure");
        $customer->expenditure_desc = $request->input("expenditure_desc");
        $customer->expenditure_note = $request->input("expenditure_note");
        $changes_array = $creditor->getChanges();
        if(Auth::user()->role_id == 3){
            $customer->current_status = "processing";
            $performer_role = "Super-Agent";
        }
        elseif(Auth::user()->role_id == 4){
            $customer->current_status = "pending";
            $performer_role = "Agent";
        }
        elseif(Auth::user()->role_id == 5){
            $customer->current_status = "pending";
            $performer_role = "Customer";
        }
        // $customer->agent_id = Auth::user()->id;

        if($pass[0] == $request->input("password")){
            $password = $request->input("password");
        }
        elseif($pass[0] != $request->input("password")){
            $password = Hash::make($request->input("password"));
        }

        $customer->save();

        $customer_id = $request->input("customer_id");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role_id = 5;
        DB::table('users')
            ->where('customer_id', $customer_id)
            ->update(['name' => $name, 'email' => $email, 'role_id' => $role_id, 'password' => $password ]);


        $house_no = $_POST['house_no'];
        $street_no = $_POST['street_no'];
        $area = $_POST['area'];
        $postal_address = $_POST['postal_address'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        DB::table('addresses')
        ->where('customer_id', $customer_id)
        ->update(['house_no' => $house_no, 'street_no' => $street_no, 'area' => $area, 'postal_address' => $postal_address, 'city' => $city, 'country' => $country ]);

        
        $changes = serialize($changes_array);
        $performed_by = Auth::user()->name;
        // $performer_role = "Agent";
        $performed_on = $_POST['name'];
        $performed_on_role = "Customer";
        $action = "Updates";

        DB::insert('insert into logs ( performed_by,performer_role,performed_on,performed_on_role,action,changes) values(?,?,?,?,?,?)',[$performed_by,$performer_role,$performed_on,$performed_on_role,$action,$changes]);

        if(Auth::user()->role_id == 3){
            return redirect('/customerspool');
            }
        elseif(Auth::user()->role_id == 4){
            return redirect('/customers');
        }
        elseif(Auth::user()->role_id == 5){
            return redirect('/dashboard');
        }
        
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
