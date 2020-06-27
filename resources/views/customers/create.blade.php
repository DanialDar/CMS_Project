@extends('layouts.master')

@section('content')
       <style>
    * {box-sizing: border-box}
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial;
    }
    .tablink {
      background-color: #28a745;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      font-size: 17px;
      width: 20%;
    }
    .tablink:hover {
      background-color: #777;
    }
    .tabcontent {
      color: black;
      display: none;
      padding: 100px 20px 20px 20px;
      height: 100%;
    }
</style>


<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Create Customer</h3>
    </div>
    <br>
    <!-- /.box-header -->
            <button class="tablink" onclick="openPage('basic_detail', this, 'grey')" id="defaultOpen">Basic Detail</button>
            <button class="tablink" onclick="openPage('creditor_info', this, 'grey')" >Creditor Info</button>
            <button class="tablink" onclick="openPage('income', this, 'grey')">Income</button>
            <button class="tablink" onclick="openPage('expenditure', this, 'grey')">Expenditure</button>
            <button class="tablink" onclick="openPage('summary', this, 'grey')">Summary</button>
        <!-- form start -->
        <form method="POST" action="/customer" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="box-body">


            <div id="basic_detail" class="tabcontent">


            <div class="row">
                <div class="col-md-3">
                    <label for="title" class="control-label" style="padding-left:50px">Title</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Customer Title">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="name" class="control-label" style="padding-left:50px">Full Name</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Customer Name">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">
                    <label for="email" class="control-label" style="padding-left:50px">Login Email</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Customer Email">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="password" class="control-label" style="padding-left:50px">Login Password</label>
                </div>
                <div class="col-md-8">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Customer Password">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="marital_status" class="control-label" style="padding-left:50px">Marital Status</label>
                </div>
                <div class="col-md-8">
                    <select class="form-control" name="marital_status" id="marital_status">
                        <option value="Married" selected>Married</option>
                        <option value="Un-Married">Un-Married</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="birth_date" class="control-label" style="padding-left:50px">Date Of Birth</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="birth_date" id="datepicker" placeholder="mm/dd/yyyy">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="address" class="control-label" style="padding-left:50px">Address</label>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-md-6">
                                <label for="house_no" class="control-label">House#</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="house_no" id="house_no">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-6">
                                <label for="street_no" class="control-label">street#</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="street_no" id="street_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label for="area" class="control-label">Area</label>
                            </div>
                            <div class="col-md-8"  style="max-width: 100%">
                                <input type="text" class="form-control" name="area" id="area">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-md-6">
                                <label for="city" class="control-label">City</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="city" id="city">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-6">
                                <label for="country" class="control-label">Country</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="country" id="country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4"  style="max-width: 100%">
                                <label for="postal_address" class="control-label">Postal Address</label>
                            </div>
                            <div class="col-md-8"  style="max-width: 100%">
                                <textarea class="form-control" name="postal_address" id="postal_address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            </div>
            <div id="creditor_info" class="tabcontent">
                <div class="row">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Creditor</button>
                </div>
                <div class="row">


                </div>
                <br>


            </div>
            <div id="income" class="tabcontent">
                <div class='input-form'>

                    <div class="row">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalIncome">Add Income</button>
                    </div>


                <br>
            </div>
            </div>
            <div id="expenditure" class="tabcontent">
                <div  class='input-form2'>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalExpenditure">Add Expenditure</button>

            </div>
            </div>
            <div id="summary" class="tabcontent">
                <h3>About</h3>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Total Income</th>
                        <th>Total Expenditure</th>
                        <th>Savings</th>
                        <th>Eligibility Status</th>
                        <th>Total Owed Amount</th>
                        <th>Our Fee</th>
                      </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($customers as $customer) --}}
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          {{-- @if($customer->current_status == "pending")
                              <td><span class="label label-warning">{{$customer->current_status}}</span></td>
                          @elseif($customer->current_status == "processing")
                              <td><span class="label label-primary">{{$customer->current_status}}</span></td>
                          @elseif($customer->current_status == "confirm")
                              <td><span class="label label-success">{{$customer->current_status}}</span></td>
                          @endif --}}
                          {{-- <td>
                          <a style="margin-right:20px" href="/customers/edit/{{$customer->id}}"><i class="nav-icon fas fa-edit"></i></a> --}}
                          {{-- <a style="margin-right:20px" href=""> --}}
                            {{-- <i class="nav-icon fas fa-trash"> --}}
                                {{-- <a onclick="clicked({{$customer->id}})" href="#" style="text-decoration: none">
                                  <i class="nav-icon fas fa-trash">
                                    <form method="POST" id="del{{$customer->id}}" action="/customer/{{$customer->id}}">
                                      @csrf
                                      <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                  </i>
                                </a>
                          </td> --}}
                        </tr>
                        {{-- @endforeach --}}

                      </tbody>
                    </table>
                  </div>
                <p>Who we are and what we do.</p>
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Schedule Of Payments</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Status</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Overtime</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Additional</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Total</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Paid</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Paid Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Fees</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Org. Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Pay Method</th></tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 dtr-control">0</td>
                                                        <td>6/9/20</td>
                                                        <td>10000</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="sorting_1 dtr-control">17000</td>
                                                        <td>Paid</td>
                                                        <td>6/9/20</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>A</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1 dtr-control">0</td>
                                                        <td>6/9/20</td>
                                                        <td>10000</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="sorting_1 dtr-control">17000</td>
                                                        <td>Paid</td>
                                                        <td>6/9/20</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>A</td></tr><tr role="row" class="odd">
                                                        <td class="sorting_1 dtr-control">0</td>
                                                        <td>6/9/20</td>
                                                        <td>10000</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="sorting_1 dtr-control">17000</td>
                                                        <td>Paid</td>
                                                        <td>6/9/20</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>A</td></tr><tr role="row" class="even">
                                                        <td class="sorting_1 dtr-control">0</td>
                                                        <td>6/9/20</td>
                                                        <td>10000</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td class="sorting_1 dtr-control">17000</td>
                                                        <td>Paid</td>
                                                        <td>6/9/20</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                        <td>A</td>   </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Status</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Overtime</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Additional</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Total</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Paid</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Paid Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Fees</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Org. Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Pay Method</th></tr>
                                                    </tfoot>
                                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>

        </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button class="btn btn-info">
                <a href="/agent" style="color:white">Cancel</a>
            </button>
            <button type="submit" class="btn btn-success">Create</button>

          </div>
          <!-- /.box-footer -->
        </form>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <form action="/creditorAdd" id="addCreditor" method="POST" enctype="multipart/form-data" onsubmit=" " >
        @csrf
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Creditor Form</h4>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <label for="creditor" class="control-label" style="padding-left:50px">Creditor </label>
                </div>
                <div class="col-md-8">
                    <select class="form-control"  name="creditor" id="creditor">
                        <option value="none" selected> Please Select Creditor</option>
                        @foreach($creditors as $creditor)
                            <option  value="{{$creditor->name}}">{{$creditor->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="account_number" class="control-label" style="padding-left:50px">Account Number</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="account_number" id="account_number" placeholder="Enter Customer's Account Number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="owed_amount" class="control-label" style="padding-left:50px">Owed</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="owed_amount" id="owed_amount" placeholder="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="payment_method" class="control-label" style="padding-left:50px">Payment Method</label>
                </div>
                <div class="col-md-8">
                    <select class="form-control" name="payment_method" id="payment_method">
                        <option value="online" selected>Online</option>
                        <option value="cash">Cash</option>
                    </select>
                    {{-- <input type="text" class="form-control" name="payment_method" id="payment_method" placeholder="Select Customer's Payment Method"> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-success" >Add</button>
            </div>
        </div>
    </form>
    </div>
</div>

       <div class="modal fade" id="myModalExpenditure" role="dialog">
           <form action="/expenditureAdd" id="addIncome" method="POST" enctype="multipart/form-data" onsubmit=" " >
               @csrf
           <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title">Add Expenditure Form</h4>
                   </div>


       <div class="row">
           <div class="col-md-3">
               <label for="expenditure_desc" class="control-label" style="padding-left:50px">Description</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control" name="expenditure_desc" id="expenditure_desc" placeholder="Customer's Expenditure Description">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="total_expenditure" class="control-label" style="padding-left:50px">Total Expenditure</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control" name="total_expenditure" id="total_expenditure" placeholder="Customer's Total Expenditure">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="expenditure_note" class="control-label" style="padding-left:50px">Note</label>
           </div>
           <div class="col-md-8">
               <textarea class="form-control" name="expenditure_note" id="expenditure_note" placeholder="Note If any"></textarea>
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="expenditure_proof" class="control-label" style="padding-left:50px">Proof Attachment</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control" name="expenditure_proof" id="expenditure_proof" placeholder="">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="expenditure_schedule" class="control-label" style="padding-left:50px">Expenditure Schedule</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control" name="expenditure_schedule" id="expenditure_schedule" placeholder="Enter Your Expenditure Schedule">
           </div>
       </div>
       <br>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <button type="submit"  class="btn btn-success" >Add</button>
                   </div>
               </div></div></form></div>


       <!-- Modal -->
       <div class="modal fade" id="myModalIncome" role="dialog">
           <form action="/incomeAdd" id="addIncome" method="POST" enctype="multipart/form-data" onsubmit=" " >
               @csrf

               <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title">Add Income Form</h4>
                   </div>

       <div class="row">
           <div class="col-md-3">
               <label for="income_desc" class="control-label" style="padding-left:50px">Description</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control txt" name="income_desc" id="incomeDesc_1" placeholder="Customer's Income Description">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="total_income" class="control-label" style="padding-left:50px">Total Income</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control txt" name="total_income" id="totalIncome_1"   placeholder="Customer's Total Income">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="income_note" class="control-label" style="padding-left:50px">Note</label>
           </div>
           <div class="col-md-8">
               <textarea class="form-control txt" name="income_note" id="incomeNote_1" placeholder="Note If any"></textarea>
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="income_proof" class="control-label" style="padding-left:50px">Proof Attachment</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control txt"  name="income_proof" id="incomeProof_1" placeholder="">
           </div>
       </div>
       <br>
       <div class="row">
           <div class="col-md-3">
               <label for="income_date" class="control-label" style="padding-left:50px">Date of Income</label>
           </div>
           <div class="col-md-8">
               <input type="text" class="form-control txt" name="income_date" id="incomeDate_1" placeholder="Enter Your Income Day">
           </div>
       </div>    <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <button type="submit"  class="btn btn-success" >Add</button>
                   </div></div></div></form></div>
       <script>
    $(document).ready(function(){

        var count = 0;

        $('#user_dialog').dialog({
            autoOpen:false,
            width:400
        });

        $('#add').click(function(){
            $('#user_dialog').dialog('option', 'title', 'Add Data');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#error_first_name').text('');
            $('#error_last_name').text('');
            $('#first_name').css('border-color', '');
            $('#last_name').css('border-color', '');
            $('#save').text('Save');
            $('#user_dialog').dialog('open');
        });

        $('#save').click(function(){
            var error_first_name = '';
            var error_last_name = '';
            var first_name = '';
            var last_name = '';
            if($('#first_name').val() == '')
            {
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').css('border-color', '#cc0000');
                first_name = '';
            }
            else
            {
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').css('border-color', '');
                first_name = $('#first_name').val();
            }
            if($('#last_name').val() == '')
            {
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').css('border-color', '#cc0000');
                last_name = '';
            }
            else
            {
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').css('border-color', '');
                last_name = $('#last_name').val();
            }
            if(error_first_name != '' || error_last_name != '')
            {
                return false;
            }
            else
            {
                if($('#save').text() == 'Save')
                {
                    count = count + 1;
                    output = '<tr id="row_'+count+'">';
                    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
                    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
                    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
                    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
                    output += '</tr>';
                    $('#user_data').append(output);
                }
                else
                {
                    var row_id = $('#hidden_row_id').val();
                    output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
                    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
                    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
                    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
                    $('#row_'+row_id+'').html(output);
                }

                $('#user_dialog').dialog('close');
            }
        });

        $(document).on('click', '.view_details', function(){
            var row_id = $(this).attr("id");
            var first_name = $('#first_name'+row_id+'').val();
            var last_name = $('#last_name'+row_id+'').val();
            $('#first_name').val(first_name);
            $('#last_name').val(last_name);
            $('#save').text('Edit');
            $('#hidden_row_id').val(row_id);
            $('#user_dialog').dialog('option', 'title', 'Edit Data');
            $('#user_dialog').dialog('open');
        });

        $(document).on('click', '.remove_details', function(){
            var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this row data?"))
            {
                $('#row_'+row_id+'').remove();
            }
            else
            {
                return false;
            }
        });

        $('#action_alert').dialog({
            autoOpen:false
        });

        $('#user_form').on('submit', function(event){
            event.preventDefault();
            var count_data = 0;
            $('.first_name').each(function(){
                count_data = count_data + 1;
            });
            if(count_data > 0)
            {
                var form_data = $(this).serialize();
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        $('#user_data').find("tr:gt(0)").remove();
                        $('#action_alert').html('<p>Data Inserted Successfully</p>');
                        $('#action_alert').dialog('open');
                    }
                })
            }
            else
            {
                $('#action_alert').html('<p>Please Add atleast one data</p>');
                $('#action_alert').dialog('open');
            }
        });

    });
</script>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}
document.getElementById("defaultOpen").click();

</script>
{{-- <br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Create Lead Introducers Company</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/customer" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      <div class="box-body">
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="title" class="control-label" style="padding-left:50px">Customer Title</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Customer Title">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Customer Name</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Customer Name">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Customer Login Email</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Customer Email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="password" class="control-label" style="padding-left:50px">Customer Login Password</label>
            </div>
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Customer Password">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="marital_status" class="control-label" style="padding-left:50px">Marital Status</label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="marital_status" id="marital_status">
                    <option value="Married" selected>Married</option>
                    <option value="Un-Married">Un-Married</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="birth_date" class="control-label" style="padding-left:50px">Date Of Birth</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="birth_date" id="datepicker" placeholder="mm/dd/yyyy">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="postal_address" class="control-label" style="padding-left:50px">Postal Address</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="postal_address" id="postal_address" placeholder="Enter Customer Postal Address">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="city" class="control-label" style="padding-left:50px">City</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter Customer's City">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="country" class="control-label" style="padding-left:50px">Country</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="country" id="country" placeholder="Enter Customer's Country">
            </div>
        </div>

        <br>
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-info">
            <a href="/agent" style="color:white">Cancel</a>
        </button>
        <button type="submit" class="btn btn-success">Create</button>

      </div>
      <!-- /.box-footer -->
    </form>
  </div>--}}

<link rel="stylesheet" href="/css/ionicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="/js/adminlte.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/fastclick.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script>
    $('#datepicker').datepicker({
      autoclose: true
    })

</script>
<script>$(document).ready(function(){

        $('#but_add').click(function(){

            // Selecting last id
            var lastname_id = $('.input-form input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');

            // New index
            var index = Number(split_id[1]) + 1;

            // Create clone
            var newel = $('.input-form:last').clone(true);

            // Set id of new element
           // $(newel).find('input[type=text]:nth-child(1)').attr("id","incomeDesc_"+index);
            $(newel).find('input[type=text]:nth-child(2)').attr("id","totalIncome_"+index);
            $(newel).find('input[type=text]:nth-child(3)').attr("id","incomeNote_"+index);
            $(newel).find('input[type=text]:nth-child(4)').attr("id","incomeProof_"+index);
            $(newel).find('input[type=text]:nth-child(5)').attr("id","incomeDate_"+index);
            // Set value
           // $(newel).find('input[type=text]:nth-child(1)').val("incomeDesc_"+index);
            $(newel).find('input[type=text]:nth-child(2)').val("totalIncome_"+index);
            $(newel).find('input[type=text]:nth-child(3)').val("incomeNote_"+index);
            $(newel).find('input[type=text]:nth-child(4)').val("incomeProof_"+index);
            $(newel).find('input[type=text]:nth-child(5)').val("incomeDate_"+index);

            // Insert element
            $(newel).insertAfter(".input-form:last");
        });

        $('#but_add2').click(function(){

            // Selecting last id
            var lastname_id = $('.input-form2 input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');

            // New index
            var index = Number(split_id[1]) + 1;

            // Create clone
            var newel = $('.input-form2:last').clone(true);

            // Set id of new element
            // $(newel).find('input[type=text]:nth-child(1)').attr("id","incomeDesc_"+index);
            $(newel).find('input[type=text]:nth-child(2)').attr("id","totalIncome_"+index);
            $(newel).find('input[type=text]:nth-child(3)').attr("id","incomeNote_"+index);
            $(newel).find('input[type=text]:nth-child(4)').attr("id","incomeProof_"+index);
            $(newel).find('input[type=text]:nth-child(5)').attr("id","incomeDate_"+index);
            // Set value
            // $(newel).find('input[type=text]:nth-child(1)').val("incomeDesc_"+index);
            $(newel).find('input[type=text]:nth-child(2)').val("totalIncome_"+index);
            $(newel).find('input[type=text]:nth-child(3)').val("incomeNote_"+index);
            $(newel).find('input[type=text]:nth-child(4)').val("incomeProof_"+index);
            $(newel).find('input[type=text]:nth-child(5)').val("incomeDate_"+index);

            // Insert element
            $(newel).insertAfter(".input-form2:last");
        });

    });
</script>
{{-- <!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> --}}
  @endsection
