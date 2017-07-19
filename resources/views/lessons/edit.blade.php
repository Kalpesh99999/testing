@extends('layouts/main')

<div class="container">
    {!! Form::model($lesson,['route'=>['lessons.update',$id],'method'=> 'PUT']) !!}

        {{ Form::label('Name', 'Lesson Name:')}}
        {{ Form::text('Name', null, ["class" =>'form-control']) }} {{--Para 1 : Must correspond to name in DB--}}

        {{ Form::label('description', 'Lesson Description:')}}
        {{ Form::text('description', null, ["class" =>'form-control']) }}

        {{ Form::label('youtube_id', 'Enter Youtube ID:')}}
        {{ Form::text('youtube_id', null, ["class" =>'form-control']) }}

        {{ Form::label('vimeo_id', 'Enter Vimeo ID:')}}
        {{ Form::text('vimeo_id', null, ["class" =>'form-control']) }}

        {{ Form::label('Token_price_30', 'Selling Price for 30 days access:')}}
        {{ Form::text('Token_price_30', null, ["class" =>'form-control']) }}

        {{ Form::label('Token_price_60', 'Selling Price for 60 days access:')}}
        {{ Form::text('Token_price_60', null, ["class" =>'form-control']) }}

        {{ Form::label('Token_price_90', 'Selling Price for 90 days access:')}}
        {{ Form::text('Token_price_90', null, ["class" =>'form-control']) }}

        {{ Form::submit('Update',array('class'=>'btn btn-success btn-lg btn-block'))}}

    {!! Form::close() !!}
</div>

