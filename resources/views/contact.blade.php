@extends('layouts.home')

@section('content')



    <section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">

            {!! $contact->iframe !!}

        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('contactstore')}}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message">salam house</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" value="mehribsn"  placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" value="m.askerova.99@mail.ru" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" value="salam" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
{{--                    <div class="form-group mt-3">--}}
                        <button class="btn btn-secondary">Send</button>
{{--                    </div>--}}
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Baku, Azerbaijan</h3>
                        <p>{{$contact->address}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>{{$contact->phone}}</h3>
                        <p>{{$contact->date}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>{{$contact->email}}</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
