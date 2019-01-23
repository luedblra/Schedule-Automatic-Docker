@extends('layouts.app')

@section('content')



<div class="container-fluid">
   <div class="form-group row col-3">

   </div>
   <div class="form-group ">
      <div class="col-ms-12">
         <center>
            <h1 class="justify-content-center">Credentials API Smanual</h1>
         </center>
      </div>
      <div class="col-12">
         <table class="table table-striped">
            <thead align="center">
               <th>Id</th>

               <th>Auth Post</th>
               <th>Client Id</th>
               <th>Client Secret</th>
               <th>Email</th>
               <th>Url</th>
               <th>Carrier</th>
               <th>Description</th>
               <th>Accion</th>
            </thead>
            <tbody align="center">
               @foreach($credentials as $credential)
               <tr>
                  <td>{{$credential->id}}</td>
                  <td>{{$credential->auth_post}}</td>
                  <td>{{$credential->client_id}}</td>
                  <td>{{$credential->client_secret}}</td>
                  <td>{{$credential->user_name}}</td>
                  <td>{{$credential->url}}</td>
                  <td>{{$credential->carrier->name}}</td>
                  <td>{{$credential->description}}</td>
                  <td><a href="#" onclick="showModal({{$credential->id}})"><span class="fa fa-edit"></span></a> </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title"> Credential Api</h4>
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

<script>

   function showModal(id){
      // alert('funciona');

      url = "{{route('Credential.edit',':id')}}"
      url = url.replace(':id',id);
      $('#body').load(url,function(){
         $('#myModal').modal('show');
      });

   }
</script>


@endsection
