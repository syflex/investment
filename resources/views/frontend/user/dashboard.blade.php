@extends('frontend.layouts.app')

@section('content')

 <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>TOTAL INVESTMENT</small></h6>
                                    <h4 class="m-t-0 text-info">
                                    ₦ {{number_format($totalInvestment, 2, '.', ',')}}
                                    </h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>TOTAL WITDRAWABLES</small></h6>
                                    <h4 class="m-t-0 text-primary">
                                    ₦ {{number_format($logged_in_user->wallet, 2, '.', ',')}}
                                    </h4></div>                                
                                </div>
                            
                                <div class="">
                                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                                </div>
                        </div>
                    </div>
                </div>


                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">                        
                            <div class="card-body">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">New Investment</button>

                            <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Investment</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Daily Returns</a> </li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                    <div class="card-body">
                                <!-- <h4 class="card-title">Investments</h4> -->
                                <div class="table-responsive">
                                <table class="tablesaw table-striped table-hover table-bordered table tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="table-437">
                                    <thead>
                                        <tr>                                             
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Investement ID</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Amount</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Starts</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="parsist">Ends</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($investments as  $index => $investment)
                                            <tr>
                                                
                                                <td>{{$investment['investment_id']}}</td>
                                                <td class="title">
                                                  {{number_format($investment['amount'], 2, '.', ',')}}
                                                </td>                                               
                                                <td>
                                                {{ Carbon\Carbon::parse($investment['start_date'])->format('d-m-Y') }}
                                                </td>
                                                <td>
                                                {{ Carbon\Carbon::parse($investment['end_date'])->format('d-m-Y') }}
                                                </td>
                                                
                                            </tr>
                                            @empty
                                                <h3>No Data</h3>
                                            @endforelse                                        
                                    </tbody>
                                </table>                              
                            
                            </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                <!-- <h4 class="card-title">Investments</h4> -->
                                <div class="table-responsive">                                   
                                    <table class="tablesaw table-striped table-hover table-bordered table tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="table-437">
                                    <thead>
                                        <tr>                                             
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Investement ID</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Amount</th>
                                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Date</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($interests as $index => $interest)
                                            <tr>
                                                <td>{{$interest['investment_id']}}</td>
                                                <td>
                                                    ₦ {{number_format($interest['amount'], 2, '.', ',')}}
                                                </td>
                                                <td>
                                                {{ Carbon\Carbon::parse($interest['created_at'])->format('d-m-Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                                <h1>No Data</h1>
                                            @endforelse                               
                                    </tbody>
                                </table>  
                                    </div>                           
                            </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>


            
            
                <div class="col-lg-4 col-md-5">
                        
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-muted">Investment Chart</h4>
                            <div id="poll_div"></div>
                                <?= $lava->render('BarChart','Investments','poll_div') ?>
                            <br>
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-info">
                                        <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                                    </div>
                                    <div class="align-self-center m-l-20">
                                        <h3 class="m-b-0 text-info">₦ {{number_format($logged_in_user->wallet, 2, '.', ',')}}</h3>
                                        <h5 class="text-muted m-b-0">WITDRAWABLES</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                              
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->



               


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <form  method="post" action="{{route('frontend.investment.store')}}">
         @csrf

       <div class="modal-header">
        <h4 class="modal-title">Investment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
        <p class="text-danger">
            Are you sure you want to invest <strong>100,000</strong>
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Yes Invest</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
@endsection
