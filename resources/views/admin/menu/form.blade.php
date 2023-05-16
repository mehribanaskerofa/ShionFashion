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
            <div class="form-group">
                <label>Parent menu</label>
                <select class="form-control" name="parent_id">
                    <option value="">Select parent menu</option>
                    @foreach($menus as $subMenu)
                        <option
                           @isset($menu) @selected(old('parent_id',$subMenu->id==$menu->id))@endisset
                            value="{{$subMenu->id}}">{{$subMenu->title}}</option>
                    @endforeach
                </select>
                @error('parent_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Is Active</label>
{{--                checkbox cek olanda on gelir, value=1 checked olarsa onda deyer 1 gelir--}}
                <input type="checkbox" name="is_active" value="1" @checked(old('is_active',$menu->is_active ?? '')) class="form-control">
                @error('is_active')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
