@php
    $name ??= "";
    $label ??= ucfirst($name);
    $type ??= "text";
    $value ??= "";
    $class ??= Null;
    $options ??= [];
@endphp
<div @class(['col-md-4', $class])>
    <label for="{{ $name }}" class="form-label @error($name) is-invalid @enderror">{{ $label }}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" multiple>
        @foreach ($options as $k => $v)
            <option @selected($value->contains($k))  value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="">
            {{ $message }}
        </div>
    @enderror
</div>