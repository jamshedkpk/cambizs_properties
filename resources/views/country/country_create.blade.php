@extends('admin.layout.app')
@section('content')
<br>
<br>
<div class="container mt-5">
<div class="row">
<div class="col-md-8 offset-2">
<h3 class="text-center">Welcome To The Countries Section</h3>
</div>
</div>
<hr>    
<div class="row">
<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-body">
      <form class="forms-sample" action="{{route('country-store')}}">
        @csrf
        <div class="form-group">
          <label for="name">Country Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Country Name" name="name">
        </div>
        <div class="form-group">
          <label for="code">Country Code:</label>
          <input type="text" class="form-control" id="code" placeholder="Country Code" name="code">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-secondary">Cancel</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection
@section('extra-js')
@if($message=Session::get('country stored'))
<script>
swal({
  title: "Good job!",
  text: "Record is stored!",
  icon: "success",
  button: "Aww yiss!",
});
</script>
@endif
@endsection