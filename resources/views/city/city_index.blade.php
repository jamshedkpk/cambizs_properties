@extends('admin.layout.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h3 class="text-center">Welcome To The City Section</h3>
<a href="{{route('city-create')}}" class="btn btn-primary">Add New City</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-10 offset-1">
@if(!$cities->isEmpty())
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
Country
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
@foreach($cities as $index=>$city)
<tr>
<td>
{{ $index+1 }}
</td>
<td>
{{ $city->name }}
</td>
<td>
{{ $city->country->name }}
</td>
<td>
<a href="">
<span class="mdi mdi-table-edit
"></span>
</a>
</td>
<td>
<a href="">
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
<script>
$(document).ready(function(){
$('#table').DataTable();
});
</script>
@endsection