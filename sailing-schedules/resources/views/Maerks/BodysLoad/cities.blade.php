{!! Form::open(['route' => ['update.maersk',$MaerskCity->id],'method' => 'put'])!!}

<div class="form-group row">
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            GeoId:
        </label>
        {!! Form::text('geoId',$MaerskCity->geoId,['class' => 'form-control'])!!}
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            City Name:
        </label>
        {!! Form::text('cityName',$MaerskCity->cityName,['class' => 'form-control'])!!}
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Code:
        </label>
        {!! Form::text('code',$MaerskCity->code,['class' => 'form-control'])!!}
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Country Code:
        </label>
        {!! Form::text('countryCode',$MaerskCity->countryCode,['class' => 'form-control'])!!}
    </div>
</div>
<div class="form-group row ">
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Country:
        </label>
        <select value="" id="countryLoad" onchange="equalsData()" class="form-control">
            @foreach($contries as $contry)
            <option value="{{$contry->name}}">{{$contry->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Country Name:
        </label>
        {!! Form::text('countryName',$MaerskCity->countryName,['class' => 'form-control','id' => 'countryName','readonly' => 'true'])!!}
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" >Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
{!! Form::close()!!}

<script>
    function equalsData(){
        var text = $('#countryLoad').val();
        $('#countryName').attr('value',text);
    }
</script>