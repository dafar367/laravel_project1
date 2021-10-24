@extends('layout.mainlayout')
@section('title','project course')

@section('main_content')
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Mata kuliah</th>
            <th>Lecture</th>
            <th>SKS </th>
        </tr>


        @foreach ($courses as $pro)
            {{-- @php ($i = $loop->index) @endphp
            @php($i++)  @endphp --}}
            
        <tr>
            @php
                $lectureSize = sizeof($pro['guru']);
            @endphp
            <td rowspan="{{$lectureSize}}">{{$loop->index+1 }}</td>
            <td rowspan="{{$lectureSize}}">
                <a href="courseproject/{{$pro['code']}}">
                {{ $pro['matkul'] }}
                </a>
            </td>
            <td>{{ $pro['guru'] [0]}}</td>
            <td rowspan="{{$lectureSize}}">{{ $pro['sks'] }}</td>
        </tr>

        @foreach ($pro['guru'] as $guru)
            @if ($loop->iteration>1)
            <tr>
                <td>
                    {{$guru}}
                </td>
            </tr>
            @endif
        @endforeach

        @endforeach
    </table>
    
@endsection