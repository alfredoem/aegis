@extends('common.crona')
@section('content')

    <div class="container">
        <h2 class="text-center">
            Ragnarok Application Registered <a href="{{url('auth/logout')}}" title="sign-out">
                <i class="fa fa-sign-out  text-danger"></i>
            </a>
        </h2>
        <div class="row">
            <!-- Centered Tabs -->
            <ul class="nav nav-pills nav-justified">
                @foreach($data as $row)
                    <li>
                        <a href="{{$row->url}}?uid={{$user->userId}}&usession={{$sessionCode}}">
                            <p>{{$row->name}}</p>
                            <img src="images/{{$row->logo}}" alt="" style="width:150px;"/>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection