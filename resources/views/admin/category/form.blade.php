@extends('admin.layouts.admin')


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($category) ? route('category.update',$category) :  route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($category)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$category->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" placeholder="slug" name="slug" value="{{old('slug',$category->slug ?? '')}}" class="form-control">
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @isset($category->image)
            <div class="form-group">
{{--                <img src="{{{url('/storage/images/'.$page->image)}}}" width="100px">--}}
                <img src="{{asset('storage/images/'.$category->image)}}" width="100px">
            </div>
            @endisset
            <div class="form-group">
                <label>Image</label>
                <input type="file"  name="image" class="form-control">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection




