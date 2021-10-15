@extends('layout.mainlayout')
@section('title','project course')

@section('main_content')
    <table class="table table-striped">
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
            {{-- @php
                $lectureSize = sizeof($pro['guru'])
            @endphp --}}
            <td>{{$loop->index+1 }}</td>
            <td>
                <a href="courseproject/{{$pro['code']}}">
                {{ $pro['matkul'] }}
                </a>
            </td>
            <td>{{ $pro['guru'] }}</td>
            <td>{{ $pro['sks'] }}</td>
        </tr>

        {{-- @foreach ($pro['guru'] as $guru)
            <tr>
                <td>
                    {{$guru}}
                </td>
            </tr>
        @endforeach --}}

        @endforeach
    </table>
    
@endsection