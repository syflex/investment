@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
   

<div class="card">
    <div class="card-header">
        <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>       
             
    </div>
</div><!--card-->





<div class="row">

<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <i class="fa fa-users text-primary font-2xl mr-3"></i>
            <div>
                    <div class="text-value-sm text-primary"><h2>{{$allUsers}}</h2></div>
                    <div class="text-muted text-uppercase font-weight-bold small mr-5">Users</div>   
                    </div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        
                                <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('admin.auth.user.index')}}">
                                    <span class="small font-weight-bold">View Details</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                    </div>
            </div>
        </div>
    

<div class="col-6 col-lg-3">
<div class="card">
<div class="card-body p-3 d-flex align-items-center">
<i class="fa fa-laptop text-info font-2xl mr-3"></i>
<div>
<div class="text-value-sm text-info"><h2>{{$allInvestement}}</h2></div>
<div class="text-muted text-uppercase font-weight-bold small">Investment</div>
</div>
</div>
<div class="card-footer px-3 py-2">
        <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('admin.auth.investment.index')}}">
            <span class="small font-weight-bold">View Details</span>
            <i class="fa fa-angle-right"></i>
        </a>
</div>
</div>
</div>


<div class="col-6 col-lg-3">
<div class="card">
<div class="card-body p-3 d-flex align-items-center">
<i class="fa fa-moon-o text-warning font-2xl mr-3"></i>
<div>
<div class="text-value-sm text-warning"><h2>₦ {{number_format($totalInvestement, 2, '.', ',') }}</h2></div>
<div class="text-muted text-uppercase font-weight-bold small">Invested</div>
</div>
</div>
<div class="card-footer px-3 py-2">
<a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('admin.auth.investment.index')}}">
            <span class="small font-weight-bold">View Details</span>
            <i class="fa fa-angle-right"></i>
        </a>
</div>
</div>
</div>



<div class="col-6 col-lg-3">
<div class="card">
<div class="card-body p-3 d-flex align-items-center">
<i class="fa fa-laptop text-info font-2xl mr-3"></i>
<div>
<div class="text-value-sm text-info"><h2>{{$allInterest}}</h2></div>
<div class="text-muted text-uppercase font-weight-bold small">Interest</div>
</div>
</div>
<div class="card-footer px-3 py-2">
<a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
            <span class="small font-weight-bold">View Details</span>
            <i class="fa fa-angle-right"></i>
        </a>
</div>
</div>
</div>

<div class="col-6 col-lg-3">
<div class="card">
<div class="card-body p-3 d-flex align-items-center">
<i class="fa fa-moon-o text-warning font-2xl mr-3"></i>
<div>
<div class="text-value-sm text-warning"><h2>₦ {{number_format($totalInterest, 2, '.', ',') }}</h2></div>
<div class="text-muted text-uppercase font-weight-bold small">total Interest Earned</div>
</div>
</div>
<div class="card-footer px-3 py-2">
<a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
            <span class="small font-weight-bold">View Details</span>
            <i class="fa fa-angle-right"></i>
        </a>
</div>
</div>
</div>



<div class="col-6 col-lg-3">
<div class="card">
<div class="card-body p-3 d-flex align-items-center">
<i class="fa fa-bell text-danger font-2xl mr-3"></i>
<div>
<div class="text-value-sm text-danger"><h2>₦ {{number_format($totalAmount, 2, '.', ',') }}</h2></div>
<div class="text-muted text-uppercase font-weight-bold small">Total Witdrawbles</div>
</div>
</div>
<div class="card-footer px-3 py-2">
    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
        <span class="small font-weight-bold">View Details</span>
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
</div>

</div>
@endsection
