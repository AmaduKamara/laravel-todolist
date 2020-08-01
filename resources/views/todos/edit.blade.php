@extends('layouts.app')

@section('content')
  <div class="container">
    
    <div class="text-center mt-5">
      <h3 class="text-info font-weight-normal"">Edit Todo</h2>
    </div>

    <div class="mt-3 border shadow-sm rounded w-75 mx-auto">
      <div class="p-3">
        {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
          {{ Form::bsText('text', $todo->text) }}
          {{ Form::bsTextArea('body', $todo->body) }}
          {{ Form::bsText('due', $todo->due) }}
          {{ Form::hidden('_method', 'PUT') }}
          {{ Form::bsSubmit('Submit', ['class' => 'btn btn-info']) }}
        {!! Form::close() !!}
      </div>
    </div>
  
  </div>
@endsection