@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">This Todo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Go Back</a>
                        <hr>

                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 20%;">Todo Title:</th>
                                <td>{{ $todo->title }}</td>
                            </tr>
                            <tr>
                                <th>Todo Description:</th>
                                <td>{{ $todo->description }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
