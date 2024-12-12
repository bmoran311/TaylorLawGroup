@props(['name'])

@pushOnce('head')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endpushOnce

@pushOnce('foot')
<script>
  const quill = new Quill('#{{ $name }}_editor', {
    theme: 'snow'
  });
</script>
@endpushOnce


<div id="{{ $name }}_editor">
    {{ $slot }}
</div>
