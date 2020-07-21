@extends('layouts.app')

@section('content')
  <div class="card p-3 mt-5 m-3 border shadow-sm rounded w-75 mx-auto">
    <div class="text-center">
      <h4>
        <small class="font-weight-lighter">Todo</small>
        <span class="mx-2 text-info font-weight-light">/</span>
        <span><a href="/" class="font-weight-light">Todos</a></span>
      </h4>
    </div>
    <div class="mt-3 border p-3">
      <h3>{{ $todo->text }}</h3>
      <p>{{ $todo->body }}</p>
      <div class="badge badge-danger badge-pill font-weight-light py-1 px-2">{{ $todo->due }}</div>
    </div>
  </div>
@endsection