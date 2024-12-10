@props([
    'key'
])

@error($key)
    <p class="mt-2 text-sm text-red-600" id="{{$key}}-error">{{ $message }}</p>
@enderror
