@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Create Note</h3>
        <form action="/createNote" method="post">
            @csrf
            <div class="form-group">
                <label for="">Title:</label>
                <input type="text" name="title" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Text:</label>
                <input type="text" name="text" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection