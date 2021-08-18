@extends('layouts.layout')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.user') }}</h1>
                </div>
            </div>
        </div>
        @include('flash-message')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="main-content-header">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" 
                            placeholder="{{ __('message.search-user') }}" />
                    </div>
                </div>
                @if ($users->isEmpty())
                    <h2>{{ __('message.no-user') }}</h2>
                @else
                    <table class="table table-bordered" id="dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">{{ __('message.stt') }}</th>
                                <th scope="col">{{ __('message.name') }}</th>
                                <th scope="col">{{ __('message.department') }}</th>
                                <th scope="col">{{ __('message.email') }}</th>
                                <th scope="col">{{ __('message.address') }}</th>
                                <th scope="col">{{ __('message.position') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->department->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->position }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
