@extends('marco')

@section('title', 'Proyecto | '. $project->title)
    
@section('content')
    <h1>PROYECTO "{{$project->title}}"</h1>
    <p>{{$project->description}}</p>
    <p>{{$project->created_at->diffForHumans()}}</p>
@endsection