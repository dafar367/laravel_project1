@extends('layout.mainlayout')
@section('title','project')


@section('main_content')
<h1>MY PROJECT</h1>
{{-- <div class="container mt-3">

<table class="table table-striped">
    <tr>
        <th>No </th>
        <th>description </th>
    </tr>

    @for($i=1;$i<=10;$i++)
        <tr>
            <td>project {{($i)}} </td>
            <td>lorem ipsum</td>
        </tr>
    @endfor
    
</table>
</div> --}}


<br>
<br>
<table class="table table-striped">
    <tr>
        <th>No </th>
        {{-- <th>code </th> --}}
        <th>project</th>
        <th>semester</th>
        <th>projek </th>
        <th>description </th>
    </tr>

   
   @foreach ($projects as $pro)
   @php ($i = $loop->index)
        @php($i++)
        @if($loop->even)
            @php($semester = "EVEN")
        @else
            @php($semester = "ODD")
        @endif
        <tr>
            <td>{{ $i }}</td>
            {{-- <td>{{ $pro['code'] }}</td> --}}
            <td>
                <a href="myproject/{{$pro['code']}}">
                {{ $pro['title'] }}
                </a>
            </td>
            <td>{{ $semester }}</td>
            <td>{{ $pro['course'] }}</td>
            <td>@if ($loop->first)
                    My Very FIRST projects
                @elseif ($loop->last)
                    My LAST project
                @else
                    Lorem ipsum dolor sit amet
                @endif
            </td>
        </tr>
   @endforeach
</table>
@endsection
    
