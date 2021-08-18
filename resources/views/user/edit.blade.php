@extends('layouts.layout')

@section('main-content')
<!-- Content Header -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.update-user-page') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <form method="post" action="{{ route('users.update', $user) }}">
            @csrf
            @method('put')
            <div class="form-group id-hidden">
                <input type="text" class="form-control" name="id" value="{{ $user->id }}">
            </div>
            <div class="form-group id-hidden">
                <input type="text" class="form-control" name="department_id" 
                    value="{{ $user->department_id }}">
            </div>
            <div class="form-group">
                <label for="name">{{ __('message.name') }}</label>
                <input type="text" class="form-control" id="name" name="name" 
                    value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">{{ __('message.email') }}</label>
                <input type="email" class="form-control" id="email"  name="email" 
                    value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="address">{{ __('message.address') }}</label>
                <input type="text" class="form-control" id="address" name="address" 
                    value="{{ $user->address }}">
            </div>
            <div class="form-group">
                <label for="position">{{ __('message.position') }}</label>
                <input type="text" class="form-control" id="position" name="position" 
                    value="{{ $user->position }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('message.submit') }}</button>
        </form>
    </div>
</div>
@endsection
