@extends('admin.layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($menu) ? route('menu.update',$menu->id) :  route('menu.store')}}" method="POST">
            @csrf
            @isset($menu)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$menu->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Url</label>
                <input type="text" placeholder="Url" name="url" value="{{old('url',$menu->url ?? '')}}" class="form-control">
                @error('url')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
