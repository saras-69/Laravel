@extends('layout')

@section('title')
Products Page
@endsection

@section('content')
<h1>This is Products Page</h1>
@foreach ($products as $product)
<a href="product/{{$product['id']}}">
<img src="{{$product['image']}}" alt=""> 
</a>
<p>{{$product['category']}}</p>
<p>{{$product['type']}}</p>
<p>{{$product['brand']}}</p>
<p>{{$product['model']}}</p>     
@endforeach
@endsection