@extends('layout.mainlayout')
@section('title','contact')


@section('main_content')

    
<form action="{{route('myproject.store')}}" method="post">
@csrf
    <div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

        <h1 align="center">tambah project</h1>

            <div class="form-group">

                <label for="" class="label-control">project name</label>

                <input type="text" name="project" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">semester</label>

                <input type="number" name="semester" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">description</label>

                <input name="description" class="form-control">

            </div>

            <div class="form-group">

                <label for="" class="label-control">mata kuliah</label>

                <select name="mataKuliah" class="form-control">
                    <option value="" selected disabled hidden>pilih sini gan</option>
                    @foreach ($courses as $course)
                                <option value="{{ $course['course_code'] }}">{{ $course['matkul'] }}</option>
                    @endforeach
                </select>

            </div>

            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection