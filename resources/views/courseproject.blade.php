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
            @php ($i = $loop->index)
            @php($i++)
        <tr>
            <td>{{ $i }}</td>
            {{-- <td>{{ $pro['code'] }}</td> --}}
            <td>
                <a href="courseproject/{{$pro['code']}}">
                {{ $pro['matkul'] }}
                </a>
            </td>
            <td>{{ $pro['guru'] }}</td>
            <td>{{ $pro['sks'] }}</td>
        </tr>
   @endforeach
    </table>
    
@endsection