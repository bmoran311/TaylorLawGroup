@props(['name', 'value'])

@pushOnce('head')
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  <style>
    trix-toolbar .trix-button-group--file-tools {
        display: none;
    }
  </style>
@endpushOnce

<trix-editor input="{{ $name }}">
{!! $value !!}
</trix-editor>
<input id="{{ $name }}" type="hidden" name="{{ $name }}">
