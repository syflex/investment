@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

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
                            <th>{{ __('labels.backend.access.users.table.email') }}</th>
                            <th>{{ __('Witdrawable') }}</th>
                            <th>{{ __('Investments') }}</th>                            
                            <th>{{ __('labels.backend.access.users.table.last_updated') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->last_name }}</td>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->wallet }}</td>
                                <td>{{ count($data->investment) }}</td>                                
                                <td>{{ $data->updated_at->diffForHumans() }}</td>
                                <td>
                                <a href="{{route('admin.auth.investment.show',  $data->id )}}" class="btn btn-info">
                                <svg class="svg-inline--fa fa-eye fa-w-18" data-toggle="tooltip" data-placement="top" title="" aria-labelledby="svg-inline--fa-title-1" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" data-original-title="View">
                                <title id="svg-inline--fa-title-1">View Investments</title>
                                <path fill="currentColor" d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"></path>
                                </svg> View Investments</a>
                                </td>
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
