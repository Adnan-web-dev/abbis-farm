<section>

    <span id="loan_general_result"></span>


    <div class="mb-3" style="background-color:lightblue;">
        @can('set-salary')
            <button type="button" class="btn btn-info" name="create_record" id="create_loan_record"><i class="fa fa-plus"></i>{{__('Add Borrow Request')}}</button>
        @endcan
    </div>

    <div class="row">
        <div class="table-responsive" style="background-color:lightblue;">
            <table id="loan-table" class="table ">
                <thead>
                <tr>
                    <th>{{__('Month-Year')}}</th>
                    <th>{{trans('Borrow/Loan')}}</th>
                    @if(config('variable.currency_format')=='suffix')
                        <th>{{__('Loan Amount')}} ({{config('variable.currency')}})</th>
                    @else
                        <th>({{config('variable.currency')}}) {{__('Loan Amount')}}</th>
                    @endif
                    <th>{{__('Borrowed/Loan Time')}}</th>
                    <th>{{__('Borrowed/Loan Remaining')}}</th>
                    <th class="not-exported">{{trans('file.action')}}</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>

    <div id="LoanformModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{__('Add Borrow/Loan')}}</h5>
                    <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="loan-close"><i class="dripicons-cross"></i></button>
                </div>

                <div class="modal-body">
                    <span id="loan_form_result"></span>
                    <form method="post" id="loan_sample_form" class="form-horizontal" autocomplete="off">

                        @csrf
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>{{__('Month Year')}} *</label>
                                <input class="form-control month_year"  name="month_year" type="text" id="month_year">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>{{__('Borrow/Loan Option')}} *</label>
                                <select name="loan_type" id="loan_type" required class="form-control selectpicker"
                                        {{-- data-live-search="true" data-live-search-style="contains" --}}
                                        title='{{__('Borrowed/Loan Option')}}'>
                                    <option value="For Treatment">{{__('For Treatment')}}</option>
                                    <option value="Education">{{__('Education')}}</option>
                                     <option value="House Rent">{{__('House Rent')}}</option>
                                      <option value="Food">{{__('Food')}}</option>
                                       <option value="Transportation">{{__('Transportation')}}</option>
                                    <option value="Other Request">{{__('Other Request')}}</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>{{trans('Enter Other Request')}} *</label>
                                <input type="text" name="loan_title" id="loan_title" placeholder={{trans('other request')}}
                                        required class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                @if(config('variable.currency_format')=='suffix')
                                    <label>{{__('Amount')}} ({{config('variable.currency')}}) *</label>
                                @else
                                    <label>({{config('variable.currency')}}) {{__('Amount')}} *</label>
                                @endif <input type="text" name="loan_amount" id="loan_amount"
                                              placeholder={{trans('file.Amount')}}
                                                      required class="form-control">
                            </div>


                            <div class="col-md-6 form-group">
                                <label>{{__('Number of installment')}}</label>
                                <input type="text" name="loan_time" id="loan_time" placeholder={{__('Number of installment')}}
                                        required class="form-control">
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reason">{{trans('Reason For Borrowing')}}</label>
                                    <textarea class="form-control" name="reason" id="loan_reason"
                                              rows="3"></textarea>
                                </div>
                            </div>


                            <div class="container">
                                <br>
                                {{-- <span class="text-danger"><i>[NB: If you didn't pay the employee's previous due, the current amount will be treated as the previous amount.]</i></span> <br><br> --}}
                                <div class="form-group" align="center">
                                    <input type="hidden" name="action" id="loan_action"/>
                                    <input type="hidden" name="hidden_id" id="loan_hidden_id"/>
                                    <input type="submit" name="action_button" id="loan_action_button"
                                           class="btn btn-warning" value={{trans('file.Add')}} />
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade confirmModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">{{trans('file.Confirmation')}}</h2>
                    <button type="button" class="loan-close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">{{__('Are you sure you want to remove this data?')}}</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button"  class="btn btn-danger loan-ok">{{trans('file.OK')}}</button>
                    <button type="button" class="loan-close btn-default" data-dismiss="modal">{{trans('file.Cancel')}}</button>
                </div>
            </div>
        </div>
    </div>


</section>

