@extends('layouts.app')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')



<div class="container-fluid">
  <div class="form-group col-3">
  </div>
  <div class="row form-group justify-content-center">
    <h1>Cosco One To One </h1>

  </div>
  <div class="form-group row">

    <div class="col-1"></div>
    <div class="col-4">
      <label>From Country</label>
      {{ Form::select('fromCountry[]', $CosoCity,null,['id' => 'fromCountry','required','class'=>'m-select2-general form-control','onchange="loadToPort(1)"','multiple' => 'multiple'  ,'style' => 'width:100%;']) }}
    </div>
    <div class="col-1"></div>
    <div class="col-4">
      <label>To Country</label>
      {{ Form::select('toCountry[]', $CosoCity,null,['id' => 'ToCountry','required','class'=>'m-select2-general form-control','onchange="loadToPort(2)"','multiple' => 'multiple' ,'style' => 'width:100%;']) }}
    </div>

  </div>
  <br>
  <br>
  {!! Form::open(['route' => 'Cosco.New.Routes','method' => 'post']) !!}
  <div class="form-group row">
    <div class="col-1"></div>
    <div class="col-4" id="FromPortDiv">


    </div>
    <div class="col-1"></div>
    <div class="col-4 " id="ToPortDiv">
    </div>
  </div>
  <br>
  <br>
  <div class="form-group row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="col-sm-9">
        <center>
          {!! Form::submit('Load',['class' => 'col-12 form-control btn btn-primary'])!!}
        </center>
      </div>
    </div>
  </div>
  {!! Form::close() !!}

</div>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

function loadToPort(selectorID){
  var fromCountryArreglo = $('#fromCountry').val();
  var ToCountryArreglo = $('#ToCountry').val();
  var url = '{{ Route('loadportcosco',['selector','id'])}}';

  if(selectorID == 1){
    url = url.replace('id', fromCountryArreglo);
  } else if(selectorID == 2){
    url = url.replace('id', ToCountryArreglo);
  }
  url = url.replace('selector', selectorID);
  //alert(url);
  if(selectorID == 1){
    $('#FromPortDiv').load(url,function(){
    });
  } else if(selectorID == 2){
    $('#ToPortDiv').load(url,function(){
    });
  }
}

$('.m-select2-general').select2({

});

</script>
@endsection
@stop
