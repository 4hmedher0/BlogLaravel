@extends('layout')

@section('title', 'Page Title')

@section('nav')
    @parent
<div class="col-md-8">
    <p class="col-md-8 "><h6 >Studnet <span class="badge badge-secondary bg-success">New</span></h6>

 </p>
</div>
@endsection

@section('content')
    <form  action="/addform" method="POST">
    	@csrf


  <div class="form" >
    <div >
      <input type="text"  name="name" class="form-control" placeholder="student name"> <br> <br>
    </div>
    <div >
    	<br>
      <input type="text"  name="dept" class="form-control" placeholder="deptartment name">

      <br><br>
<button class="form-control  bg-success" type="submit">

<span class="badge badge-success">Save</span></button>

    </div>
  </div>
</form>
@endsection

@section('footer')
@parent

@endsection




