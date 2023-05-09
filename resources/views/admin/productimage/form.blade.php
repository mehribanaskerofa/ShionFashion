@extends('admin.layouts.admin')


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($productImage) ? route('productimage.update',$productImage) :  route('productimage.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($productImage)
            @method('PUT')
            @endisset
            @isset($productImage->image)
                <div class="form-group">
                    <img src="{{asset('storage/images/'.$productImage->image)}}" width="100px">
                </div>
            @endisset
            <div class="form-group">
                <label>Image</label>
                <input type="file"  name="image" class="form-control">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Product</label>
                <select name="product_id" class="form-control">
                    @foreach($products as $product)
                        <option value="{{$product->id}}" @isset($productImage) @selected(old($product->id,$productImage->$product_id)==$product->id) @endisset >{{$product->title}}</option>
                    @endforeach
                </select>
                @error('product_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection



