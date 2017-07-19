@extends('layouts/main')
{{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
@section('nav')
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded" style="background-color: #3a5795">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('body')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
             <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif







<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <br>
                <h1>Contact Us</h1>
                <p>We are here to answer any questions you may have. Reach out to us and we will get back to you
                    as soon as possible.<br><br>Even if there is something you have always wanted to experience and can't find it here, let us know
                    and we promise to do our best to ensure your satisfaction.
                </p>
                <form action="{{ url('contact') }}" method="post" id="form" name="contact">
                    {{ csrf_field() }}
                    <label for="name">Name:</label>
                    <input type="text" id= "name" name="name" class="form-control" required placeholder="Your name">
                    <br>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="Your e-mail">
                    <br>
                    <label for="company">Company:</label>
                    <input type="text" id="company" name="company" class="form-control" required placeholder="Your company or Private">
                    <br>
                    <label for="contactMessage">Your message</label>
                    <textarea class="form-control" id="contactMessage" name=contactMessage" rows="6" required placeholder="Type your message here..." form="form"></textarea>
                    <br>
                    <div class="g-recaptcha"
                         data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
                    <br>
                    <input type="submit" value="Send" class="btn btn-primary btn-block" style="margin-top:15px;">
                </form>
            </div>
            <div class="col-md-4">
                <br>
                <h5>Email</h5>
                <p>info@automationtubecentral.com</p>
                <br>
                <h5>Find us online</h5>
                <p>images of Facebook, Youtube etc</p>
                <br>

            </div>

        </div>
    </div>
@endsection('body')

<script src='https://www.google.com/recaptcha/api.js'></script>