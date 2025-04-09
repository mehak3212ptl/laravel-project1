@extends('layouts.master')
@section('content')
<h3>
  Show Data
  <small class="text-muted">of Students Table </small>
</h3>


<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit </th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      
      <td>{{$data->id}}</td>
      <td >{{$data->name}}</td>
      <td >{{$data->class}}</td>
      <td >{{$data->mobile}}</td>
      <td >{{$data->email}}</td>
      <td ><button type="button" class="btn btn-warning"><a href="{{url($data->id.'/edit')}}">Edit</button></td>
      <td >
        <button type="button"  class="btn btn-danger"><a href="{{url($data->id.'/delete')}}">Delete</a></button>
    </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection