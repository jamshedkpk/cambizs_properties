@extends('admin.layout.app')
@section('content')
<div class="container mt-5">
<div class="row">
<div class="col-md-8 offset-2">
<h3 class="text-center">Welcome To The ads Section</h3>
</div>
</div>
<hr>    
<div class="row">
<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-body">
      <form class="forms-sample" action="{{route('ads-store')}}">
        @csrf
        <div class="form-group">
          <label for="name">Ads Name:</label>
          <input type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="Ads Name" name="name">
          @error('name')
          <strong class="text-danger">
            {{ $message }}
          </strong>
          @enderror
        </div>
        <div class="form-group">
          <label for="code">Ads Code:</label>
          <input type="text" value="{{old('code')}}" class="form-control" id="code" placeholder="ads Code" name="code">
          @error('code')
          <strong class="text-danger">
            {{ $message }}
          </strong>
          @enderror
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

@endsection