@extends('admin.layout.app')
@section('content')
<h3 class="text-center">List Of Countries</h3>
<button class="btn btn-primary">Add New Country</button>
<hr>
@if(!$countries->isEmpty())
<table class="table">
<thead>
<tr>
<th>
S.No
</th>
<th>
Name
</th>
<th>
Code
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
@foreach($countries as $country)
<tr>
<td>
{{ $country->id }}
</td>
<td>
{{ $country->name }}
</td>
<td>
{{ $country->code }}
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
</body>
@endsection