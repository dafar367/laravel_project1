@extends('layout.mainlayout')
@section('title','project')

@section('page_title')
    <h1>detail Course </h1>
@endsection
@section('main_content')



    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$courses['matkul']}}</h1>
        <p>code: {{$courses['course_code']}}</p>
        <p>guru: {{$courses['guru']}}
        </p>
        <p>sks: {{$courses['sks']}}</p>
        <p>description: {{$courses['description']}}</p>

    </div>
<br>
<br>

    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th >no </th>
                    <th >Code </th>
                    <th >mata kuliah </th>
                    <th >Sks </th>
                    <th >description </th>
                </tr>
            </thead>

            <tbody>
                @php
                    $index = 1
                @endphp
                @foreach ($courses->projects as $pro)
                <tr>
                    <td>{{$loop->index+1 }}</td>
                    <td>{{$pro['code']}}</td>
                    <td>{{$pro['mata_kuliah']}}</td>
                    <td>{{$pro['semester']}}</td>
                    <td>{{$pro['description']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection