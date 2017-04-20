@extends('master')
@section('content')
    <form action="/products/{{$product->id}}" class="form-horizontal" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" value="{{$product->title}}" placeholder="Title">
            </div>
        </div>
        <div class="form-group">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">

                <input type="text" name="slug" class="form-control" id="slug" value="{{$product->slug}}" placeholder="Slug">
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" name="price" class="form-control" id="price" value="{{$product->price}}" placeholder="Price">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea type="text" name="description" class="form-control" id="description"  placeholder="Description">
                {{$product->description}}
                </textarea>
            </div>
        </div>

        <input type="submit" class="btn btn-info">

    </form>
@endsection