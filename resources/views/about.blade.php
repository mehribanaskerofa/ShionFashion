@extends('layouts.home')

@section('content')


<div class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-tittle mb-60 text-center pt-10">
                    <h2>{{$about->title}}</h2>
                    <p class="pera">{{$about->text}}</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
