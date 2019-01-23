
<label>From Port</label>
{{ Form::select('fromPort[]', $CoscoPorts,null,['id' => 'fromPort2','class'=>'m-select2-general form-control','required','onchange=""','multiple' => 'multiple'  ,'style' => 'width:100%;']) }}

<script>
$('.m-select2-general').select2({

});
</script>
