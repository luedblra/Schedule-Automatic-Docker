
<label>To Port</label>
{{ Form::select('ToPort[]', $CoscoPorts,null,['id' => 'ToPort2','class'=>'m-select2-general form-control','onchange=""','multiple' => 'multiple','required','style' => 'width:100%;']) }}

<script>
$('.m-select2-general').select2({

});
</script>
