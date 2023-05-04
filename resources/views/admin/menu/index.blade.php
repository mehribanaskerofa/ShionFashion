@extends('admin.layouts.admin')
@section('content')

    <a class="btn btn-primary my-3" href="{{route('menu.create')}}">Add</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Url</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menuList as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->url}}</td>
                        <td>
                            <a href="{{route('menu.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
{{--                            //action="{{route('menu.delete',$menu->id)}}"--}}
                            <form class="delete-form" action="{{ route('menu.delete',$data->id) }}" method="POST">
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
            {{$menuList->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
