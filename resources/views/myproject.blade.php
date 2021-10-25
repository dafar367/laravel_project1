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

<div class="container"><a href="{{ route('myproject.create') }}"><button type="submit" class="btn btn-primary mb-2">Create Project</button></a> </div>

<br>
<br>
<table class="table table-striped">
    <tr>
        <th>No </th>
        {{-- <th>code </th> --}}
        <th>project</th>
        <th>semester</th>
        <th>mata kuliah </th>
        <th>description </th>
        <th>action</th>
    </tr>

   
   @foreach ($projects as $pro)
   @php ($i = $loop->index)
        @php($i++)
        {{-- @if($loop->even)
            @php($semester = "EVEN")
        @else
            @php($semester = "ODD")
        @endif --}}
        <tr>
            <td>{{ $pro['id'] }}</td>
            {{-- <td>{{ $pro['code'] }}</td> --}}
            <td>
                <a href="myproject/{{$pro['code']}}">
                {{ $pro['project'] }}
                </a>
            </td>
            <td>{{ $pro['semester'] }}</td>
            <td>{{ $pro['mata_kuliah'] }}</td>
            <td>{{$pro['description']}}</td>
            <td>
                <div class="d-grid d-md-flex justify-content-center">
                <a href="{{ route('myproject.show', $pro->code) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
                <a href="{{ route('myproject.edit', $pro['id']) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
                <form action="{{ route('myproject.destroy', $pro['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </td>
        </tr>
   @endforeach
</table>
@endsection
    
