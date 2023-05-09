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
                    <th>Email</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contactform as $data)
                    <tr>
                        <td>{{$data->id ?? ''}}</td>
                        <td>{{$data->email ?? ''}}</td>
                        <td>{{$data->name ?? ''}}</td>
                        <td>{{$data->subject ?? ''}}</td>
                        <td>{{$data->message ?? ''}}</td>
                        <td>
{{--                            //action="{{route('contactform.delete',$menu->id)}}"--}}
                            <form class="delete-form" action="{{ route('contactform.destroy',$data) }}" method="POST">
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
        </div>
    </div>
@endsection
