@extends('layout.mainlayout')
@section('title','project course')

@section('main_content')
<h1>MY course</h1>
<div class="container"><a href="{{route('courseproject.create')}}"><button type="submit" class="btn btn-primary mb-2">Create Project</button></a> </div>
<br>
<br>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Mata kuliah</th>
            <th>Lecture</th>
            <th>SKS </th>
            <th>action</th>
        </tr>


        @foreach ($courses as $pro)
            {{-- @php ($i = $loop->index) @endphp
            @php($i++)  @endphp --}}
            
        <tr>
            {{-- @php
                $lectureSize = sizeof($pro['guru']);
            @endphp --}}
            <td>{{$loop->index+1 }}</td>
            <td>
                <a href="courseproject/{{$pro['course_code']}}">
                {{ $pro['matkul'] }}
                </a>
            </td>
            <td>{{ $pro['guru'] }}</td>
            <td>{{ $pro['sks'] }}</td>
            <td>
                <div class="d-grid d-md-flex justify-content-center">
                <a href="{{route('courseproject.show', $pro['course_code'] )}}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
                <a href="{{route('courseproject.edit', $pro['course_code'] )}}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
                <form action="{{route('courseproject.destroy', $pro['course_code'] )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </td>
        </tr>

        {{-- @foreach ($pro['guru'] as $guru)
            @if ($loop->iteration>1)
            <tr>
                <td>
                    {{$guru}}
                </td>
            </tr>
            @endif
        @endforeach --}}

        @endforeach
    </table>
    
@endsection