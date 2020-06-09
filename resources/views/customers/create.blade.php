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
                                <label for="house" class="control-label">House#</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="house" id="house">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-6">
                                <label for="street" class="control-label">street#</label>
                            </div>
                            <div class="col-md-6" style="max-width: 100%">
                                <input type="text" class="form-control" name="street" id="street">
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

            {{-- <div class="row">
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
            </div> --}}

            <br>
            </div>
            <div id="creditor_info" class="tabcontent">
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
                        <label for="owed" class="control-label" style="padding-left:50px">Owed</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="owed" id="owed" placeholder="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="payment_method" class="control-label" style="padding-left:50px">Payment Method</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="payment_method" id="payment_method" placeholder="Select Customer's Payment Method">
                    </div>
                </div>
            </div>
            <div id="income" class="tabcontent">
                <div class="row">
                    <div class="col-md-3">
                        <label for="income_desc" class="control-label" style="padding-left:50px">Description</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="income_desc" id="income_desc" placeholder="Customer's Income Description">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="total_income" class="control-label" style="padding-left:50px">Total Income</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="total_income" id="total_income" placeholder="Customer's Total Income">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="income_note" class="control-label" style="padding-left:50px">Note</label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control" name="income_note" id="income_note" placeholder="Note If any"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="income_proof" class="control-label" style="padding-left:50px">Proof Attachment</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="income_proof" id="income_proof" placeholder="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="income_day" class="control-label" style="padding-left:50px">Day of Income</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="income_day" id="income_day" placeholder="Enter Your Income Day">
                    </div>
                </div>
                <br>
            </div>
            <div id="expenditure" class="tabcontent">
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
            </div>
            <div id="summary" class="tabcontent">
                <h3>About</h3>
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
{{-- <!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> --}}
  @endsection
