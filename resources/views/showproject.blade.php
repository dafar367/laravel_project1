@extends('layout.mainlayout')
@section('title','project')

@section('page_title')
    <h1>detail project </h1>
@endsection
@section('main_content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$projects['mata_kuliah']}}</h1>
        <p>course: {{$projects['code']}}</p>
        <p>code: {{$projects['project']}}</p>
        <p>code: {{$projects['description']}}</p>

    </div>
    
@endsection