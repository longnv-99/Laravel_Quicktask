@extends('layouts.layout')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.home-page') }}</h1>
                </div>
            </div>
        </div>
    </div>
        <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <img src="{{ asset('img/logo-sun@2x.png') }}">
            </div>
        </div>
    </div>
</div>
@endsection
