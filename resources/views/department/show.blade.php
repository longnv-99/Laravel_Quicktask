@extends('layouts.layout')

@section('main-content')
<!-- Content Header -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('message.department-page') }}</h1>
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
                <h1> {{ $department->name }}:  </h1>
                @if ($department->users->isEmpty())
                    <h1>{{ __('message.no-user') }}</h1>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">{{ __('message.stt') }}</th>
                                <th scope="col">{{ __('message.name') }}</th>
                                <th scope="col">{{ __('message.email') }}</th>
                                <th scope="col">{{ __('message.address') }}</th>
                                <th scope="col">{{ __('message.position') }}</th>
                                <th scope="col">{{ __('message.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($department->users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->position }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user) }}" class="edit-button">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('users.destroy', $user) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
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
