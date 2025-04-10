@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<h1> Ajax crued </h1>
<!-- Button trigger modal -->

<a href="" class=" btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" > Add products </a>
    <table class="table table-danger">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
          <tr>
            <th>{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->price}}</td>
            <td>
                <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
                <a href="javascript:void(0)" onclick="deleteproduct({{$data->id}})" class="btn btn-success"><i class="las la-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

<script type="text/javascript">
  function deleteproduct(id){
    if(confirm("are u sure u want to delte this "))
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
    });
    $.ajax({
      url:'deleteproduct/' + id,
      type:'DELETE',
      success:function(result){

      }
    })
  }

</script>
@include('addproduct')
</body>
</html>
@endsection