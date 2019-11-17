@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin._nav')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Topics
                    <a class="btn btn-primary float-right" href="/admin/topics/create">add</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="w-100">name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td>{{ $topic->id }}</td>
                                    <td>{{ $topic->name }}</td>
                                    <td>
                                        <a href="/admin/topics/{{ $topic->id }}/edit" class="btn btn-primary">⚙</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
