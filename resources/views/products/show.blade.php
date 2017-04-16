@extends('master')
@section('content')
    <h1>{{$product->title}} <span class="pull-right">{{$product->price}} &pound</span></h1>
    <div>{{$product->description}}</div>
@endsection