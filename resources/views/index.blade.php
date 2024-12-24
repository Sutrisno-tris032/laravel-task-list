@extends('layout.app')

@section('title', 'The List of Tasks')

@section('content')
    <div class="container">
        <div>~~ There are tasks ~~</div>
        <div><a href="{{ route('tasks.create') }}">Create a new task</a></div>
        <br>
        @forelse  ($tasks as $task)
            <p>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->id }}. {{ $task->title }}</a> ||
                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
            </p>
        @empty
            <div>There are no tasks </div>
        @endforelse

    </div>
@endsection
