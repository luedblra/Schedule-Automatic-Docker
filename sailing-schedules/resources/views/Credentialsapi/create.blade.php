@extends('layouts.app')

@section('content')



<div class="container-fluid">
   <div class="form-group ">
      <div class="col-ms-3">
         <div class="col-lg-2">
            <a href="{{route('create.passport.client')}}" class="btn btn-block btn-outline-primary "> <span class="fa fa-plus"></span> Add PGT</a>
         </div>
      </div>
      <div class="col-ms-12">
         <center>
            <h1 class="justify-content-center">Credentials API to Sautomatic</h1>
         </center>
      </div>
      <div class="col-12">
         <table class="table table-striped">
            <thead align="center">
               <th>Id</th>
               <th>Name</th>
               <th>Secret</th>
               <th>Password</th>
               <th>Accion</th>
            </thead>
            <tbody align="center">
               @foreach($oauths as $oauth)
               <tr>
                  <td>{{$oauth->id}}</td>
                  <td>{{$oauth->name}}</td>
                  <td>{{$oauth->secret}}</td>
                  <td>{{$oauth->password_client}}</td>

                  <td><a href="#" data-id-passwd="{{$oauth->id}}" class="delete-passwd"><span class="fa fa-trash"></span></a> </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<script>


   $(document).on('click','.delete-passwd', function(e){
      var elemento = $(this);
      var id = $(elemento).attr('data-id-passwd'); 
      swal({
         title: 'Are you sure?',
         text: "You won't be able to revert this! Id: "+id,
         type: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Yes, delete it!',
         cancelButtonText: 'No, cancel!',
         reverseButtons: true
      }).then(function(result){
         if (result.value) {

            url='{!! route("password.delete",":id") !!}';
            url = url.replace(':id',id);
            // $(this).closest('tr').remove();
            $.ajax({
               url:url,
               method:'get',
               success: function(data){
                  if(data == 1){
                     swal(
                        'Deleted!',
                        'Your rate has been deleted.',
                        'success'
                     )
                     $(elemento).closest('tr').remove();

                  }else if(data == 2){
                     swal("Error!", "an internal error occurred!", "error");
                  }
               }
            });
         } else if (result.dismiss === 'cancel') {
            swal(
               'Cancelled',
               'Your rate is safe :)',
               'error'
            )
         }
      });
   });
</script>

@endsection
