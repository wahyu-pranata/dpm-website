@extends('layouts.app')

@section('content')
	<div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#userForm" id="BtnCreate" data-service="create">Add User</button>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">name</th>
                              <th scope="col">email</th>
                              <th scope="col">status</th>
                              <th scope="col">feature</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                                <tr id="{{ 'user-' . $user->id }}">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary button-edit" data-id="{{ $user->id }}" data-service="edit" data-toggle="modal" data-target="#userForm">Edit</button>
                                            <a href="#" class="btn btn-info">Activity</a>
                                            <a href="#" class="btn btn-warning">Detail</a>
                                            <button class="btn-delete btn btn-danger" data-id="{{ $user->id }}">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="modal" tabindex="-1" role="dialog" id="userForm" data-form="#formData">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" id="formData">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name : </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="input your name ..." value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="input your email ..." value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password : </label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="input your password ..." value="{{ old('password') }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="BtnSubmit">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>  

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const usersData = JSON.parse('{{$users->toJson()}}'.replace(/&quot;/g,'"'));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#userForm").on("show.bs.modal", function(e){
            var caller  = $(e.relatedTarget);
            var form    = $($(this).data("form"));
            form.attr("data-service", caller.data("service"));
            if (caller.data("service") == "edit") 
                form.attr("data-id", caller.data("id"));
        });

        $("#BtnCreate").click(function(e){
            e.preventDefault();
            $("#formData input[name='name']").val('');
            $("#formData input[name='email']").val('');
        });

        $(".button-edit").click(function(e){
            e.preventDefault();
            for(i = 0; i < usersData.length; i++){
                if(usersData[i]['id'] == $(this).data('id')){
                    $("#formData input[name='name']").val(usersData[i]['name']);
                    $("#formData input[name='email']").val(usersData[i]['email']);
                    break;
                }
            }
        });

        $("#BtnSubmit").click(function(e){
            e.preventDefault();

            var form = $("#formData");
            var data = new FormData(form[0]);
            var url  = "";

            if (form.data("service") == "create"){
                url  = "{{route('admin.user.store')}}";;
            } else {
                url  = "{{route('admin.user.update','')}}" + "/" + form.data("id");
                data.set('_method', 'PUT')
            }

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                contentType:false,
                processData: false,
                success: function(data){
                    $("#userForm").modal("hide");
                    swal({
                        title: "Success!",
                        text: data.message,
                        icon: "success",
                        value: true
                    }).then(function(confirmed){
                        location.reload();
                    });
                },
                error: function(data){
                    var errors = data.responseJSON.errors;
                    var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                    for(const error in errors){
                        element += '<li>' + errors[error] + '</li>';
                    }
                    element += '</div>';
                    $("#formData").prepend(element);
                }
            });
        });

        $(".btn-delete").click(function(e){
            $.ajax({
                type: 'DELETE',
                url: "{{ route('admin.user.destroy', '')}}" + '/' + $(this).data("id"),
                success: function(data){
                    swal({
                        title: "Success!",
                        text: data.message,
                        icon: "success",
                        value: true
                    }).then(function(confirmed){
                        location.reload();
                    });
                }
            });
        });


        
    </script>
@endsection

<!-- @section('scripts')
    <script>
        function reset_modal_error(){
            $(".errors-message").remove();    
        }
        function reset_modal_input(names){
            names.forEach(function(e){
                $('#userForm input[name="' + e + '"]').val('');
            })   
        }
    </script>
    @if($errors->store->any())
        <script>
            $('#userForm').modal('show');
        </script>
    @endif
    @if($errors->update->any())
        <script>
            $('#userForm').modal('show');
        </script>
    @endif
    <script type="text/javascript">
        var users = {!!$users->toJson()!!}
        $(".edit-button").click(function(e){
            reset_modal_error();
            var target_id = this.dataset.id;
            var user;
            users.forEach(function(e){
                if(e.id == target_id)
                    user = e;
            });
            ['name', 'email'].forEach(function(e){
                $('#userForm input[name="' + e +'"]').val(user[e]);
            });
            $('#userForm form').attr('action', "{!!route('admin.user.update','')!!}" + '/' + target_id);
            $('#userForm input[name="_method"]').val('PUT');
            $('#userForm').modal('show');
        });
        $("#addButton").click(function(e){
            reset_modal_error();
            reset_modal_input(['name', 'email', 'password']);
        });

        v
    </script>
@endsection -->