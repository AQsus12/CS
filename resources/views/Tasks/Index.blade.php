@extends('layout.app')

@section('content')
    <h1>Todo List</h1>

        @foreach ($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif" style="margin-button: 20px;">
            <div class="card-body">
                <p>  
                    @if($task->isCompleted())
                         <span class="badge bg-success">Completed</span>
                    @endif{{ $task -> description }}
                </p>
                @if(!$task -> isCompleted())
                <form action ="/tasks/{{ $task ->id }}" method="POST">
                    @method('PATCH')
                    @csrf 
                    <button class="btn btn-light btn-block" input="submit">Complete</button>
                </form>
                @else
                <form action ="/tasks/{{ $task ->id }}" method="POST">
                    @method('DELETE')
                    @csrf 
                    <button class="btn btn-danger btn-block" input="submit">Delete</button>
                </form>
                @endif
            </div>
          </div>
        @endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection
            
