@extends('admin.layouts.admin')
@section('content')

    <a class="btn btn-primary my-3" href="{{route('productimage.create')}}">Add</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Created date</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productImages as $data)
                    <tr>
                        <td>{{$data->id}}</td>

                        <td>
                                <img src="{{asset('storage/images/'.$data->image)}}" width="100px">
                        </td>

                        <td>{{$data->product->title}}</td>
                        <td>{{$data->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('productimage.edit',$data)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{ route('productimage.destroy',$data) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$productImages->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
