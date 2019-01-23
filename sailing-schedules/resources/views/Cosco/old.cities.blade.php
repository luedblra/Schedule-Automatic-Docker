@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="form-group col-3">

        <form action="{{route('Nuevos.Puertos.Rutas.cities')}}" method="get" class="navabar-form pull-left">
            <div class="input-group">
                <input type="text" name="search" placeholder="Ciudad" class="form-control" aria-describedby='search'/> 
                <div class="input-group-prepend">
                    <div class="input-group-text" id="search"><span class="fa fa-at">@</span></div>
                </div>
            </div>
        </form>
    </div>
    <div class="row form-group justify-content-center">
        <h1>Maersk Busqueda De Rutas Por Ciudades</h1>
        <div class="col-10">
            <table class="table table-striped">
                <thead align="center">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Ciudad</th>
                    <th>Accion</th>
                </thead>
                <tbody align="center">
                    @foreach($cities as $city)
                    <tr>
                        <td>{{$city->id}}</td>
                        <td>{{$city->countryName}}</td>
                        <td>{{$city->countryCode}}</td>
                        <td>{{$city->cityName}}</td>
                        <td><a href="{{route('Citie.Routes',$city->id)}}">Cargar Cola</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $cities->render()!!}
        </div>
    </div>
</div>


@endsection
