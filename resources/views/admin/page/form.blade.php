@extends('admin.layouts.admin')


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($page) ? route('page.update',$page) :  route('page.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($page)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$page->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea id="summernote"  placeholder="text" name="text" class="form-control">{{old('text',$page->text ?? '')}}</textarea>
                @error('text')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" placeholder="slug" name="slug" value="{{old('slug',$page->slug ?? '')}}" class="form-control">
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @isset($page->image)
            <div class="form-group">
{{--                <img src="{{{url('/storage/images/'.$page->image)}}}" width="100px">--}}
                <img src="{{asset('storage/images/'.$page->image)}}" width="100px">
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

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/summernote.css')}}" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('js')
    <script src="{{asset('assets/js/summernote.js')}}" integrity="sha512-ZESy0bnJYbtgTNGlAD+C2hIZCt4jKGF41T5jZnIXy4oP8CQqcrBGWyxNP16z70z/5Xy6TS/nUZ026WmvOcjNIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
      $(document).ready(function (){
          $('#summernote').summernote();
      });

    </script>
@endsection


