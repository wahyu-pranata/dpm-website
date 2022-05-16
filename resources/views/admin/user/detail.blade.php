@extends('layouts.app')

@section('content')
	<div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <nav class="card-header">
                      <div class="nav nav-pills" id="pills-tab" role="tablist">
                        <a class="nav-link active" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Details</a>
                        <a class="nav-link" id="nav-educations-tab" data-toggle="tab" href="#nav-educations" role="tab" aria-controls="nav-educations" aria-selected="false">Educations</a>
                        <a class="nav-link" id="nav-experiences-tab" data-toggle="tab" href="#nav-experiences" role="tab" aria-controls="nav-experiences" aria-selected="false">Working Experiences</a>
                        <a class="nav-link" id="nav-organizations-tab" data-toggle="tab" href="#nav-organizations" role="tab" aria-controls="nav-organizations" aria-selected="false">Organizations</a>
                        <a class="nav-link" id="nav-movements-tab" data-toggle="tab" href="#nav-movements" role="tab" aria-controls="nav-movements" aria-selected="false">Movements</a>
                        <a class="nav-link" id="nav-achievements-tab" data-toggle="tab" href="#nav-achievements" role="tab" aria-controls="nav-achievements" aria-selected="false">Achievements</a>
                      </div>
                    </nav>
                    <div class="tab-content card-body" id="nav-tabContent">
                    <!-- Details -->
                      <div class="tab-pane fade show" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
                        <form method="POST" id="form-details">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="detail-faculity">Faculity : </label>
                                        <input type="text" name="faculity" id="detail-faculity" class="form-control" placeholder="input your faculity ..." value="{{ $user->detail->faculity ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-birthplace">Birthplace :</label>
                                        <input type="text" name="birthplace" id="detail-birthplace" class="form-control" placeholder="input your birth place ..." value="{{ $user->detail->birthplace ?? '' }}">             
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-generation">Generation : </label>
                                        <input type="text" name="generation" id="detail-generation" class="form-control date-picker-year" placeholder="input your generation (Only Year) ..." value="{{ $user->detail->generation ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-role">Role : </label>
                                        <select class="form-select" aria-label="Default select example" name="role_id" id="detail-role">
                                          <option selected></option>
                                          @foreach($roles as $role)
                                              <option value="{{$role->id}}" {{ isset($user->detail) && $user->detail->id == $role->id ? 'selected' : '' }}>{{$role->role}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-instagram">Instagram : </label>
                                        <input type="text" name="instagram" id="contact-instagram" class="form-control" placeholder="input your instagram account ..." value="{{ $user->contact->instagram ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="detail-study_program">Study Program : </label>
                                        <input type="text" name="study_program" id="detail-study_program" class="form-control" placeholder="input your Study Program ..." value="{{ $user->detail->study_program ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-birthdate">Birthdate : </label>   
                                        <input type="text" name="birthdate" id="detail-birthdate" class="form-control date-picker" placeholder="input your birth date ..." value="{{ $user->detail->birthdate ?? '' }}">                            
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-religion">Religion : </label>
                                        <select class="form-select" aria-label="Default select example" name="religion" id="detail-religion">
                                          <option selected></option>
                                          <option value="Islam" {{ isset($user->detail) && $user->detail->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                                          <option value="Kristen" {{ isset($user->detail) && $user->detail->religion == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                          <option value="Hindu" {{ isset($user->detail) && $user->detail->religion == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                          <option value="Buddha" {{ isset($user->detail) && $user->detail->religion == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                          <option value="Konghucu" {{ isset($user->detail) && $user->detail->religion == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-address">Address : </label>
                                        <textarea name="address" id="detail-address" class="form-control">{{ $user->detail->address ?? 'input your address ...' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-phone">Phone : </label>
                                        <input type="text" name="phone" id="contact-phone" class="form-control" placeholder="input your phone number ..." value="{{ $user->contact->phone ?? '' }}">
                                    </div>
                                </div>
                            </div>                         
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary" id="btn-details-submit" data-form="#form-details" data-url="{{ route('admin.user.detail.update', $user->id) }}">
                            </div>
                        </form>
                      </div>

                      <!-- Educations -->
                      <div class="tab-pane fade show" id="nav-educations" role="tabpanel" aria-labelledby="nav-educations-tab">
                        <form method="POST" id="form-educations">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="education-level">Level Education : </label>
                                        <input type="text" name="level" id="education-level" class="form-control" placeholder="input your Level Education (SD,SMP,SMA) ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="education-start_at">Start At : </label>
                                        <input type="text" name="start_at" id="education-start_at" class="form-control date-picker" placeholder="input your Start At ..." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="education-institution">Institution : </label>
                                        <input type="text" name="institution" id="education-institution" class="form-control" placeholder="input your Institution ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="education-end_at">End At : </label>
                                        <input type="text" name="end_at" id="education-end_at" class="form-control date-picker" placeholder="input your End At ..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary" id="btn-educations-submit" data-form="#form-educations" data-url="{{ route('admin.user.education.store') }}">
                            </div>
                        </form>
                        <hr>
                        <div class="educations-container p-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Level Education</th>
                                  <th scope="col">Institution</th>
                                  <th scope="col">Start At</th>
                                  <th scope="col">End At</th>
                                  <th scope="col">Feature</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user->educations as $education)
                                    <tr id="{{ 'user-' . $user->id }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $education->level }}</td>
                                        <td>{{ $education->institution }}</td>
                                        <td>{{ $education->start_at }}</td>
                                        <td>{{ $education->end_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn-educations-delete btn btn-danger" data-url="{{ route('admin.user.education.destroy', $education->id)}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                      </div>

                      <!-- Experiences -->
                      <div class="tab-pane fade show" id="nav-experiences" role="tabpanel" aria-labelledby="nav-experiences-tab">
                        <form method="POST" id="form-experiences">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="experience-role">Role : </label>
                                        <input type="text" name="role" id="experience-role" class="form-control" placeholder="input your role ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience-start_at">Start At : </label>
                                        <input type="text" name="start_at" id="experience-start_at" class="form-control date-picker" placeholder="input your Start At ..." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="experience-institution">Institution : </label>
                                        <input type="text" name="institution" id="experience-institution" class="form-control" placeholder="input your Institution ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience-end_at">End At : </label>
                                        <input type="text" name="end_at" id="experience-end_at" class="form-control date-picker" placeholder="input your End At ..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary"  id="btn-experiences-submit" data-form="#form-experiences" data-url="{{ route('admin.user.experience.store') }}">
                            </div>
                        </form>
                        <hr>
                        <div class="experiences-container p-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Role</th>
                                  <th scope="col">Institution</th>
                                  <th scope="col">Start At</th>
                                  <th scope="col">End At</th>
                                  <th scope="col">Feature</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user->experiences as $experience)
                                    <tr id="{{ 'user-' . $user->id }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $experience->role }}</td>
                                        <td>{{ $experience->institution }}</td>
                                        <td>{{ $experience->start_at }}</td>
                                        <td>{{ $experience->end_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn-experiences-delete btn btn-danger" data-url="{{ route('admin.user.experience.destroy', $experience->id)}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                      </div>

                      <!-- Organizations -->
                      <div class="tab-pane fade show" id="nav-organizations" role="tabpanel" aria-labelledby="nav-organizations-tab">
                        <form method="POST" id="form-organizations">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="organization-role">Role : </label>
                                        <input type="text" name="role" id="organization-role" class="form-control" placeholder="input your role ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="organization-start_at">Start At : </label>
                                        <input type="text" name="start_at" id="organization-start_at" class="form-control date-picker" placeholder="input your Start At ..." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="organization-organization">Organization : </label>
                                        <input type="text" name="organization" id="organization-organization" class="form-control" placeholder="input your Organization ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="organization-end_at">End At : </label>
                                        <input type="text" name="end_at" id="organization-end_at" class="form-control date-picker" placeholder="input your End At ..." value="">
                                    </div>
                                </div>
                            </div>                      
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary" id="btn-organizations-submit" data-form="#form-organizations" data-url="{{ route('admin.user.organization.store') }}">
                            </div>
                        </form>
                        <hr>
                        <div class="experiences-container p-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Role</th>
                                  <th scope="col">Organization</th>
                                  <th scope="col">Start At</th>
                                  <th scope="col">End At</th>
                                  <th scope="col">Feature</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user->organizations as $organization)
                                    <tr id="{{ 'user-' . $user->id }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $organization->role }}</td>
                                        <td>{{ $organization->organization }}</td>
                                        <td>{{ $organization->start_at }}</td>
                                        <td>{{ $organization->end_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn-organizations-delete btn btn-danger" data-url="{{ route('admin.user.organization.destroy', $organization->id)}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                      </div>

                      <!-- Movements -->
                      <div class="tab-pane fade show" id="nav-movements" role="tabpanel" aria-labelledby="nav-movements-tab">
                        <form method="POST" id="form-movements">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="movement-movement">Movement : </label>
                                        <input type="text" name="movement" id="movement-movement" class="form-control" placeholder="input your Movement ..." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="movement-held_at">Held At : </label>
                                        <input type="text" name="held_at" id="movement-held_at" class="form-control date-picker" placeholder="input your Start At ..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary" id="btn-movements-submit" data-form="#form-movements" data-url="{{ route('admin.user.movement.store') }}">
                            </div>
                        </form>
                        <hr>
                        <div class="experiences-container p-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Movement</th>
                                  <th scope="col">Start At</th>
                                  <th scope="col">End At</th>
                                  <th scope="col">Feature</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user->movements as $movement)
                                    <tr id="{{ 'user-' . $user->id }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $movement->movement }}</td>
                                        <td>{{ $movement->start_at }}</td>
                                        <td>{{ $movement->end_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn-movements-delete btn btn-danger" data-url="{{ route('admin.user.movement.destroy', $movement->id)}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                      </div>

                      <!-- Achievements -->
                      <div class="tab-pane fade show" id="nav-achievements" role="tabpanel" aria-labelledby="nav-achievements-tab">
                        <form method="POST" id="form-achievements">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="achievement">Achievements : </label>
                                        <input type="text" name="achievement" id="achievement" class="form-control" placeholder="input your Achievements ..." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="achieved_at">Achieved at : </label>
                                        <input type="text" name="achieved_at" id="achieved_at" class="form-control date-picker" placeholder="input your Achieved at ..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary" id="btn-achievements-submit" data-form="#form-achievements" data-url="{{ route('admin.user.achievement.store') }}">
                            </div>
                        </form>
                        <hr>
                        <div class="achievement-container p-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Achievement</th>
                                  <th scope="col">Achieved At</th>
                                  <th scope="col">Feature</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($user->achievements as $achievement)
                                    <tr id="{{ 'user-' . $user->id }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $achievement->achievement }}</td>
                                        <td>{{ $achievement->achieved_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn-achievements-delete btn btn-danger" data-url="{{ route('admin.user.achievement.destroy', $achievement->id)}}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                      </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            // move to selected tab  
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            var activeTab = localStorage.getItem('activeTab');
            console.log($('a[href="' + (activeTab ? activeTab : '#nav-details') + '"]'));

            $(activeTab + ', a[href="' + activeTab + '"]').tab('show');
            // $('a[href="' + (activeTab ? activeTab : '#nav-details') + '"]').tab('show');

            $('#nav-tab a').on('click', function (event) {
                event.preventDefault();
                $(this).tab('show');
            });


            // specify type of datepicker
            $('.date-picker').datepicker({
                dateFormat: "yy-mm-dd",
                changeYear: true,
                changeMonth: true,
                yearRange: "-100:+0"
            });
            
            $('.date-picker-year').datepicker({
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy',
                onClose: function(dateText, inst) { 
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, 1));
                }
            });


            // ajax setting
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 


            // User Detail
            $('#btn-details-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'PUT');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(form).prepend(element);
                    }
                });
            });


            // User Educations
            $('#btn-educations-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'POST');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(".error-message").remove();
                        var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                        for(const error in errors){
                            element += '<li>' + errors[error] + '</li>';
                        }
                        element += '</div>';
                        $(form).prepend(element);
                    }
                });
            });

            $(".btn-educations-delete").click(function(e){
                $.ajax({
                    type: 'DELETE',
                    url: $(this).data("url"),
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


            // User Experiences
            $('#btn-experiences-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'POST');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(".error-message").remove();
                        var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                        for(const error in errors){
                            element += '<li>' + errors[error] + '</li>';
                        }
                        element += '</div>';
                        $(form).prepend(element);
                    }
                });
            });


            $(".btn-experiences-delete").click(function(e){
                $.ajax({
                    type: 'DELETE',
                    url: $(this).data("url"),
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


            // User Organizations
            $('#btn-organizations-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'POST');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(".error-message").remove();
                        var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                        for(const error in errors){
                            element += '<li>' + errors[error] + '</li>';
                        }
                        element += '</div>';
                        $(form).prepend(element);
                    }
                });
            });


            $(".btn-organizations-delete").click(function(e){
                $.ajax({
                    type: 'DELETE',
                    url: $(this).data("url"),
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

            // User Movements
            $('#btn-movements-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'POST');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(".error-message").remove();
                        var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                        for(const error in errors){
                            element += '<li>' + errors[error] + '</li>';
                        }
                        element += '</div>';
                        $(form).prepend(element);
                    }
                });
            });


            $(".btn-movements-delete").click(function(e){
                $.ajax({
                    type: 'DELETE',
                    url: $(this).data("url"),
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


            // User Achievements
            $('#btn-achievements-submit').on('click', function(e){
                event.preventDefault();

                var form = $($(this).data('form'));
                var data = new FormData(form[0]);
                var url  = $(this).data('url');
                data.set('_method', 'POST');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data){
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
                        $(".error-message").remove();
                        var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                        for(const error in errors){
                            element += '<li>' + errors[error] + '</li>';
                        }
                        element += '</div>';
                        $(form).prepend(element);
                    }
                });
            });


            $(".btn-achievements-delete").click(function(e){
                $.ajax({
                    type: 'DELETE',
                    url: $(this).data("url"),
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

        });

    </script>
@endsection