@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/edit" method="get">
                    <input type="hidden" name="id" value="{{ $note->id }}">
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" name="title" id="" class="form-control" value="{{ $note->title }}">
                    </div>
                    <div class="form-group">
                        <label for="">Text:</label>
                        <input type="text" name="text" id="" class="form-control" value = "{{ $note->text }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a class="btn btn-danger" href="{{ '/delete/'.$note->id }}" >Delete</a>
                </form>
            </div>
        </div>
    </div>
@endsection