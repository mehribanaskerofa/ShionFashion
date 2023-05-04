@extends('admin.layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Contact</h1>

        <form action="{{ isset($contact) ? route('contact.update',$contact->id) :  route('contact.store')}}" method="POST">
            @csrf
            @isset($contact)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$contact->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" placeholder="address" name="address" value="{{old('address',$contact->address ?? '')}}" class="form-control">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label></label>
                <input type="text" placeholder="Iframe" name="iframe" value="{{old('iframe',$contact->iframe ?? '')}}" class="form-control">
                @error('iframe')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" placeholder="phone" name="phone" value="{{old('phone',$contact->phone ?? '')}}" class="form-control">
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="email" name="email" value="{{old('email',$contact->email ?? '')}}" class="form-control">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Date text</label>
                <input type="text" placeholder="date" name="date" value="{{old('date',$contact->date ?? '')}}" class="form-control">
                @error('date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
