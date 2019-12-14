@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin._nav')
        <div class="col-md-8">
            @if(!empty($question))
                <form action="/admin/questions/{{ $question->id }}" method="POST">
                <input type="hidden" name="_method" value="put">
                @csrf()
            @else
                <form action="/admin/questions" method="POST">
                @csrf()
            @endif
                <div class="card">
                    <div class="card-header">Question</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="text" class="form-control" id="message" name="message" value="{{ old('message', $question->message ?? '') }}">
                            <!-- <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $question->name ?? '') }}">
                            <!-- <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic</label>
                            <select class="form-control" id="topic" name="topic_id">
                                <option></option>
                                @foreach($topics as $topic)
                                    <option value="{{ $topic->id }}" {{ $topic->id === old('topic_id', $question->topic_id ?? '') ? "selected" : ""}}>{{ $topic->name }}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" id="name" name="name" value="{{ old('topic', $topic->name ?? '') }}"> -->
                            <!-- <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="answers">Answers</label>
                            <textarea class="form-control" id="answers" name="answers">{{ old('answers', $question->answers ?? '') }}</textarea>
                            <!-- <input type="text" class="form-control" id="name" name="name" value="{{ old('topic', $topic->name ?? '') }}"> -->
                            <!-- <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/admin/questions" class="btn btn-light">back</a>
                        <button class="btn btn-primary">✓</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
