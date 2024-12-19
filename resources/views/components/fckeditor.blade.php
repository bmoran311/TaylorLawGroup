@props(['name'])

@pushOnce('head')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
@endpushOnce


<div id="{{ $name }}_editor">
    <p>Hello from CKEditor 5!</p>
</div>

@push('foot')
 <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;

        ClassicEditor
            .create( document.querySelector( '#{{ $name }}_editor' ), {
                licenseKey: '<YOUR_LICENSE_KEY>',
                plugins: [ Essentials, Bold, Italic, Font, Paragraph],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'formatPainter'
                ]
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
@endpush
