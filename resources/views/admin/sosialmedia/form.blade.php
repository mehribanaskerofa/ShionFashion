@extends('admin.layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($sosialmedia) ? route('sosialmedia.update',$sosialmedia) :  route('sosialmedia.store')}}" method="POST">
            @csrf
            @isset($sosialmedia)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$sosialmedia->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Icon</label>
                <input type="text" placeholder="Icon" name="icon" value="{{old('icon',$sosialmedia->icon ?? '')}}" class="form-control">
                @error('icon')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Url</label>
                <input type="text" placeholder="Url" name="hurl" value="{{old('url',$sosialmedia->hurl ?? '')}}" class="form-control">
                @error('hurl')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
