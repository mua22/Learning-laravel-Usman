@extends('master')
@section('content')
    <h1>Products Listings</h1>
    @foreach($products as $product)
        <div class="row">
            <h1>{{$product->title}}</h1>
            <div class="col-md-6"><a href="/products/{{$product->id}}">Show product</a></div>
            <div class="col-md-6">{{$product->price}} &pound;</div>
        </div>
        <hr>
    @endforeach

@endsection

@section('sidebar')
    <h3>Products Table Operations</h3>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="/products/create">Create New Product</a></li>
    </ul>
@endsection