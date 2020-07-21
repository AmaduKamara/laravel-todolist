@extends('layouts.app')

@section('content')
  <div class="container">
    
    <div class="text-center mt-5">
      <h3 class="text-info font-weight-normal"">Create Todo</h2>
    </div>

    <div class="mt-3 border shadow-sm rounded w-75 mx-auto">
      <div class="p-3">
        <h4>Create a new todo</h4>
        <div>
          @include('inc.messages')
        </div>
        {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
          {{ Form::bsText('text') }}
          {{ Form::bsTextArea('body') }}
          {{ Form::bsText('due') }}
          {{ Form::bsSubmit('Submit', ['class' => 'btn btn-info']) }}
        {!! Form::close() !!}
      </div>
    </div>
  
  </div>
@endsection