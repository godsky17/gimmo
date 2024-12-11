@php
    $name ??= "";
    $label ??= ucfirst($name);
    $type ??= "text";
    $value ??= "";
    $class ??= Null;
@endphp
<div @class(['col-md-4', $class])>
    <label for="{{ $name }}" class="form-label @error($name) is-invalid @enderror">{{ $label }}</label>
    @if ($type === 'text')
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value)}}">
    @else
        <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" >{{ old($name, $value)}}</textarea>
    @endif
    @error($name)
        <div class="">
            {{ $message }}
        </div>
    @enderror
</div>