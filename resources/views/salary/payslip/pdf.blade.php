<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/new_bootstrap.min.css') }}" crossorigin="anonymous"> --}}

    <title>{{config('app.name')}}</title>

    <style>
        .page-break {
            page-break-after: always;
        }
        h4 {
            font-size: 80%;
        }
        h5 {
            font-size: 80%;
        }
        h6 {
            font-size: 80%;
        }

        tbody {
            font-size: 80%;
            margin:0px;
            padding: 5px;
        }

        .table thead tr th, {
            border: 1px solid #000;
            font-size: 80%;
            margin:0px;
            padding: 5px;

        }
        .table tr td {
            border: 1px solid #000;
            font-size: 80%;
            margin:0px;
            padding: 5px;
        }
        #heading{
            font-size: 80%;
            color: #CE7749;
            text-align: center;
        }
        #normal-heading{
            font-size: 70%;
            color: #000
        }
    </style>
</head>
<body onload="window.print()" style="font-family: DejaVu Sans;">

    <h3 class="text-center">@lang('file.Payment History')</h3>


    <h5>{{$company['company_name']}}</h5>
    <h6>{{$company['location']['address1']}}</h6>
    <h6>{{$company['location']['city']}},{{$company['location']['country']['name']}}-{{$company['location']['zip']}}</h6>
    <h6>Phone: {{$company['contact_no']}}| {{trans('file.Email')}}: {{$company['email']}}</h6>
    <hr>

    <div class="center">
        <h5>Employee Profile Details</h5>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><strong class="help-split">{{__('Employee ID')}}: </strong>{{$user['username'] ?? ''}}</td>
                <td><strong class="help-split">{{__('Employee Name')}}: </strong>{{$first_name}} {{$last_name}}</td>
                <td><strong class="help-split">{{__('Payslip NO')}}: </strong>{{$id}}</td>
            </tr>
            <tr>
                <td><strong class="help-split">{{trans('file.Phone')}}: </strong>{{$contact_no}}</td>
                <td><strong class="help-split">{{__('Joining Date')}}: </strong>{{$joining_date}}</td>
                <td><strong class="help-split">{{__('Payslip Type')}}: </strong>{{$payment_type}}</td>

            </tr>
            <tr>
                <td><strong class="help-split">{{trans('file.Company')}}: </strong>{{$company['company_name']}}</td>
                <td><strong class="help-split">{{trans('file.Department')}}: </strong>{{$department['department_name']}}</td>
                <td><strong class="help-split">{{trans('file.Designation')}}: </strong>{{$designation['designation_name']}}
                
                </td>
            </tr>
            </tbody>
        </table>
    </div>
   
    <hr>

    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered text-center">
                <tbody>
                 <thead>
                <tr>
                    <th id="heading" colspan="2">Employee Daily and Monthly {{trans('file.Earnings')}}</th>
                </tr>
                </thead>
                <thead>
                <tr>
                    
                    <th id="normal-heading"><i>Job Descriptions and Allowances</i></th>
                    <th id="normal-heading">{{trans('file.Amount')}}</th>
                </tr>
                </thead>
                </tbody>
                <hr>
                
                
                @php
                    if ($payment_type == 'Monthly')
                    {
                        $total_earnings = $basic_salary;
                    }
                    else
                    {
                        $total_earnings = $hours_amount;
                    }
                @endphp
                
                <div class="center">
                                <h5>{{trans('file.Payslip')}} For The Month Of {{$month_year}}</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                         @if($payment_type == 'Monthly')
                                        <td><strong class="help-split">{{$company['company_name']}}: </strong>{{$company['location']['city']}} Branch</td>
                                        <td><strong class="help-split">{{__('Employee Name')}}: </strong>{{$first_name}} {{$last_name}}</td>
                                        <td><strong class="help-split">{{__('Basic Salary')}} ({{__('Total')}})= </strong>{{$total_earnings}}</td>
                                        @else
                                        <td><strong class="help-split">{{$company['company_name']}}: </strong>{{$company['location']['city']}} Branch</td>
                                        <td><strong class="help-split">{{__('Employee Name')}}: </strong>{{$first_name}} {{$last_name}}</td>
                                        <td><strong class="help-split"> Monthly {{__('Basic Salary')}} ({{__('Total')}})= </strong>{{$total_earnings}}</td>
                                        @endif
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                @if($allowances)
                    @foreach($allowances as $allowance)
                    
                     <div class="center">
                                <h5>Allowances</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split">{{$allowance['allowance_title']}} Allowance</strong></td>
                                        <td><strong class="help-split">Allowance Amount = </strong></td>
                                        <td><strong class="help-split">{{$allowance['allowance_amount']}}</strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        @php
                            $total_earnings = $total_earnings + $allowance['allowance_amount'] ;
                        @endphp
                    @endforeach
                @endif

                @if($commissions)
                    @foreach($commissions as $commission)
                    
                    <div class="center">
                                <h5>Commission</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split">{{$commission['commission_title']}}</strong></td>
                                        <td><strong class="help-split">Commission Amount = </strong></td>
                                        <td><strong class="help-split">{{$commission['commission_amount']}}</strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                       
                        @php
                            $total_earnings = $total_earnings + $commission['commission_amount'] ;
                        @endphp
                    @endforeach
                @endif

                @if($other_payments)
                    @foreach($other_payments as $other_payment)
                    
                    <div class="center">
                                <h5>Over Time</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split">{{$other_payment['other_payment_title']}}</strong></td>
                                        <td><strong class="help-split">Overt Time Amount = </strong></td>
                                        <td><strong class="help-split">{{$other_payment['other_payment_amount']}}</strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        @php
                            $total_earnings = $total_earnings + $other_payment['other_payment_amount'] ;
                        @endphp
                    @endforeach
                @endif
                
                <div><strong>Salary Per Day</strong></div>

                @if($overtimes)
                    @foreach($overtimes as $overtime)
                    
                             <!--div class="center">
                                <h5>{{trans('file.Payslip')}}: {{$month_year}}</h5>
                            </div-->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split">{{$overtime['month_year']}}</strong></td>
                                        <td><strong class="help-split">{{$overtime['overtime_designation']}}</strong></td>
                                        <td><strong class="help-split">{{$overtime['job_location']}}</strong></td>
                                        <td><strong class="help-split">Actual Work Done = </strong>{{$overtime['employee_actual_work_done']}}</td>
                                        <td><strong class="help-split">Cost = </strong>{{$overtime['overtime_rate']}}</td>
                                         <td><strong class="help-split">Total Work Done = </strong>{{$overtime['rate_actual_work_done']}}</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        @php
                            $total_earnings = $total_earnings + $overtime['overtime_amount'] ;
                        @endphp
                    @endforeach
                @endif

                <tr>
                    <td class="py-3">Total Salary Per Day Plus Other Tips =</td>
                    @if(config('variable.currency_format') =='suffix')
                        <td id="total_earnings">{{$total_earnings}} <span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span></td>
                    @else
                        <td id="total_earnings"><span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span> {{$total_earnings}} </td>
                    @endif
                </tr>


            </table>
        </div>
        <!-- /.col -->
    </div>
    <hr>


    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered text-center">

                <thead>
                <tr>
                    <th id="heading" colspan="2">{{trans('file.Deductions')}}</th>
                </tr>
                </thead>
                <thead>
                <tr>
                    <th id="normal-heading">{{trans('file.Description')}}</th>
                    <th id="normal-heading">{{trans('file.Amount')}}</th>
                </tr>
                </thead>

                @php
                    $total_deductions = 0;
                @endphp

                @if($loans)
                    @foreach($loans as $loan)
                        <tr>
                            <td class="py-3">{{$loan['loan_title']}}</td>
                            <td>{{$loan['monthly_payable']}}</td>
                        </tr>
                        @php
                            $total_deductions = $total_deductions + $loan['monthly_payable'] ;
                        @endphp
                    @endforeach
                @endif

                @if($deductions)
                    @foreach($deductions as $deduction)
                        <tr>
                            <td class="py-3">{{$deduction['deduction_title']}}</td>
                            <td>{{$deduction['deduction_amount']}}</td>
                        </tr>
                        @php
                            $total_deductions = $total_deductions + $deduction['deduction_amount'] ;
                        @endphp
                    @endforeach
                @endif

                    <tr>
                        <td class="py-3">{{__('Pension Amount')}}</td>
                        <td>{{$pension_amount}}</td>
                    </tr>

                    @php
                        $total_deductions = $total_deductions + $pension_amount;
                    @endphp



                <tr>
                    <td class="py-3">{{trans('file.Total')}}</td>
                    @if(config('variable.currency_format') =='suffix')
                        <td id="total_deductions">{{$total_deductions}} <span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span></td>
                    @else
                        <td id="total_deductions"><span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span> {{$total_deductions}} </td>
                    @endif
                </tr>


            </table>
        </div>
        <!-- /.col -->
    </div>
    @if(config('variable.currency_format') =='suffix')
        <p class="text-danger">{{__('Total Paid')}} : <strong>{{$net_salary}} <span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span></strong></p>
    @else
        <p class="text-danger">{{__('Total Net Paid')}} :<span style="font-family: DejaVu Sans; sans-serif;">{{config('variable.currency')}}</span> <strong>{{$net_salary}}</strong></p>
    @endif



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
