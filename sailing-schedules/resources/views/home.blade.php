@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-8">
                @if (session('success'))
                <div id="notificacion" class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Maersk</div>

                <div class="card-body">
                    <a href="{{route('Maerks.For.Cites')}}" class="btn btn-primary">Maerks For Cities</a>
                    <a href="{{route('Cities.Maerks')}}" class="btn btn-success">Puertos/Rutas Por Seleccion</a>
                    <a href="{{route('Routes.Exist.Chunk')}}" class="btn btn-danger">Actualizar Rutas</a>
                    <a href="{{route('list.cities.maersk')}}" class="btn btn-info">Actualizar Cities</a>
                    <a href="{{route('force.Api.Notification.maersk')}}" class="btn btn-danger">Forzar Notificacion</a>
                    <!--<a href="{{route('test')}}" class="btn btn-danger">Test</a>-->
                </div>
            </div>
            <br><br>
            <div class="card">
                <div class="card-header">Cosco</div>
                <div class="card-body">
                    <a href="{{route('Ports.For.City.Cosco')}}" class="btn btn-primary">Rutas Por Ciudad</a>
                    <a href="{{route('Cities.Cosco')}}" class="btn btn-success">Puertos/Rutas Por Seleccion</a>
                    <a href="{{route('Update.Routes.Cosco')}}" class="btn btn-danger">Actualizar Rutas</a>
                    <a href="{{route('list.cities.cosco')}}" class="btn btn-info">Actualizar Cities</a>
                    <a href="{{route('force.Api.Notification.cosco')}}" class="btn btn-danger">Forzar Notificacion</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">

    $(document).ready(function(){
       $("#notificacion").hide(7000);
    });

</script>
@endsection
