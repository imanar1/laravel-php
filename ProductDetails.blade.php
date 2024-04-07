@extends('layouts.base')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Add Product Details
          </div>
          <div class="card-body">
            <form action="{{ route('store.product') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
              </div>
              <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" class="form-control" id="qty" name="qty">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
              </div>
              <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id">
              </div>
              <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>