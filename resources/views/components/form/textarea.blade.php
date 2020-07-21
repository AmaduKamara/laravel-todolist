{{-- // resources/views/components/form/text.blade.php --}}
<div class="form-group">
  {{ Form::label($name, null, ['class' => 'control-label']) }}
  {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>