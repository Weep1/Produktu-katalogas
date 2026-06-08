@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control"
                       value="{{ $product->title }}" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control"
                       value="{{ $product->price }}" required>
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control" required>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected($product->category_id == $category->id)
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
