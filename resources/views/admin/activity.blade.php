@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ ($user->name ?? Auth::user()->name) . ' Activity ' }}</h6>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#activityForm" id="BtnCreate" data-service="create">Add Activity</button>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if($user->activities)
                            <div class="list-group">
                                @foreach($user->activities as $userActivity)
                                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                                        <small>{{ $userActivity->held_at }}</small>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $userActivity->activity }}</h5>
                                            <div class="d-flex">
                                                <button class="btn btn-primary button-edit mr-3" data-id="{{ $userActivity->id }}" data-service="edit" data-toggle="modal" data-target="#activityForm">Edit</button>
                                                <button class="btn-delete btn btn-danger" data-id="{{ $userActivity->id }}">Delete</button>
                                            </div>
                                        </div>
                                        <p class="mb-1">{{ $userActivity->description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="modal" tabindex="-1" role="dialog" id="activityForm" data-form="#formData">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" id="formData">
                        <input type="hidden" name="id" value="{{$user->id ?? ''}}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="activity">Activity : </label>
                                <input type="text" name="activity" id="activity" class="form-control" placeholder="input your activity ..." value="">
                            </div>
                            <div class="form-group">
                                <label for="activity_role">Role : </label>
                                <input type="text" name="activity_role" id="activity_role" class="form-control" placeholder="input your activity role ..." value="">
                            </div>
                            <div class="form-group">
                                <label for="description">Description : </label>
                                <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="held_at">Held at : </label>
                                <input type="text" name="held_at" id="held_at" class="form-control"  value="">
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
    <script type="text/javascript">
        const activityData = JSON.parse('{{$user->activities->toJson() ?? Auth::user()->activities->toJson()}}'.replace(/&quot;/g,'"'));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#activityForm").on("show.bs.modal", function(e){
            var caller  = $(e.relatedTarget);
            var form    = $($(this).data("form"));
            form.attr("data-service", caller.data("service"));
            if (caller.data("service") == "edit") 
                form.attr("data-id", caller.data("id"));
        });

        $("#BtnCreate").click(function(e){
            e.preventDefault();
            ['activity', 'activity_role', 'description', 'held_at'].forEach(function(name){
                $("#formData input[name='" + name + "']").val('');
            });
        });

        $(".button-edit").click(function(e){
            e.preventDefault();
            for(i = 0; i < activityData.length; i++){
                if(activityData[i]['id'] == $(this).data('id')){
                    ['activity', 'activity_role', 'description', 'held_at'].forEach(function(name){
                        $("#formData input[name='" + name + "']").val(activityData[i][name]);
                        $("#formData textarea[name='" + name + "']").val(activityData[i][name]);
                    });
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
                url  = "{{route('admin.activity.store', $user->id ?? '')}}";
            } else {
                url  = "{{route('admin.activity.update','')}}" + "/" + form.data("id");
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
                url: "{{ route('admin.activity.destroy', '')}}" + '/' + $(this).data("id"),
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

        $(function () {
            $('#held_at').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
@endsection