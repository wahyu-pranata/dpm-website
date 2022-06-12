@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Submission</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if($submissions)
                            <div class="list-group">
                                @foreach($submissions as $submission)
                                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $submission->name }}</h5>
                                            <div class="d-flex">
                                                <button class="btn-delete btn btn-danger" data-id="{{ $submission->id }}">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-delete").click(function(e){
            $.ajax({
                type: 'DELETE',
                url: "{{ route('admin.submission.destroy', '')}}" + '/' + $(this).data("id"),
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