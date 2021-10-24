@extends('layout.mainlayout')
@section('title','project')

@section('page_title')
    <h1>detail Course </h1>
@endsection
@section('main_content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$courses['matkul']}}</h1>
        <p>code: {{$courses['code']}}</p>
        <p>guru: 
        @foreach ($courses['guru'] as $lecturer)
            @if ($loop->iteration == $loop->last)
                {{ $lecturer }}
            @else
                {{ $lecturer }},
            @endif
        @endforeach
        </p>
        <p>sks: {{$courses['sks']}}</p>
        <p>description: {{$courses['description']}}</p>

    </div>
    
@endsection