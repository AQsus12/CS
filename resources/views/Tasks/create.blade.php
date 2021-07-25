@extends('layout.app')

@section('content')
    <h1>New Tasks</h1>
    @if($errors->any())

    <div class="alert alert-danger" role="alert">

      

    <ul>
        @foreach($errors->all() as $error)

        <li>
            {{ $error }}
        </li>
    
        @endforeach
    </ul>
</div>
    

    @endif
        <form method="POST"action="/tasks">
                <div class="form-group">
                    @csrf
                    <label for="description">Task description</label>
                    <input class="form-control" name="description"/>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create task</button>
                </div>
        </form>
@endsection

