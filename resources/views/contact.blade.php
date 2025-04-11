@extends('layouts.master')
@section('content')

<form  action="{{ route('adduser') }}" method="POST">
  @csrf
  <div class="alert alert-success  "> {{session('status')}}</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text"  value="{{old('name')}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('name')<span class="text-danger">{{$message}}</span>@enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleInputPassword1">
    @error('email')<span class="text-danger">{{$message}}</span>@enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="number"name="mobile" value="{{old('mobile')}}" class="form-control" id="exampleInputPassword1">
    @error('mobile')<span class="text-danger">{{$message}}</span>@enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">class</label>
    <input type="text"name="class" value="{{old('class')}}" class="form-control" id="exampleInputPassword1">
    @error('class')<span class="text-danger">{{$message}}</span>@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<button> <a href="{{ route('showdata') }}"> Show data </button>
@endsection