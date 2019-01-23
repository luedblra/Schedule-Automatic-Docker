@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="form-group row col-3">

        <form action="{{route('list.cities.maersk')}}" method="get" class="navabar-form pull-left">
            <div class="input-group">
                <input type="text" name="search" placeholder="Ciudad" class="form-control" aria-describedby='search'/> 
                <div class="input-group-prepend">
                    <div class="input-group-text" id="search"><span class="fa fa-at"></span></div>
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            @if (session('success'))
            <div id="notificacion" class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row form-group justify-content-center">
        <h1>Maersk For Cities</h1>
        <div class="col-11">
            <table class="table table-striped">
                <thead align="center">
                    <th>Id</th>
                    <th>geoId</th>
                    <th>city Name</th>
                    <th>code</th>
                    <th>countryName</th>
                    <th>countryCode</th>
                    <th>Accion</th>
                </thead>
                <tbody align="center">
                    @foreach($MaerskCities as $MaerskCity)
                    <tr>
                        <td>{{$MaerskCity->id}}</td>
                        <td>{{$MaerskCity->geoId}}</td>
                        <td>{{$MaerskCity->cityName}}</td>
                        <td>{{$MaerskCity->code}}</td>
                        <td>{{$MaerskCity->countryName}}</td>
                        <td>{{$MaerskCity->countryCode}}</td>
                        <td>
                            <a href="#" onclick="showModal({{$MaerskCity->id}})" ><span class="fa fa-edit"></span></a> 
                            &nbsp; &nbsp;
                            <a href="#" class="borrado" data-id-delete="{{$MaerskCity->id}}"><span class="fa fa-times"></span></a> 

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $MaerskCities->render()!!}
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cities / Ports Maersk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" id="body">
                    Modal body..
                    <!-- Modal footer -->
                </div>
            </div>
        </div>
    </div>


    @endsection
    @section('script')
    <script type="application/javascript">

        $(document).ready(function(){

            $("#notificacion").hide(7000);
        });


        $(document).on('click','.borrado',function(){

            var elemento = $(this);
            var id = $(elemento).attr('data-id-delete');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    url = '{{route("delete.maersk",":id")}}';
                    url = url.replace(':id',id);
                    $.ajax({
                        url: url,
                        method:'get',
                        success:function(data){
                            if(data == 1){
                                swal(
                                    'Deleted!',
                                    'The city has been deleted.',
                                    'success'
                                )
                                $(elemento).closest('tr').remove();
                            } else if(data == 2){
                                swal({
                                    type: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                    footer: '<a href>Why do I have this issue?</a>'
                                })
                            }
                        }
                    });
                }
            })
        });

        function showModal(id){
            // alert('funciona');

            url = "{{route('Edit.City.Maersk',':id')}}"
            url = url.replace(':id',id);
            $('#body').load(url,function(){
                $('#myModal').modal('show');
            });

        }

    </script>
    @stop