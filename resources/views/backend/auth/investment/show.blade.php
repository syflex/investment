@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.view'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Investment Management') }} <small class="text-muted">{{ __('active investment') }}</small>
                </h4>
            </div><!--col-->

           
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.access.users.table.last_name') }}</th>
                            <th>{{ __('labels.backend.access.users.table.first_name') }}</th>
                            <th>{{ __('Investment ID') }}</th>
                            <th>{{ __('Amount') }}</th>                            
                            <th>{{ __('Start Date') }}</th>
                            <th>{{ __('End Date') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->user['first_name'] }}</td>
                                <td>{{ $data->user['last_name'] }}</td>
                                <td>{{ $data->investment_id }}</td>
                                <td>₦ {{number_format($data->amount, 2, '.', ',') }}</td>                                
                                <td>{{ $data->start_date }}</td>    
                                <td>{{ $data->end_date }}</td>    
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $datas->total() !!} {{ trans_choice('total', $datas->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $datas->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
