@extends('admin.layout.app')
@section('content')
<div class="container mt-5">
<div class="row">
<div class="col-md-8 offset-2">
<h3 class="text-center">Welcome To The State Section</h3>
</div>
</div>
<hr>    
<div class="row">
<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-body">
      <form class="forms-sample" action="{{route('state-store')}}">
        @csrf
        <div class="form-group">
          <label for="name">State Name:</label>
          <input type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="State Name" name="name">
          @error('name')
          <strong class="text-danger">
            {{ $message }}
          </strong>
          @enderror
        </div>
        <div class="form-group">
            <label for="country_id">Country:</label>
            <select name="country_id" id="country_id" class="form-control" value="{{old('country_id')}}">
                <option value="null">Select A Country</option>
                @foreach($countries as $country)
                <option value="{{$country->id}}">{{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id')
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