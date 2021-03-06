@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <prop-component :urldata="{{ $url_data }}"></prop-component>
        </div>

        <div class="col-md-8">
            <ajax-component></ajax-component>
        </div>

        <div class="col-md-8">
            <chartline-component></chartline-component>
        </div>
    </div>
</div>
@endsection
