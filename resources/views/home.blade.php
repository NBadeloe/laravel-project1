@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-bodytu">
                    @if (session('stas'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ __('You are logged in!') }}
                        <a href="{{url('/admin')}}">Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
