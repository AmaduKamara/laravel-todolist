@extends('layouts.app')

@section('content')
  <div class="container">
    
    <div class="text-center mt-5">
      <h3 class="text-info font-weight-normal"">All Todos</h2>
    </div>

    <div class="mt-3 border shadow-sm rounded w-75 mx-auto">
      @if (count($todos) > 0)
        @foreach ($todos as $todo)
          <div class="card p-2 mt-3 m-3">
            <div>
              <h3 class="font-weight-light text-info"><a href="todos/{{ $todo->id }}" class="text-decoration-none">{{ $todo->text }}</a></h3> 
              <div class="badge badge-danger badge-pill font-weight-light py-1 px-2">{{ $todo->due }}</div>
            </div>
          </div>
        @endforeach

        <div class="container">
          {{ $todos->links() }}
        </div>

      @endif
    </div>
  
  </div>
@endsection