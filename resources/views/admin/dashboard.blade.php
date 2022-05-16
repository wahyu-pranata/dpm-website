@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($notifications as $notification)
                @if($notification->post_limit >= date('Y-m-d'))
                    <div class="card shadow h-100 py-2 w-100 mb-2">
                        <div class="card-body">
                            <h1>{{$notification->title}}</h1>
                            <p>{{$notification->description}}</p>
                            @if($notification->file_path)
                                <a href="{{$notification->file}}" class="btn btn-primary">Download Notification File</a>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection