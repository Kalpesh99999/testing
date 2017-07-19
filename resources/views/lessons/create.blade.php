{{--Form to create new lessons in the database--}}

@extends('layouts/main')

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
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Create a New Lesson</h1>
                {!! Form::open(['route'=>'lessons.store']) !!}
                    {{Form::label('name','Enter Lesson Title:')}}
                    {{Form::text('name',null,array('class'=>'form-control'))}}

                    {{Form::label('course_id','Course ID:')}}
                    {{Form::text('course_id',null,array('class'=>'form-control'))}}

                    {{Form::label('description','Enter Lesson Description:')}}
                    {{Form::textarea('description',null,array('class'=>'form-control'))}}

                    {{Form::label('youtube_id','Enter YouTube video ID :')}}
                    {{Form::text('youtube_id',null,array('class'=>'form-control'))}}

                    {{Form::label('vimeo_id','Enter vimeo ID :')}}
                    {{Form::text('vimeo_id',null,array('class'=>'form-control'))}}

                     {{Form::label('Token_price_30','Enter 30 day Selling Price:')}}
                     {{Form::text('Token_price_30',null,array('class'=>'form-control'))}}

                    {{Form::label('Token_price_60','Enter 60 day Selling Price:')}}
                    {{Form::text('Token_price_60',null,array('class'=>'form-control'))}}

                    {{Form::label('Token_price_90','Enter 90 day Selling Price:')}}
                    {{Form::text('Token_price_90',null,array('class'=>'form-control'))}}

                     {{Form::label('lesson_name_slug','Enter slug version of the lesson title:')}}
                     {{Form::text('lesson_name_slug',null,array('class'=>'form-control'))}}

                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block'))}}

                {!! Form::close() !!}




            </div>
            <div class="col-md-4">
                njnjnj
            </div>
        </div>
    </div>
@endsection