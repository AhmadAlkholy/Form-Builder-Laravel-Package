@if($formAttrs)
    <form action="{{ $formAttrs['action'] ?? '' }}" method="{{ $formAttrs['method'] ?? 'GET' }}" enctype="multipart/form-data" {{ $formAttrs['attrs'] ?? '' }}>
        @endif
        <div id="formFields"></div>
        {{ csrf_field() }}

        @if($formAttrs)
    </form>
@endif

@include('formbuilder::form_builder_js')
<script type="text/javascript">
    let formBuilderFields = JSON.parse('<?php echo json_encode($fields); ?>');

    const formBuilder = new FormBuilder(formBuilderFields, '#formFields');
</script>
