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

                <input name="mataKuliah" class="form-control">

            </div>

            <input type="submit" value="submit" class="btn btn-primary">

        </div>

    </div>

</form>
    
@endsection