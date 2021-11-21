<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    
<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link @if($title == "home"){{"active"}}@endif" href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == "contact"){{"active"}}@endif" href="/contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == "project"){{"active"}}@endif" href="/myproject">project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == "Courses"){{"active"}}@endif" href="/courseproject">Course project</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link @if($title == "createProject"){{"active"}}@endif" href="/createProject">Create project</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link @if($title == "student"){{"active"}}@endif" href="/student">student</a>
        </li>
      </ul>
</div>

 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom justify-content-center ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ini footer</a>
    </div>
  </nav>