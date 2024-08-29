@extends('front.layouts.app')

@section('content')

<style>
	.facility_tab:hover{
		color:#EE3C25
	}
	.td{
		text-align: center!important;
	}
	.table1{
		text-align:center;

	}
    .td_margin{
	padding-left:40px!important;
	}
	@media only screen and (max-width: 723px){
	section {
    padding: 0px 0px!important;}
	  .heading {
    padding-bottom: 0px!important;
    }
	.ts-padding{
		padding:20px!important;
	}
        }
</style>


<div id="banner-area">
    <img style="padding-top: 4%;"  src="{{asset('front/images/banner/service_charges.jpg')}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('serviceCharges.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('serviceCharges.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('serviceCharges.heading')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>



<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            
            <div class="col-md-2 heading text-center">
            </div>
            
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('serviceCharges.heading')</h1>
           
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div> 
    <div class="container">

        {{-- <table class="table table-hover table-bordered table1">
            <col width="200" style="margin-left:100px!important;">
            <thead>
                <th rowspan="3" class="text-center">
                    Sr.no
                </th>
                <th  class="text-center">
                    Particular
                </th>
                <th  class="text-center">
                    Commission with GST
                </th>
            </thead>
         
            <tr>
                <td align="left" class="td_margin">
                    1
                </td>
                <td>
                    NEFT CHARGES
                </td>
                <td>
                </td>   
            </tr>

            <tr>
                <td >
                    
                </td>
                <td>
                    i) Upto RS. 100000/- 
                </td>

                <td>
                    10 
                </td>
            </tr>


            <tr>
                <td >
                    
                </td>
                <td>
                    ii) RS 100001 TO 200000/- 
                </td>

                <td>
                    15 
                </td>
            </tr>



            <tr>
                <td align="left" class="td_margin">
                    2
                </td>
                <td>
                    RTGS CHARGES
                </td>
                <td>
                </td>   
            </tr>

            <tr>
                <td >
                    
                </td>
                <td>
                    i) RS 200001 TO 500000/-
                </td>

                <td>
                    51 
                </td>
            </tr>


            <tr>
                <td >
                    
                </td>
                <td>
                    ii) Above RS. 5 LAKH
                </td>

                <td>
                    78
                </td>
            </tr>

            <tr>
                <td >
                    
                </td>
                <td>
                    SERVICE CHARGES
                </td>

                <td>
                    
                </td>
            </tr>


            <tr>
                <td >
                    
                </td>
                <td>
                    SERVICE CHARGES
                </td>

                <td>
                    
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    3
                </td>
                <td>
                    MICR Cheque - Saving
                </td>

                <td>
                    3 per cheque
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    4
                </td>
                <td>
                    MICR Cheque-Current 
                </td>

                <td>
                    3 per cheque
                </td>
            </tr>

            
            <tr>
                <td align="left" class="td_margin">
                    5
                </td>
                <td>
                    Issue of Passbook/Balance Certificate
                </td>

                <td>
                    118
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    6
                </td>
                <td>
                    Duplicate passbook 
                </td>

                <td>
                    118
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    7
                </td>
                <td>
                    Stop Payment Instruction per Instrument
                </td>

                <td>
                    118
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    8
                </td>
                <td>
                    AC Closure Charges
                </td>

                <td>
                   
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    
                </td>
                <td>
                    i) Individual
                </td>

                <td>
                    a) 200 before 1 year<br>
                    b) 100 after 1 year
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    9
                </td>
                <td>
                    Cheque return Charges- cheque drawn us
                </td>

                <td>
                   250
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    10
                </td>
                <td>
                    Cheque/Bills deposited Returned unpaid
                </td>

                <td>
                   200
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    11
                </td>
                <td>
                    No dues Certificate
                </td>

                <td>
                  100
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    12
                </td>
                <td>
                    Revalidation/Cancellation Drafts
                </td>

                <td>
                    118
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    13
                </td>
                <td>
                    Bankers Cheque
                </td>

                <td>
                   
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                </td>
                <td>
                    A) issuance cheque
                </td>

                <td>
                   
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                </td>
                <td>
                    i) Upto Rs 1000
                </td>

                <td>
                   11
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                </td>
                <td>
                    ii) Above Rs. 1000
                </td>

                <td>
                    1.20 per 1000
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                </td>
                <td>
                    B)Revalidation/cancellation of bankers cheque 
                </td>

                <td>
                    118
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                </td>
                <td>
                    C)Issuance of duplicate bankers cheque 
                </td>

                <td>
                    118
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    14
                </td>
                <td>
                    Photo Attestation Charges
                </td>

                <td>
                    118
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    15
                </td>
                <td>
                    Interest Certificate
                </td>

                <td>
                    75
                </td>
            </tr>

            <tr>
                <td align="left" class="td_margin">
                    16
                </td>
                <td>
                    Duplicate term deposit receipt
                </td>

                <td>
                    200
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    17
                </td>
                <td>
                    AC statement Charges dor saving and current
                </td>

                <td>
                    50 upto 1 year<br>
                    50 + 10 rs per page

                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    18
                </td>
                <td>
                    IMPS CHARGES
                </td>

                <td>
                </td>
            </tr>


            <tr>
                <td align="left" class="td_margin">
                    
                </td>
                <td>
                    i) upto Rs 10000/-<br>
                    ii) RS.10001 To Rs. 100000/-<br>
                    iii) Rs. 100001 Το 300000/-
                    
                </td>

                <td>
                        7.08(6+GST)<br>
                        11.80(10+GST)<br>
                        20.06(17+GST)

                </td>
            </tr>
 
        </table> --}}

        <table class="table table-hover table-bordered table1">
            <col width="200" style="margin-left:100px!important;">
            <thead>
                <tr>
                    <th rowspan="3" class="text-center">
                        @lang('serviceCharges.table1.header.sr_no')
                    </th>
                    <th class="text-center">
                        @lang('serviceCharges.table1.header.particular')
                    </th>
                    <th class="text-center">
                        @lang('serviceCharges.table1.header.commission_gst')
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach (__('serviceCharges.table1.rows') as $row)
                    <tr>
                        <td align="left" class="td_margin">
                            {{ $row[0] }}
                        </td>
                        <td>
                            {!! $row[1] !!}
                        </td>
                        <td>
                            {!! $row[2] !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        


        

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('serviceCharges.second_heading')</h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div>

    <div class="container">

            {{-- <table class="table table-hover table-bordered table1">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Fees/Charges</th>
                        <th>Amount</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Annual fees (p.a.)</td>
                        <td>Rs. 300/Card + Service Tax</td>
                        <td>Fee applicable to all card holders for yearly card maintenance fees</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Additional card (p.a.)</td>
                        <td>Rs. 300/Card + Service Tax</td>
                        <td>Fee applicable, if card is to be issued to account holders other than primary holder. For this bank needs to give confirmation for enabling the joint card functionality.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Card Replacement Fees</td>
                        <td>Rs. 300/Card + Service Tax</td>
                        <td>If a customer lost his/her card and requests another card</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Rupay debit card tariff 
                            charges </td>
                        <td></td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Transaction free of 
                            charges as per RBI
                            </td>
                      
                        <td>
                            First 5 transaction 
                            (including Financial +
                            Non-Financial)
                            
                        </td>
                        <td>
                            As per NPCI guidelines for a month at 
                            list five free transactions needs to be 
                            given to the account holder
                         <td>   
                    </tr>
                    <tr>
                        <td></td>
                        <td>a)Financial (Cash Withdrawal)</td>
                        <td>Rs 17 / transaction + service tax</td>
                        <td>Fee applicable from any 6th financial transaction onwards performed on other bank’s ATM</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b)Non-Financial (Balance Enquiry, Mini Statement, Pin change)</td>
                        <td>Rs 9 / transaction + service tax</td>
                        <td>Fee applicable from any 6th non-financial transaction onwards performed on other bank’s ATM</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Daily Withdrawal Limit</td>
                        <td>Rs 30000/card</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Daily Purchase Limit</td>
                        <td>Rs 100000/card</td>
                        <td>Not Applicable</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>PIN Replacement Charges</td>
                        <td>Rs. 30 / Pin + Taxes</td>
                        <td>Fee Applicable if the customer lost, forgets his/her card, and requests another PIN</td>
                    </tr>
                </tbody>
            </table>
            
            <p style="text-align:center;font-weight: bold;">We have removed cash at POS since it is not applicable (As of now not allowed to our bank)
                Thanking you</p> --}}

                <table class="table table-hover table-bordered table1">
                    <thead>
                        <tr>
                            <th>@lang('serviceCharges.table.s_no')</th>
                            <th>@lang('serviceCharges.table.fees_charges')</th>
                            <th>@lang('serviceCharges.table.amount')</th>
                            <th>@lang('serviceCharges.table.remarks')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(__('serviceCharges.table.rows') as $row)
                        <tr>
                            <td>{{ $row['s_no'] }}</td>
                            <td>{{ $row['fees_charges'] }}</td>
                            <td>{{ $row['amount'] }}</td>
                            <td>{{ $row['remarks'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <p style="text-align:center;font-weight: bold;">@lang('serviceCharges.footer_note')</p>
                

    </div>

</section><br><br>






@endsection