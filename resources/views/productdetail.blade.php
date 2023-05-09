@extends('layouts.home')

@section('content')

    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">shop</a></li>
                            <li class="breadcrumb-item"><a href="#">Product Details</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End-->
    <!--?  Details start -->
    <div class="directory-details pt-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="small-tittle mb-20">
                        <h2>Description {{$product->category->title}} - {{$product->title}} -> {{$product->category->slug}}</h2>
                    </div>
                    <div class="directory-cap mb-40">
                        <p>{{$product->text}}</p>
                    </div>
                    <div class="directory-cap mb-40">
                        <p>{{$product->price}}</p>
                    </div>
                    <div class="small-tittle mb-20">
                        <h2>Product Images</h2>
                    </div>
                    <div class="gallery-img">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{asset('storage/images/'.$product->image)}}" class="mb-30" alt="">
                            </div>

                            @foreach($product->images as $image)
                                <div class="col-lg-6">
                                    <img src="{{asset('storage/images/'.$image->image)}}" class="mb-30" alt="">
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="form-wrapper pt-80">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="small-tittle mb-30">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="{{route('contactstore')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box user-icon mb-15">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-15">
                                        <textarea name="message" id="message" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
