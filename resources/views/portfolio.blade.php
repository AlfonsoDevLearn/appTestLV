@extends('marco')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{route('portfolio.create')}}">Añadir registro</a>
    <ul>
        
        @forelse ($portfolio as $p)
            <li><a href="{{route('portfolio.show', $p)}}">{{$p->title}}</a></li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
        
    </ul>

@endsection