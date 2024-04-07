@extends('layouts.base')

@section('content')

<div class="container">

<div class="card mt-5">

<div class="card-body bg-white">

<form action="{{route('update')}}" method="post">

@csrf

<div class="row mt-3 text-center" >

<input type="hidden" name="id" value="{{$proudcts['id']}}">

<div class="col">

<label for="prname">اسم المنتج</label>

<input type="text" name="productname" class="form-control p-1" id="prname" value="{{$proudcts['productname']}}">

</div>
</div>

<div class="row mt-3">

<div class="col text-center">

<button class="btn btn-success" tvpe="submit">Save</button>

</div>