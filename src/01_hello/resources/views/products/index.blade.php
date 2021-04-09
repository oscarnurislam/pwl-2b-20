@extends('layout')
@section('main')
<div class="row">
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>      
    <div class="col-sm-12">
        <h1 class="display-3">Products</h1>
        <p>
            <a href="{{ url('products/create') }}" class="btn btn-primary">New Product</a>
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                <td>SKU</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Inventory</td>
                <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>#{{$product->sku}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->inventory}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['url' => 'products/'. $product->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    <div>
</div>
@endsection