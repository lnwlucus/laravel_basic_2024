@extends('layout')
@section('content')
    <h3>Product Form</h3>


    <form
        @if (isset($product)) action="/product/{{ $product->id }}"
    @else 
        action="/product" @endif
        method="post">

        @csrf
        @if (isset($product))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name ?? '' }}">
        </div>

        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price ?? '' }}">
        </div>

        <div class="form-group">
            <label for="qty">qty</label>
            <input type="text" name="qty" class="form-control" value="{{ $product->qty ?? '' }}">
        </div>

        <div class="form-group">
            <label for="detail">detail</label>
            <input type="text" name="detail" class="form-control" value="{{ $product->detail ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            <i class="fa fa-save"></i>
            Save
        </button>
    </form>
@endsection