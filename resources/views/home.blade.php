@extends('layouts.home')

@section('content')

    <div class="container-fluid">
        <div class="slider-area">
            <!-- Mobile Device Show Menu-->
            <div class="header-right2 d-flex align-items-center">
                <!-- Social -->
                <div class="header-social  d-block d-md-none">
                    @foreach($sosialmedia as $media)
                        <a href="{{$media->hurl}}">{!! $media->icon !!}</a>
                    @endforeach
                </div>
                <!-- Search Box -->
                <div class="search d-block d-md-none" >
                    <ul class="d-flex align-items-center">
                        <li class="mr-15">
                            <div class="nav-search search-switch">
                                <i class="ti-search"></i>
                            </div>
                        </li>
                        <li>
                            <div class="card-stor">
{{--                                <img src="assets/img/gallery/card.svg" alt="">--}}
{{--                                <span>0</span>--}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /End mobile  Menu-->

            <div class="slider ">
                <!-- Single -->
                <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <!-- Hero Caption -->
                                <div  style="background: url("{{asset('storage/images/'.$headPage->image)}}") !important">
                                    <h1 class="gj-font-size-16"><br>{{$headPage->title}}<br></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
            </div>
        </div>
    </div>

    <hr>

    <!-- End Hero -->
    <!--? Popular Items Start -->
    <div class="popular-items pt-50">
        <div class="container-fluid">
            <div class="row">
               @foreach($categories3 as $category)
                    <div class="col-lg-4 col-md-6 col-sm-6" >
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="{{asset('storage/images/'.$category->image)}}" style="height: 300px; width: 200px" alt="">
                                <div class="img-cap">
                                    <span>{{$category->title}}</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="{{route('shopcategory',$category->title)}}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="new-arrival">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products8 as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
{{--                            @foreach($product->images as $image)--}}
{{--                                <img src="{{asset('storage/images/'.$image->image)}}" alt="">--}}
{{--                            @endforeach--}}
                            <img src="{{asset('storage/images/'.$product->image)}}" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="assets/img/gallery/favorit-card.png" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="{{route('productdetail',$product->id)}}">{{$product->title}}</a></h3>
                            <div class="rating mb-10">{{$product->category->title}}  </div>
                            <span>$ {{$product->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="catagori.html" class="border-btn">Browse More</a>
                </div>
            </div>
        </div>
    </div>


    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="{{asset('storage/images/'.$aboutPage->image)}}">
        <div class="container-fluid"></div>
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="single-question text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">{{$aboutPage->title}}</h2>
                    <a href="{{$aboutPage->hurl}}" class="btn class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">About Us</a>
                </div>
            </div>
        </div>
        </div>
    </section>


    <div class="categories-area section-padding40 gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services2.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services3.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services4.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
