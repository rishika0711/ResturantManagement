@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <a href="/management">
                                <img src="{{asset('image/management.png')}}" height="100" width="100">
                                Management</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/Cashier">
                            <img src="{{asset('image/cash.png')}}" height="100" width="100">
                                
                            Cashier</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/report">
                            <img src="{{asset('image/report.png')}}" height="100" width="100">
                                report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
