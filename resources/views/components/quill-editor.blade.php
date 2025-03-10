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

<div x-data="{source: false}">
    <div x-show="!source" x-cloak>
        <div id="{{ $name }}_editor" style="min-height: {{ $height }}px;" >
            {{ $slot }}
        </div>
    </div>
    <textarea x-cloak x-show="source" id="{{ $name }}_value" name="{{ $name }}" rows="8" class="text-input" style="min-height: {{ $height }}px;"></textarea>
    {{-- <div class="flex justify-end mt-2">
        <button @click="source = !source" type="button" class="text-blue-500 hover:underline text-sm">
            <span x-show="!source" x-cloak>HTML Mode</span>
            <span x-show="source" x-cloak>Content Mode</span>
        </button>
    </div> --}}
</div>
