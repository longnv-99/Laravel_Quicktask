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
                <div class="main-content-header">
                    <div>
                        <a href="{{ route('departments.create') }}">
                            <button type="button" class="btn btn-outline-success">
                                {{ __('message.add-new-department') }}
                            </button>
                        </a>
                    </div>
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" 
                            placeholder="{{ __('message.search-department') }}" />
                    </div>
                </div>
                @if ($departments->isEmpty())
                    <h2>{{ __('message.no-department') }}</h2>
                @else
                    <table class="table table-bordered" id="dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">{{ __('message.stt') }}</th>
                                <th scope="col">{{ __('message.name') }}</th>
                                <th scope="col">{{ __('message.des') }}</th>
                                <th scope="col">{{ __('message.user') }}</th>
                                <th scope="col">{{ __('message.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->description }}</td>
                                    <td>
                                        <a href="#">{{ __('message.add-user') }}</a>
                                        <br>
                                        <a href="{{ route('departments.show', $department) }}">
                                            {{ __('message.view-list') }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('departments.edit', $department) }}" class="edit-button">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('departments.destroy', $department) }}" method="post">
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
