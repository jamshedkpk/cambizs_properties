@extends('admin.layout.app')
@section('content')
<div class="container mt-5">
<div class="row">
<div class="col-md-8 offset-2">
<h3 class="text-center">Welcome To The Catagory Section</h3>
</div>
</div>
<hr>    
<div class="row">
<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-body">
      <form method="post" class="forms-sample" action="{{route('catagory-update',$catagory->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Catagory Name:</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Catagory Name" value="{{$catagory->name}}">
          @error('name')
          <strong class="text-danger">
            {{ $message }}
          </strong>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-secondary">Cancel</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection
@section('extra-js')

@endsection