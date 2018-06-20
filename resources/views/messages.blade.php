@extends('layouts.master')

@section('content')
    <h1>All Messages:</h1>

    @if(count($messages))
            @foreach($messages as $message)
                <ul class="list-group">
                    <li class="list-group-item"> <strong>{{ $message->name }} </strong> at {{ $message->created_at->diffForHumans() }}</li>
                    <li class="list-group-item"> <strong>E-mail:  </strong>{{ $message->email }}</li>
                    <li class="list-group-item"> <strong>Message:  </strong>{{ $message->name }}</li>
                </ul>
            @endforeach
    @endif
@endsection


@section('sidebar')
    @parent

    <p>This text is appended to the parent!</p>
@endsection
