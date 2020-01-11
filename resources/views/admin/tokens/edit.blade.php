@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin._nav')
        <div class="col-md-8">
            @if(!empty($topic))
                <form action="/admin/topics/{{ $topic->id }}" method="POST">
                <input type="hidden" name="_method" value="put">
                @csrf()
            @else
                <form action="/admin/topics" method="POST">
                @csrf()
            @endif
                <div class="card">
                    <div class="card-header">Topic</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('topic', $topic->name ?? '') }}">
                            <!-- <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/admin/topics" class="btn btn-light">back</a>
                        <button class="btn btn-primary">✓</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
