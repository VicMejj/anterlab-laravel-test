<h1>Tasks for {{ $user->name }}</h1>

@forelse($user->tasks as $task)
    <p>- {{ $task->title }}</p>
@empty
    <p>No tasks found.</p>
@endforelse
