@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
                <form  method="post" action="{{route('frontend.interest.store')}}">
                        @csrf
                        <button type="submit" class="btn btn-success btn-lg">Comput Interest</button>                       
                </form>
                    <!-- {!! __('strings.backend.welcome') !!} -->
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
