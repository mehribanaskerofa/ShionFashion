@extends('admin.layouts.admin')
@section('content')

    <a class="btn btn-primary my-3" href="{{route('page.create')}}">Add</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
{{--                    <th>Text</th>--}}
                    <th>Slug</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
{{--                        <td>{{$page->text}}</td>--}}
                        <td>{{$data->slug}}</td>
                        <td>
                            <a href="{{route('page.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{ route('page.destroy',$data) }}" method="POST">
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
            {{$pages->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
