@extends('layout.app')

@section('title', 'The List of Tasks')

@section('content')
    <div class="container">
        <div>~~ There are tasks ~~</div>
        <br>
        @forelse  ($tasks as $task)
            <p>
                <a href="{{ route('tasks.show', ['task_id' => $task->id]) }}">{{ $task->title }}</a>
            </p>
        @empty
            <div>There are no tasks </div>
        @endforelse
    </div>
@endsection
