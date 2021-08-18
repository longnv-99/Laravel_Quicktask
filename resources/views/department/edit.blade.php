@extends('layouts.layout')

@section('main-content')
<!-- Content Header -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.update-department-page') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <form method="post" action="{{ route('departments.update', $department) }}">
            @csrf
            @method('put')
            <div class="form-group id-hidden">
                <input type="text" class="form-control" name="id" value="{{ $department->id }}">
            </div>
            <div class="form-group">
                <label for="name">{{ __('message.name') }}</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ $department->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">{{ __('message.des') }}</label>
                <textarea class="form-control" id="description" rows="3" name="description" >{{ 
                    $department->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('message.submit') }}</button>
        </form>
    </div>
</div>
@endsection
