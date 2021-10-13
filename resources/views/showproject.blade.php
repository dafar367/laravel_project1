@extends('layout.mainlayout')
@section('title','project')

@section('page_title')
    <h1>detail project </h1>
@endsection
@section('main_content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$projects['title']}}</h1>
        <p>course: {{$projects['course']}}</p>
        <p>code: {{$projects['code']}}</p>
    </div>
    
@endsection