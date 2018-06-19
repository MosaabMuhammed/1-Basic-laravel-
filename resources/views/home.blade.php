@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Home</h1>
    </div>
@endsection


@section('sidebar')
    @parent
    
    <p>This text is appended to the parent!</p>
@endsection
