<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
@extends('layout.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif


    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>
    <p>{{ $task->completed }}</p>
@endsection
