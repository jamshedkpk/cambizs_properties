@extends('admin.layout.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h3 class="text-center">Welcome To The ad Section</h3>
<a href="{{route('ads-create')}}" class="btn btn-primary">Add New ad</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-10 offset-1">
@if(!$ads->isEmpty())
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
Start Date
</th>
<th>
End Date
</th>
<th>
Status
</th>
<th>
Catagory
</th>
<th>
User
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
@foreach($ads as $index=>$ad)
<tr>
<td>
{{ $index+1 }}
</td>
<td>
{{ $ad->name }}
</td>
<td>
{{ $ad->start_date }}
</td>
<td>
{{ $ad->end_date }}
</td>
<td>
{{ $ad->status }}
</td>
<td>
{{ $ad->catagory_id }}
</td>
<td>
{{ $ad->user_id }}
</td>
<td>
<a href="{{route('ads-edit',$ad->id)}}">
<span class="mdi mdi-table-edit
"></span>
</a>
</td>
<td>
<a href="{{route('ads-delete',$ad->id)}}">
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

@if($message=Session::get('ad-stored'))
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

@if($message=Session::get('ad-updated'))
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

@if($message=Session::get('ads-deleted'))
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