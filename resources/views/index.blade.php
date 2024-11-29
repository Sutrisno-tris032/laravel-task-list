<h1> The List of Tasks</h1>
<div class="container">
    {{-- @if (count($tasks) > 0) --}}
    <div>~~ There are tasks ~~</div>
    <br>
    @forelse  ($tasks as $task)
        <p>
            <a href="{{ route('tasks.show', ['task_id' => $task->id]) }}">{{ $task->title }}</a>
        </p>
        {{-- <p>{{ $task->title }}</p> --}}
    @empty
        <div>There are no tasks </div>
    @endforelse
    {{-- @endif --}}
    {{-- Hello World, and hello {{ $name }} --}}
</div>
