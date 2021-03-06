@extends('layout.mainlayout')
@section('title','project')

@section('page_title')
    <h1>detail project </h1>
@endsection
@section('main_content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        {{-- <h1>{{$projects['mata_kuliah']}}</h1> --}}
        <h1>{{$projects->course->matkul}}</h1>
        <p>course: {{$projects['project']}}</p>
        <p>code: {{$projects['code']}}</p>
        <p>description: {{$projects['description']}}</p>

        <div class="row">
            <b>List Member</b>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($projects->students as $student)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->jurusan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection