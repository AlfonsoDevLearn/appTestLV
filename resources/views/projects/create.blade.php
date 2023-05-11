@extends('marco')

@section('title', 'Crear proyecto')
    
@section('content')
    <h1>Crear nuevo proyecto</h1>

    <form method="POST" action="{{ route('portfolio.store') }}">
        @csrf
        <label>
            Titulo del proyecto: <br>
            <input type="text" name="title" value="{{old('title')}}">
            <br>
            {!!$errors->first('title','<small>:message</small><br>')!!}

        </label>
        <label>
            Descripción: <br>
            <textarea name="description">{{old('description')}}</textarea>
            <br>
            {!!$errors->first('description','<small>:message</small><br>')!!}
        </label>
        <button>Guardar</button>
    </form>
@endsection