@props(['name', 'height' => '400'])

@pushOnce('head')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endpushOnce

@pushOnce('foot')
<script>
 document.addEventListener('DOMContentLoaded', function() {
    const quill = new Quill('#{{ $name }}_editor', {
        theme: 'snow'
    });

    var textarea = document.getElementById('{{ $name }}_value');

    quill.on('text-change', function() {

        textarea.value = quill.root.innerHTML;

    });
    textarea.addEventListener('input', function() {

        quill.root.innerHTML = textarea.value;

    });
 });
</script>
@endpushOnce

<div>
    <div id="{{ $name }}_editor" style="min-height: {{ $height }}px;">
        {{ $slot }}
    </div>
    <textarea class="hidden" id="{{ $name }}_value" name="{{ $name }}" rows="8"></textarea>
</div>
