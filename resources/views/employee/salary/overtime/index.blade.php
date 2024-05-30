<section>
    
    <style>
table, th, td, tr {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

    <span id="overtime_general_result"></span>


    <div class="mb-3" style="background-color:lightblue;">
        @can('set-salary')
            <button type="button" class="btn btn-info" name="create_record" id="create_overtime_record"><i
                        class="fa fa-plus"></i>{{__('Add Overtime')}}</button>
        @endcan
    </div>

    <div class="row">
        <div class="table-responsive" style="background-color:lightblue;">
            <table id="overtime-table" class="table">
                <thead>
                <tr>
                    <!--th >{{__('Month-Year')}}</th-->
                    <th >{{__('Date')}}</th>
                    <!--th>{{trans('Dept.')}}</th-->
                    <th>{{__('Location')}}</th>
                     <th>{{__('Desig.')}}</th>
                    <!--th>{{__('Working Days')}}</th-->
                    <th>{{__('Daily Target')}}</th>
                    <th>{{__('Actual Work Done')}}</th>
                    <th>{{__('Meet Up Target')}}</th>
                    @if(config('variable.currency_format')=='suffix')
                        <th>{{__('Cost')}} ({{config('variable.currency')}})</th>
                    @else
                        <th>({{config('variable.currency')}}) {{__('Cost')}}</th>
                    @endif
                    
                    
                    @if(config('variable.currency_format')=='suffix')
                        <th>{{__('Total Work Done')}} ({{config('variable.currency')}})</th>
                    @else
                        <th>({{config('variable.currency')}}) {{__('Total Work Done')}}</th>
                    @endif
                    <th class="not-exported">{{trans('file.action')}}</th>
                    
                </tr>
                </thead>

            </table>
        </div>
    </div>

    <div id="OvertimeformModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{__('Add Overtime')}}</h5>
                    <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="overtime-close"><i class="dripicons-cross"></i></button>
                </div>

                <div class="modal-body">
                    <span id="overtime_form_result"></span>
                    <form method="post" id="overtime_sample_form" class="form-horizontal" autocomplete="off">

                        @csrf
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>{{__('Month Year')}} *</label>
                                <input class="form-control month_year" name="month_year" type="text" id="month_year">
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label>{{__('Date')}} *</label>
                                <input class="form-control new_date" name="new_date" type="date" id="new_date">
                                
                            </div>

                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{trans('Department')}} *</strong></label>
                                
                                <select name="overtime_title" id="overtime_title" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Employee Department')])}}...'>
                                    <option value="Admin Department">Admin Department</option>
                                    <option value="Accounting Department">Accounting Department</option>
                                    <option value="Plantation Department">Plantation Department</option>
                                    <option value="Mill Department">Mill Department</option>
                                    <option value="Transport Department">Transport Department</option>
                                    <option value="Procurement Department">Procurement Department</option>

                                    
                                </select>
                                
                                
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Employee Working Days')}} *</strong></label>
                                <select name="no_of_days" id="no_of_days" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Employee Working Target')])}}...'>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    
                                </select>
                                
                                </div>

                           
                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{('Daily Designation')}} *</strong></label>
                                <select name="overtime_designation" id="overtime_designation" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Daily Designation')])}}...'>
                                        <option value="ABSENT">ABSENT</option>
                                        <option value="SUPERVISOR">SUPERVISOR</option>
                                        <option value="HEAD OF DEPARTMENT"> HEAD OF DEPARTMENT</option>
                                        <option value="SLICING OF FFB">SLICING OF FFB</option>
                                        <option value="LOADING OF FFB">LOADING OF FFB</option>
                                        <option value="MILLING & CLARIFICATION">MILLING & CLARIFICATION</option>
                                        <option value="FIBRE DISPOSAL">FIBRE DISPOSAL</option>
                                        <option value="MECHANIC MAINTENANCE">MECHANIC MAINTENANCE</option>
                                        <option value="BOILER FIRING">BOILER FIRING</option>
                                        <option value="BOILER MAINTENANCE ">BOILER MAINTENANCE</option>
                                        <option value=" ELECTRICAL MAINTENANCE ">ELECTRICAL MAINTENANCE</option>
                                        <option value="ELECTRICAL WORK ">ELECTRICAL WORK</option>
                                        <option value=" KERNEL CRACKING & SEPARATION ">KERNEL CRACKING & SEPARATION</option>
                                        <option value="CLEANING OF MILL">CLEANING OF MILL</option>
                                        <option value="HARVESTING">HARVESTING</option>
                                        <option value="BRUSHING">BRUSHING</option>
                                        <option value="RING WEEDING">RING WEEDING</option>
                                        <option value="PRUNING SMALL PALM">PRUNING SMALL PALM</option>
                                        <option value="CHEMICAL APPLICATION">CHEMICAL APPLICATION</option>
                                        <option value="FERTILIZER APPLICATION">FERTILIZER APPLICATION</option>
                                        <option value="LINE WEEDING">LINE WEEDING</option>
                                        <option value="LOADING OF FFB">LOADING OF FFB</option>
                                        <option value="DISPOSAL OF EFB">DISPOSAL OF EFB</option>
                                        <option value="SLASHING">SLASHING</option>
                                        <option value="FERTILIZER TRANSPORT">FERTILIZER TRANSPORT</option>
                                        <option value="WATER TRANSPORT">WATER TRANSPORT</option>
                                        <option value="WORKER TRANSPORT">WORKER TRANSPORT</option>
                                        <option value="TRACTOR/SLASHING.">TRACTOR/SLASHING.</option>
                                        <option value="CARRIER">CARRIER</option>
                                        <option value="SECURITY">SECURITY</option>
                                        <option value="WELDER">WELDER</option>
                                        <option value="LOADING/OFFLOADING">LOADING/OFFLOADING</option>
                                        <option value="PICKING">PICKING</option>
                                        <option value="SPECIAL WORK">SPECIAL WORK</option>
                                        <option value="DRIVER">DRIVER</option>
                                        <option value="TRACTORS/HAULAGING">TRACTORS/HAULAGING</option>
                                        <option value="PALM PRUNING CONTRACTOR">PALM PRUNING CONTRACTOR</option>
                                        <option value="PALM PRUNING BIG">PALM PRUNING BIG</option>
                                        

                                </select>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Employee Daily Target')}} *</strong></label>
                                <select name="overtime_hours" id="overtime_hours" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Employee Daily Target')])}}...'>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24"24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                            <option value="61">61</option>
                                            <option value="62">62</option>
                                            <option value="63">63</option>
                                            <option value="64">64</option>
                                            <option value="65">65</option>
                                            <option value="66">66</option>
                                            <option value="67">67</option>
                                            <option value="68">68</option>
                                            <option value="69">69</option>
                                            <option value="70">70</option>
                                            <option value="71">71</option>
                                            <option value="72">72</option>
                                            <option value="73">73</option>
                                            <option value="74">74</option>
                                            <option value="75">75</option>
                                            <option value="76">76</option>
                                            <option value="77">77</option>
                                            <option value="78">78</option>
                                            <option value="79">79</option>
                                            <option value="80">80</option>
                                            <option value="81">81</option>
                                            <option value="82">82</option>
                                            <option value="83">83</option>
                                            <option value="84">84</option>
                                            <option value="85">85</option>
                                            <option value="86">86</option>
                                            <option value="87">87</option>
                                            <option value="88">88</option>
                                            <option value="89">89</option>
                                            <option value="90">90</option>
                                            <option value="91">91</option>
                                            <option value="92">92</option>
                                            <option value="93">93</option>
                                            <option value="94">94</option>
                                            <option value="95">95</option>
                                            <option value="96">96</option>
                                            <option value="97">97</option>
                                            <option value="98">98</option>
                                            <option value="99">99</option>
                                            <option value="100">100</option>
                                            <option value="101">101</option>
                                            <option value="102">102</option>
                                            <option value="103">103</option>
                                            <option value="104">104</option>
                                            <option value="105">105</option>
                                            <option value="106">106</option>
                                            <option value="107">107</option>
                                            <option value="108">108</option>
                                            <option value="109">109</option>
                                            <option value="110">110</option>
                                            <option value="111">111</option>
                                            <option value="112">112</option>
                                            <option value="113">113</option>
                                            <option value="114">114</option>
                                            <option value="115">115</option>
                                            <option value="116">116</option>
                                            <option value="117">117</option>
                                            <option value="118">118</option>
                                            <option value="119">119</option>
                                            <option value="120">120</option>

                                </select>
                               </div> 
                            
                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Job Location')}} *</strong></label>
                                <select name="job_location" id="job_location" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Job Location')])}}...'>
                                    <option value="MILL"> MILL </option>
                                    <option value="ESTATE A"> ESTATE A </option>
                                    <option value=" ESTATE B"> ESTATE B</option>
                                    <option value=" ESTATE C1"> ESTATE C1</option>
                                    <option value=" ESTATE C2"> ESTATE C2</option>
                                    <option value="PHASE II"> PHASE II </option>
                                    <option value="NURSERY "> NURSERY </option>

                                    
                                </select>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Actual Work Done')}} *</strong></label>
                                <input  type="number" name="employee_actual_work_done"  id="employee_actual_work_done"
                                              placeholder={{trans('Actual Work Done')}}
                                                      required class=" form-control">
                               </div> 
                            
                            
                                <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Employee Target Work Done')}} *</strong></label>
                                <input  type="number" name="actual_work_done"  id="actual_work_done"
                                              placeholder={{trans('Actual Work Done')}}
                                                      required class=" form-control">
                               </div>

                            <div class="col-md-6 form-group">
                                <label style="color:green;"><strong>{{__('Absent')}} *</strong></label>
                                <select name="absent_work"  id="absent_work" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="contains"
                                        title='{{__('Selecting',['key'=>trans('Target/Absent')])}}...'>
                                    <option value="Target Met">Target Met</option>
                                    <option value="Target Lesser Than Daily Target">Target Lesser Than Daily Target</option>
                                    <option value="Absent">Absent</option>
                                    
                                </select>
                                
                                </div>
                            
                            
                           <div class="col-md-6 form-group">
                                @if(config('variable.currency_format')=='suffix')
                                    <label style="color:green;"><strong>{{__('Rate')}} ({{config('variable.currency')}}) *</strong></label>
                                    
                                @else<label style="color:green;"><strong>({{config('variable.currency')}}) {{__('Cost Per Bunche/Bag/Palm/Trip')}} *</strong></label>
                                @endif <input type="number" name="overtime_rate" readonly id="overtime_rate"
                                              placeholder={{trans('file.Rate')}}
                                                      required class=" form-control">
                                                      
                                                       
                    
                              </div>
                              
                               <div class="col-md-12 form-group">
                                @if(config('variable.currency_format')=='suffix')
                                    <label style="color:green;"><strong>{{__('Total Work Done')}} ({{config('variable.currency')}}) *</strong></label>
                                    
                                @else<label style="color:green;"><strong>({{config('variable.currency')}}) {{__('Total Work Done')}} *</strong></label>
                                @endif <input  type="number" name="rate_actual_work_done" readonly id="rate_actual_work_done"
                                              placeholder={{trans('Total Work Done')}}
                                                      required class=" form-control">


                            <div class="container">
                                <br>
                                {{-- <span class="text-danger"><i>[NB: If you didn't pay the employee's previous due, the current amount will be treated as the previous amount.]</i></span> <br><br> --}}
                                <div class="form-group" align="center">
                                    <input type="hidden" name="action" id="overtime_action"/>
                                    <input type="hidden" name="hidden_id" id="overtime_hidden_id"/>
                                    <input type="submit" name="action_button" id="overtime_action_button"
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
                    <button type="button" class="overtime-close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">{{__('Are you sure you want to remove this data?')}}</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button"  class="btn btn-danger overtime-ok">{{trans('file.OK')}}</button>
                    <button type="button" class="overtime-close btn-default" data-dismiss="modal">{{trans('file.Cancel')}}</button>
                </div>
            </div>
        </div>
    </div>
    
   
</section>

