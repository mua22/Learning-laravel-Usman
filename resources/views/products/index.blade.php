@extends('master')
@section('content')
    <h1>Products Listings</h1>
    @foreach($products as $product)
        <div class="row">
            <h1 class="product-title">{{$product->title}}</h1>
            <div class="col-md-6"><a href="/products/{{$product->id}}">Show product</a></div>
            <div class="col-md-6">
                {{$product->price}} &pound;
                    <div  class="col-md-offset-3" style="display: inline">
                        <a href="/products/{{$product->id}}/edit" class="btn btn-primary">Update</a>
                        <form class="delete-form" style="display: inline" action="/products/{{$product->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" id="delete" type="submit" value="Delete">
                        </form>
                    </div>
            </div>

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

@section('scripts')
    <script src="{{asset('js/delete.js')}}" type="text/javascript"></script>
@endsection