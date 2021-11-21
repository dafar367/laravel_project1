@extends('layout.mainlayout')
@section('title','contact')


@section('main_content')

    
<form action="{{route('courseproject.update', $course['course_code'])}}" method="post">
    @csrf
<input type="hidden" name="_method" value="PATCH">
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">edit course</h1>

            <div class="form-group">

                <label for="" class="label-control">mata kuliah :</label>

                <input type="text" name="matkul" class="form-control" value="{{$course->matkul}}">

            </div>

            <div class="form-group">

                <label for="" class="label-control">sks</label>

                <input type="number" name="sks" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">description</label>

                <input name="description" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">guru</label>

                <input name="guru" class="form-control">

            </div>

            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection