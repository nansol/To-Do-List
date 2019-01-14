@extends('layouts.app')

@section('content')
<a class="btn btn-link" href="/">Go Back</a>

<div class="container">
    <ul class="list-group">
        <li class="list-group-item"> <h1> {{$todo->text}} </h1>
        <div class="badge badge-pill badge-danger">{{$todo->due}}</div>
        <hr>
        <p>{{$todo->body}}</p>
        </li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col align-self-start">
            <a href="/todo/{{$todo->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
        </div>
        <div class="col-auto">
            <a href="/todo/{{$todo->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
        </div>
    </div>
</div>

@endsection



