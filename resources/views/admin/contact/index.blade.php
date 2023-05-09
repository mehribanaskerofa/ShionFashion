@extends('admin.layouts.admin')
@section('content')

{{--    <a class="btn btn-primary my-3" href="{{route('contact.create')}}">Add</a>--}}
    <div class="card">
        <div class="card-body">
            <h1>Contact</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date text</th>
                    <th style="width: 50px">Edit</th>
{{--                    <th>Delete</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $data)
                    <tr>
                        <td>{{$data->id ?? ''}}</td>
                        <td>{{$data->title ?? ''}}</td>
                        <td>{{$data->address ?? ''}}</td>
                        <td>{{$data->phone ?? ''}}</td>
                        <td>{{$data->email ?? ''}}</td>
                        <td>{{$data->date ?? ''}}</td>
                        <td>
                            <a href="{{route('contact.edit',$data)}}" class="btn btn-warning">Edit</a>
                        </td>
{{--                        <td>--}}
{{--                            //action="{{route('menu.delete',$menu->id)}}"--}}
{{--                            <form class="delete-form" action="{{ route('menu.delete',$menu->id) }}" method="POST">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                                <button class="btn btn-danger">Delete</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}

                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection
