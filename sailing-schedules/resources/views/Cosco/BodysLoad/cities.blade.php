{!! Form::open(['route' => ['update.cosco',$CoscoCity->id],'method' => 'put'])!!}

<div class="form-group row">
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            City Name:
        </label>
        {!! Form::text('cityName',$CoscoCity->cityName,['class' => 'form-control'])!!}
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Code:
        </label>
        {!! Form::text('code',$CoscoCity->code,['class' => 'form-control','style' => 'color:red'])!!}
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            City Code:
        </label>
        {!! Form::text('cityCode',$CoscoCity->cityCode,['class' => 'form-control'])!!}
    </div>
</div>
<div class="form-group row ">
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Country:
        </label>

        <select value="{{$CoscoCity->country}}" id="countryLoad" onchange="equalsData()" class="form-control">
            @foreach($contries as $contry)
            <option value="{{$contry->name}}">{{$contry->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-3">
        <label for="NameMD" class="form-control-label">
            Country Name:
        </label>
        {!! Form::text('country',$CoscoCity->country,['class' => 'form-control','id' => 'countryName','readonly' => 'true'])!!}
    </div>
    <div class="col-6">
        <label for="NameMD" class="form-control-label">
            Full Formate:
        </label>
        {!! Form::textArea('fullFormate',$CoscoCity->fullFormate,['class' => 'form-control','style' => 'color:red','rows'=>'2'])!!}
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