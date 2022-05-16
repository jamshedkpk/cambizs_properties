@extends('admin.layout.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h3 class="text-center">Welcome To The Catagory Section</h3>
<a href="{{route('catagory-create')}}" class="btn btn-primary">Add New Catagory</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-10 offset-1">
@if(!$catagories->isEmpty())
<table class="table" id="table">
<thead>
<tr>
<th>
S.No
</th>
<th>
Name
</th>
<th>
Edit
</th>
<th>
Delete
</th>
</tr>
</thead>
<tbody>
@foreach($catagories as $index=>$catagory)
<tr>
<td>
{{ $index+1 }}
</td>
<td>
{{ $catagory->name }}
</td>
<td>
<a href="{{route('catagory-edit',$catagory->id)}}">
<span class="mdi mdi-table-edit
"></span>
</a>
</td>
<td>
<a href="{{route('catagory-delete',$catagory->id)}}">
<span class="mdi mdi-delete"></span>
</a>
</td>
</tr>
@endforeach
@else
<tr>
<td>
<h4 class="text-center">No Data Were Found</h4>
<div class="img-thumbnail">
<img class="img-responsive" src="{{asset('template_admin/assets/images/empty.png')}}" alt="" height="300px" width="800px;">
</div>
</td>
</tr>
</tbody>
</table>
@endif
</div>
</div>
</div>
</body>
@endsection

@section('extra-js')

@if($message=Session::get('catagory-stored'))
<script>
swal({
  title: "Good job!",
  text: "{{ $message }}",
  icon:"success",
  timer:2000,  
  button: "OK",
});
</script>
@endif

@if($message=Session::get('catagory-updated'))
<script>
swal({
  title: "Good job!",
  text: "{{ $message }}",
  icon: "success",
  timer:2000,  
  button: "OK",
});
</script>
@endif

@if($message=Session::get('catagory-deleted'))
<script>
swal({
title: "Good job!",
text: "{{ $message }}",
icon: "success",
timer:2000,  
button: "OK",
});
</script>
@endif


<script>
$(document).ready(function(){
$('#table').DataTable();
});
</script>
@endsection