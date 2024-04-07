@extends('layouts.base')

@section('content')

<p class= "text-dark">  </p>

<div class="container">
  <div class="row mt-5">
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Product
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Add New Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route('createproducts')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="Prouductname">
                <button type="submit" class="btn btn-info mt-2">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">

          
  <table  class="table table-striped text-center">
    <thead>
    
    <tr>
    <th>ID</th>
    <th>Product Name</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>
    
      <tbody>
    
      @foreach($proudcts as $items )
     
     <tr>
       <td>
         {{$items['id']}}

       </td>
       <td>

         {{$items['Productname']}}

       </td>
       <td> 
        <a href="{{ route('delete-item', ['id' => $items->id]) }}">
            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
        </a>
    </td>
    <td> 
        <a href="{{ route('edit', ['name' => $items->id]) }}" onclick='setvalue("{{ $items->id }}")'>
            <i class="fa fa-edit text-success" aria-hidden="true"></i>
        </a>
    </td>
       </tr>
     @endforeach
      </tbody>

        </div>
      </div>
    </div>
  </div>
  <form action="{{route('search')}}" method="post">
    <input type="text" name="name">
    <button type="submit">search</button>

  </form>
</div>
<script>
function setvalue(id)
{
alert(id);
}
</script>


@endsection