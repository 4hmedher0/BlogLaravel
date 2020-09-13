@extends('layout')

@section('title', 'AllStudnets')

@section('nav')
    @parent

@endsection

@section('content')
    <p><h1>Welcome<h1>Studnets let's make it .</p>

<table class="table table-dark">
  <thead>
    <tr>
     <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
       <th scope="col">Select</th>

     
    </tr> </thead>
@foreach ($post as $std)
<tr>
<td>{{ $std->id }}</td>
<td>{{ $std->name }}</td>
<td>{{ $std->dept }}</td>
<td> <button type="button" class="btn btn-primary">Edit</button>
<button type="button" class="btn btn-secondary">Delete</button>
<button type="button" class="btn btn-success">OK</button></td>

</tr>
@endforeach
    
  </tbody>
</table>



@endsection





@section('footer')
@parent

@endsection