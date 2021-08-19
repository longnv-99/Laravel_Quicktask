@extends('layouts.layout')

@section('main-content')
<!-- Content Header -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.add-user-page') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group id-hidden">
                <input type="text" class="form-control" name="department_id" 
                    value="{{ $department->id }}">
            </div>
            <div class="form-group">
                <label for="name">{{ __('message.name') }}</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="{{ __('message.enter-name') }}" >
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">{{ __('message.email') }}</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="{{ __('message.enter-email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">{{ __('message.address') }}</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="{{ __('message.enter-address') }}" >
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="position">{{ __('message.position') }}</label>
                <input type="text" class="form-control" id="position" name="position">
                @error('position')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ __('message.submit') }}</button>
        </form>
    </div>
</div>
@endsection
