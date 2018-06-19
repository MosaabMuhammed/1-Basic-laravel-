@extends('layouts.master')

@section('content')
    <div class="col-md-8 col-lg-8">
        <h1>Contact</h1>

        {!! Form::open(['url' => 'contact/submit', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name...']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Your E-mail...']) }}
            </div>
            <div class="form-group">
                {{ Form::label('message', 'Message:') }}
                {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your Message...']) }}
            </div>
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection
