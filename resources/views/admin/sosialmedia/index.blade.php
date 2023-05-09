@extends('admin.layouts.admin')
@section('content')

    <a class="btn btn-primary my-3" href="{{route('sosialmedia.create')}}">Add</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Url</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sosialmedia as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{!! $data->icon !!}</td>
                        <td>{{$data->hurl}}</td>
                        <td>
                            <a href="{{route('sosialmedia.edit',$data)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
{{--                            //action="{{route('menu.delete',$menu->id)}}"--}}
                            <form class="delete-form" action="{{ route('sosialmedia.destroy',$data) }}" method="POST">
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
{{--            {{$menuList->links('pagination::bootstrap-4')}}--}}
        </div>
    </div>
@endsection
